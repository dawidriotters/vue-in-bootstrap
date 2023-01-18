<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Blade VS Vue prove of consept</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div id="app">
        <h1> Html / Blade page with vue component</h1>
        <p> text ....</p>
        <p> text ....</p>
        <my-component :name="'{{$name}}'"></my-component>
        <p> text ....</p>
        <p> text ....</p>
        <p> text ....</p>
    </div>

    @vite('resources/js/app.js')
</body>

</html>