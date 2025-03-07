<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Myfiance - I tuoi servizi fiscali</title>
</head>

<body>
    <x-navbar>
    </x-navbar>

    <div class="min-vh-100 mb-5">
        {{ $slot }}
    </div>

    <x-footer>
    </x-footer>
</body>

</html>
