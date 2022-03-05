<!DOCTYPE html>
<html lang="en" @if($theme=='dark') class="dark" @endif>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="This site is the personal resume of Nathan Hazzard. Everything on this site is made from scratch, by me. No outside help was used, whether with design, writing, coding, etc.">

        <title>{{ $title ?? 'Nathan Hazzard' }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,700;1,400&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,400;0,700;1,400&display=swap"></noscript>

        <link href="/css/app.css" rel="stylesheet" />

        <script src="//unpkg.com/alpinejs" defer></script>

        @if($selectedTheme == 'system')
            {{-- Handles Dark Mode on page load --}}
            <script>
                if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.classList.add('dark');
                    document.cookie = 'theme=dark;';
                } else {
                    document.documentElement.classList.remove('dark');
                    document.cookie = 'theme=light;';
                }
            </script>
        @endif
    </head>
    <body class="relative h-auto min-h-screen pb-10 bg-slate-300 dark:bg-slate-900 dark:text-slate-300">
        <div class="relative px-5 pt-5 bg-gradient-to-br from-orange-500 to-amber-400 dark:from-purple-800 dark:to-fuchsia-600">
            <a class="block float-left mb-5" aria-label="Homepage" href="{{ route('homepage') }}">
                <div class="h-16 w-16 sm:h-20 sm:w-20 bg-contain bg-[center_left_0.2rem] border-4 border-slate-200 rounded-full"
                    style="background-image: url('{{ Storage::url('thumbnail.jpeg') }}')">
                </div>
            </a>
            <div class="float-right text-slate-100" x-data="{
                theme: (document.documentElement.classList.contains('dark') ? 'dark': 'light'),
                selectedTheme: '{{ $selectedTheme }}',
                showMenu: false,
                showThemes: false,
                setTheme(theme) {
                    this.showThemes = false;
                    this.selectedTheme = theme;
                    document.cookie = 'selectedTheme=' + theme + ';';
                    if (theme === 'system') {
                        if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                            this.theme = 'dark';
                        } else {
                            this.theme = 'light';
                        }
                    } else {
                        this.theme = theme;
                    }

                    if (this.theme === 'light') {
                        document.documentElement.classList.remove('dark');
                        document.cookie = 'theme=light;';
                    } else {
                        document.documentElement.classList.add('dark');
                        document.cookie = 'theme=dark;';
                    }
                }
            }">
                {{-- Desktop Navigation --}}
                <div class="hidden sm:block">
                    {{-- Theme Selector --}}
                    <span class="block float-right h-12 cursor-pointer mt-7" x-on:click="showThemes = !showThemes">
                        <svg aria-hidden="true" focusable="false" class="w-6 h-6" role="img" viewBox="0 0 512 512"
                            x-show="theme==='light'" @if ($theme != 'light') x-cloak @endif>
                            <path fill="currentColor" d="M256 159.1c-53.02 0-95.1 42.98-95.1 95.1S202.1 351.1 256 351.1s95.1-42.98 95.1-95.1S309 159.1 256 159.1zM509.3 347L446.1 255.1l63.15-91.01c6.332-9.125 1.104-21.74-9.826-23.72l-109-19.7l-19.7-109c-1.975-10.93-14.59-16.16-23.72-9.824L256 65.89L164.1 2.736c-9.125-6.332-21.74-1.107-23.72 9.824L121.6 121.6L12.56 141.3C1.633 143.2-3.596 155.9 2.736 164.1L65.89 256l-63.15 91.01c-6.332 9.125-1.105 21.74 9.824 23.72l109 19.7l19.7 109c1.975 10.93 14.59 16.16 23.72 9.824L256 446.1l91.01 63.15c9.127 6.334 21.75 1.107 23.72-9.822l19.7-109l109-19.7C510.4 368.8 515.6 356.1 509.3 347zM256 383.1c-70.69 0-127.1-57.31-127.1-127.1c0-70.69 57.31-127.1 127.1-127.1s127.1 57.3 127.1 127.1C383.1 326.7 326.7 383.1 256 383.1z"/>
                        </svg>
                        <svg aria-hidden="true" focusable="false" class="w-6 h-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            x-show="theme==='dark'" @if ($theme != 'dark') x-cloak @endif>
                            <path fill="currentColor" d="M32 256c0-123.8 100.3-224 223.8-224c11.36 0 29.7 1.668 40.9 3.746c9.616 1.777 11.75 14.63 3.279 19.44C245 86.5 211.2 144.6 211.2 207.8c0 109.7 99.71 193 208.3 172.3c9.561-1.805 16.28 9.324 10.11 16.95C387.9 448.6 324.8 480 255.8 480C132.1 480 32 379.6 32 256z"/>
                        </svg>
                    </span>
                    <div class="absolute text-black rounded-lg shadow-xl right-5 top-20 dark:text-slate-100 bg-slate-200 dark:bg-slate-600" x-show="showThemes" x-cloak>
                        <p class="py-1 pl-3 pr-10 mt-1 cursor-pointer hover:bg-slate-300 hover:dark:bg-slate-500"
                            x-bind:class="selectedTheme == 'light' ? 'text-blue-600 dark:text-blue-400' : ''" x-on:click="setTheme('light');">
                            <svg aria-hidden="true" focusable="false" class="inline-block w-4 h-4 mt-[-0.1rem]" role="img" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M256 159.1c-53.02 0-95.1 42.98-95.1 95.1S202.1 351.1 256 351.1s95.1-42.98 95.1-95.1S309 159.1 256 159.1zM509.3 347L446.1 255.1l63.15-91.01c6.332-9.125 1.104-21.74-9.826-23.72l-109-19.7l-19.7-109c-1.975-10.93-14.59-16.16-23.72-9.824L256 65.89L164.1 2.736c-9.125-6.332-21.74-1.107-23.72 9.824L121.6 121.6L12.56 141.3C1.633 143.2-3.596 155.9 2.736 164.1L65.89 256l-63.15 91.01c-6.332 9.125-1.105 21.74 9.824 23.72l109 19.7l19.7 109c1.975 10.93 14.59 16.16 23.72 9.824L256 446.1l91.01 63.15c9.127 6.334 21.75 1.107 23.72-9.822l19.7-109l109-19.7C510.4 368.8 515.6 356.1 509.3 347zM256 383.1c-70.69 0-127.1-57.31-127.1-127.1c0-70.69 57.31-127.1 127.1-127.1s127.1 57.3 127.1 127.1C383.1 326.7 326.7 383.1 256 383.1z"/>
                            </svg> Light
                        </p>
                        <p class="py-1 pl-3 pr-10 cursor-pointer hover:bg-slate-300 hover:dark:bg-slate-500"
                            x-bind:class="selectedTheme == 'dark' ? 'text-blue-600 dark:text-blue-400' : ''" x-on:click="setTheme('dark');">
                            <svg aria-hidden="true" focusable="false" class="inline-block w-4 h-4 mt-[-0.1rem]" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M32 256c0-123.8 100.3-224 223.8-224c11.36 0 29.7 1.668 40.9 3.746c9.616 1.777 11.75 14.63 3.279 19.44C245 86.5 211.2 144.6 211.2 207.8c0 109.7 99.71 193 208.3 172.3c9.561-1.805 16.28 9.324 10.11 16.95C387.9 448.6 324.8 480 255.8 480C132.1 480 32 379.6 32 256z"/>
                            </svg> Dark
                        </p>
                        <p class="py-1 pl-3 pr-10 mb-1 cursor-pointer hover:bg-slate-300 hover:dark:bg-slate-500"
                            x-bind:class="selectedTheme == 'system' ? 'text-blue-600 dark:text-blue-400' : ''" x-on:click="setTheme('system');">
                            <svg aria-hidden="true" focusable="false" class="inline-block w-4 h-4 mt-[-0.1rem]" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path fill="currentColor" d="M528 0h-480C21.5 0 0 21.5 0 48v320C0 394.5 21.5 416 48 416h192L224 464H152C138.8 464 128 474.8 128 488S138.8 512 152 512h272c13.25 0 24-10.75 24-24s-10.75-24-24-24H352L336 416h192c26.5 0 48-21.5 48-48v-320C576 21.5 554.5 0 528 0zM512 288H64V64h448V288z"/>
                            </svg> System
                        </p>
                    </div>
                    <a href="{{ route('timeline') }}" class="block float-right pr-6 leading-[5rem] text-center lg:h-auto">
                        Timeline
                    </a>
                    <a href="{{ route('technologies') }}" class="block float-right h-12 pr-6 leading-[5rem] text-center lg:h-auto">
                        Technologies
                    </a>
                    <a href="{{ route('major_projects') }}" class="block float-right h-12 pr-6 leading-[5rem] text-center lg:h-auto">
                        Major Projects
                    </a>
                </div>
                {{-- Mobile Navigation --}}
                <div class="sm:hidden">
                    <span class="block float-right w-10 h-16 mt-4 -mr-4 cursor-pointer" x-on:click="showMenu = !showMenu;">
                        <svg aria-hidden="true" class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 512"><path fill="currentColor" d="M64 360C94.93 360 120 385.1 120 416C120 446.9 94.93 472 64 472C33.07 472 8 446.9 8 416C8 385.1 33.07 360 64 360zM64 200C94.93 200 120 225.1 120 256C120 286.9 94.93 312 64 312C33.07 312 8 286.9 8 256C8 225.1 33.07 200 64 200zM64 152C33.07 152 8 126.9 8 96C8 65.07 33.07 40 64 40C94.93 40 120 65.07 120 96C120 126.9 94.93 152 64 152z"/></svg>
                    </span>
                    <div x-show="showMenu" x-cloak class="fixed top-0 left-0 z-10 w-screen h-screen backdrop-blur-sm" x-on:click="showMenu = false;">
                        <div class="absolute p-5 leading-10 text-black rounded-lg shadow-xl right-5 top-5 dark:text-slate-100 bg-slate-200 dark:bg-slate-600"
                            x-on:click.stop>
                            <span class="absolute text-lg font-semibold cursor-pointer top-3 right-5" x-on:click="showMenu = false;">X</span>
                            <p>
                                <a class="hover:text-blue-800 dark:hover:text-blue-500" href="{{ route('major_projects') }}">
                                    Major Projects
                                </a>
                            </p>
                            <p>
                                <a class="hover:text-blue-800 dark:hover:text-blue-500" href="{{ route('technologies') }}">
                                    Technologies
                                </a>
                            </p>
                            <p>
                                <a class="hover:text-blue-800 dark:hover:text-blue-500" href="{{ route('timeline') }}">
                                    Timeline
                                </a>
                            </p>
                            <div class="w-full pt-2 mt-2 border-t border-slate-200">
                                Switch Theme&nbsp;&nbsp;&nbsp;
                                <select class="px-2 py-1 rounded-lg bg-slate-300 dark:bg-slate-500" x-on:change="setTheme($refs.theme.value)" x-ref="theme">
                                    <option @if($selectedTheme == 'light') selected @endif value="light">Light</option>
                                    <option @if($selectedTheme == 'dark') selected @endif value="dark">Dark</option>
                                    <option @if($selectedTheme == 'system') selected @endif value="system">System</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear-both"></div>
        </div>
        {{ $slot }}
        <div class="absolute bottom-0 w-full h-10 bg-gradient-to-br from-orange-500 to-amber-400 dark:from-purple-800 dark:to-fuchsia-600">
            <div class="mx-auto text-center w-60 text-slate-100">
                <a class="float-left px-2" aria-label="GitHub" href="https://github.com/Hazzard13/Resume">
                    <svg aria-hidden="true" focusable="false" class="w-8 h-8 mt-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3 .3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5 .3-6.2 2.3zm44.2-1.7c-2.9 .7-4.9 2.6-4.6 4.9 .3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3 .7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3 .3 2.9 2.3 3.9 1.6 1 3.6 .7 4.3-.7 .7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3 .7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3 .7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
                </a>
                <a class="float-left px-2" aria-label="Stack Overflow" href="https://stackoverflow.com/users/4863406/nathan-hazzard">
                    <svg aria-hidden="true" focusable="false" class="w-8 h-8 mt-1" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M290.7 311L95 269.7 86.8 309l195.7 41zm51-87L188.2 95.7l-25.5 30.8 153.5 128.3zm-31.2 39.7L129.2 179l-16.7 36.5L293.7 300zM262 32l-32 24 119.3 160.3 32-24zm20.5 328h-200v39.7h200zm39.7 80H42.7V320h-40v160h359.5V320h-40z"></path></svg>
                </a>
                <a href="{{ route('homepage') }}" class="float-left px-2 leading-10">
                    Nathan Hazzard
                </a>
            </div>
        </div>
    </body>
</html>