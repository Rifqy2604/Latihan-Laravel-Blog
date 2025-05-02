<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ $title }}</title>
</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover"
style="background-image:url('https://source.unsplash.com/1L71sPT5XKc');">
<x-navbar></x-navbar>
{{ $slot }}
</body>