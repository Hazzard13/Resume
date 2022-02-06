<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="This site is the personal resume of Nathan Hazzard. Everything on this site is made from scratch, by me. No outside help was used, whether with design, writing, coding, etc.">

        <title>{{ $title ?? 'Nathan Hazzard' }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

        <link href="/css/app.css" rel="stylesheet" />

        <script src="//unpkg.com/alpinejs" defer></script>
    </head>
</html>
<body class="relative h-auto min-h-screen pb-10 bg-slate-300">
    <div class="relative p-5 bg-gradient-to-br from-orange-500 to-amber-400">
        <a class="block float-left" href="{{ route('homepage') }}">
            <div class="h-16 w-16 sm:h-20 sm:w-20 bg-contain bg-[center_left_0.2rem] border-4 border-slate-200 rounded-full"
                style="background-image: url('https://lh3.googleusercontent.com/a-/AOh14GgH2kEOGlVfVxO1IW31FPCIjQZI0NEQI2s82PMubw')">
            </div>
        </a>
        <div class="float-right text-slate-100 sm:w-3/4">
            <a href="{{ route('timeline') }}" class="block float-right pr-6 text-center">
                Timeline
            </a>
            <a href="{{ route('technologies') }}" class="block float-right pr-6 text-center">
                Technologies
            </a>
            <a class="block float-right pr-6 text-center">
                Major Projects
            </a>
        </div>
        <div class="clear-both"></div>
    </div>
    {{ $slot }}
    <div class="absolute bottom-0 w-full h-10 bg-gradient-to-br from-orange-500 to-amber-400">
        <div class="mx-auto text-center w-60 text-slate-100">
            <a class="float-left px-2" href="https://github.com/Hazzard13/Resume">
                <svg aria-hidden="true" focusable="false" class="w-8 h-8 mt-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
            </a>
            <a class="float-left px-2" href="https://stackoverflow.com/users/4863406/nathan-hazzard">
                <svg aria-hidden="true" focusable="false" class="w-8 h-8 mt-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M290.7 311L95 269.7 86.8 309l195.7 41zm51-87L188.2 95.7l-25.5 30.8 153.5 128.3zm-31.2 39.7L129.2 179l-16.7 36.5L293.7 300zM262 32l-32 24 119.3 160.3 32-24zm20.5 328h-200v39.7h200zm39.7 80H42.7V320h-40v160h359.5V320h-40z"></path></svg>
            </a>
            <a href="{{ route('homepage') }}" class="float-left px-2 leading-10">
                Nathan Hazzard
            </a>
        </div>
    </div>
</body>