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
        <form action="/stage-one" method="POST" class="bg-white p-5 rounded shadow">
            @csrf
            <label for="full_name" class="block mb-2">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required class=" w-200 p-2 border border-gray-300 rounded">

            <label for="phone_number" class="block mt-5 mb-2">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required class=" w-200 p-2 border border-gray-300 rounded"><br>

            <button type="submit" class="mt-5 bg-blue-500 text-white px-4 py-2 rounded">Next</button>
        </form>
    </div>
</body>

</html>
