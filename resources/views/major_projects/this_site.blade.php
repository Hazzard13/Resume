<x-layout>
    <div class="mt-2 ml-2">
        <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="{{ route('major_projects') }}">< Other Major Projects</a>
    </div>
    <div class="max-w-6xl pt-2 mx-auto lg:px-8 sm:px-6 sm:pb-6">
        <div class="p-5 shadow-xl bg-slate-200 dark:bg-slate-800 sm:rounded-lg">
            <h1 class="pb-2 text-2xl font-semibold dark:text-slate-200">
                This Site
            </h1>
            <p class="mb-3">
                Hazzard.dev is a personal project, to build my own resume, but in a way that stands out and gives a direct, tangible representation of what I'm capable of. It's like a resume and a working interview all rolled into one. Everything you see on this site was built by me. All of the code, front and back end, design decisions, server management, and writing is my handiwork. Building the site I had a few different goals, besides just writing a resume.
            </p>
            <p class="mb-3">
                 One, it had to be readable, so you could see my work. To that end I've chosen Alpine.js and Tailwindcss. So, basically all of the code is right there in the HTML. There's no hidden CSS or JS that you have to track down, everything is right there in the DOM. Of course, there's a bit of server side templating with Laravel Blade, but as a site that mostly serves static pages there isn't much. However, if you want to see my commits and get a sense for how I work, this site has been open-sourced from the very beginning on <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://github.com/Hazzard13/Resume">github</a>.
            </p>
            <p class="mb-3">
                Two, I wanted to take the chance to make the site "perfect". Most of my work is done for clients, on a deadline. As such, I don't always get the chance to set perfect standards and "waste" time or money on technical excellence the client doesn't care to pay for. One way I strove for that here was to aim for a perfect Chrome Lighthouse score. And... this site does it! Everything here is accessible, well formatted for screen readers, perfectly responsive, and super performant. I encourage you to test it out, run it through some tools, try it on some different devices, and see if anything at all here isn't up to a top-notch standard.
            </p>
            <p class="mb-3">
                It's not a complicated site, by any means, my resume just doesn't <span class="italic">need</span> a database of thousands of users or any other complicated systems. But, for what it is, I've tried to put my best foot forward.
            </p>
        </div>
    </div>
</x-layout>