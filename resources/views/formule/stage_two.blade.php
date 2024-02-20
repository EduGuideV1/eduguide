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
    <div class="container mx-auto my-10 px-5 ">
        <form action="/stage-two" method="POST" class="bg-white p-5 rounded shadow">
            @csrf
            <label for="education_level">niveau Scholaire</label>
            <input type="text" id="education_level" name="education_level" required class=" w-200 p-2 border border-gray-300 rounded"><br>

            <label for="pays" class="mx-auto">Pays:</label>
            <input type="text" id="pays" name="pays" required class=" w-200 p-2 border border-gray-300 rounded"><br>

            <label for="formation">Formation souhaitee</label>
            <select name="formation" required>
                <option value="formation1">Licence</option>
                <option value="formation2">Master</option>
                <option value="formation3">Engenieere</option>
            </select><br>
            <button type="submit" class="mt-5 bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
        </form>
    </div>
</body>

</html>
