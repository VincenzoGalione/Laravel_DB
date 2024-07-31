<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire 2</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="body">
    <x-navbar/>
    {{$slot}}
</body>
</html>