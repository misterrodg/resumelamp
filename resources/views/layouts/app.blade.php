<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <link rel="icon" type="image/png" href="icons8-airplane-tail-fin.png" />
</head>

<body class="bg-slate-900">
    <header class="bg-slate-800 border-b-4 border-b-sky-400 text-white p-4 mb-4 flex justify-between items-center">
        <div>
            <h1>Kyle Rodgers</h1>
            <h3>Full Stack Developer</h3>
        </div>
        <nav class="ml-auto text-white">
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:text-gray-400 @if (request()->is('/')) text-sky-400 @endif">Home</a>
                </li>
                <li><a href="/about"
                      class="hover:text-gray-400 @if (request()->is('about')) text-sky-400 @endif">About</a>
                </li>
                <li><a href="/skills"
                      class="hover:text-gray-400 @if (request()->is('skills')) text-sky-400 @endif">Skills</a>
                </li>
                <li><a href="/history"
                      class="hover:text-gray-400 @if (request()->is('history')) text-sky-400 @endif">History</a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="p-4 w-full flex justify-center">
        <div class="max-w-4xl w-full text-white text-sm">
            @yield('content')
        </div>
    </main>
</body>

</html>
