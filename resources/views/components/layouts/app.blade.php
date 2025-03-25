<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite(['resources/css/app.css'])
    </head>
    <body class="min-h-screen bg-gray-100">
        <div class="flex">
            <!-- Vertical Navigation -->
            <nav class="w-48 min-h-screen bg-white shadow-md p-4">
                <div class="flex flex-col space-y-4">
                    <a href="/" class="px-4 py-2 hover:bg-gray-100 rounded">Home</a>
                    <a href="/todos" class="px-4 py-2 hover:bg-gray-100 rounded">Todos</a>
                    <a href="/counter" class="px-4 py-2 hover:bg-gray-100 rounded">Counter</a>
                    <a href="/dummy" class="px-4 py-2 hover:bg-gray-100 rounded">Dummy</a>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="flex-1 p-8">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
