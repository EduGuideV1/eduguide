<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased w-full flex flex-col items-center">
        <div class="w-full max-w-[1422px]">
            @include('partials.nav')
        </div>
    <div class="container">
        <form action="/stage-two" method="POST">
            @csrf
            <label for="education_level">niveau Scholaire</label>
            <input type="text" id="education_level" name="education_level" required>
        
            <label for="pays">Pays:</label>
            <input type="text" id="pays" name="pays" required>
        
            <label for="formation">Formation souhaitee</label>
            <select name="formation" required>
                <option value="formation1">Licence</option>
                <option value="formation2">Master</option>
                <option value="formation3">Engenieere</option>
            </select>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
