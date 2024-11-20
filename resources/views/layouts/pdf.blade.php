<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Resume</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <style>
        body {
            font-family: Arial, sans-serif;
            width: 8.5in;
            height: 11in;
        }

        .content {
            word-wrap: break-word;
        }
    </style>
</head>

<body>
    <main>
        <div class="content text-xs">
            @yield('content')
        </div>
    </main>
</body>

</html>
