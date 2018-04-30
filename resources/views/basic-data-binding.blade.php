<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- JavaScript -->
    <script src="{{ mix('js/app.js') }}"></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>
<div class="content">

    <div id="root">
        <input type="text" id="input" v-model="message">
        <p>The value of the input is: @{{ message }}</p>
    </div>

    <div id="app"></div>

</div>

<script>
    new Vue({
        el: '#root',
        data: {
            message: 'Hello World'
        }
    })
</script>

</body>
</html>
