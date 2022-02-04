<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Nathan Hazzard' }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        <link href="/css/app.css" rel="stylesheet" />
    </head>
</html>
<body class="bg-slate-300">
    <div class="p-5 bg-gradient-to-br from-orange-500 to-amber-400">
        <a href="{{ route('homepage') }}">
            <div class="h-20 w-20 bg-contain bg-[center_left_0.2rem] border-4 border-slate-200 rounded-full"
                style="background-image: url('https://lh3.googleusercontent.com/a-/AOh14GgH2kEOGlVfVxO1IW31FPCIjQZI0NEQI2s82PMubw')">
            </div>
        </a>
    </div>
    <div class="max-w-6xl mx-auto lg:px-8 sm:px-6 sm:py-6">
        {{ $slot }}
    </div>
</body>