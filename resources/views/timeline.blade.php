<x-layout>
    <div class="max-w-6xl pb-6 mx-auto lg:px-8 sm:px-6 sm:pt-6" x-data>
        <div class="p-5 shadow-xl bg-slate-200 dark:bg-slate-800 sm:rounded-lg">
            <h1 class="pb-2 text-2xl font-semibold dark:text-slate-200">
                Timeline
            </h1>
            <p class="mb-3">
                This page is a simple timeline, showing my education, work, and notable side projects.
            </p>
            <p class="mb-3">
                Also note, this is far from a complete list of everything I've done. Check <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="{{ route('major_projects') }}">Major Projects</a> for more detail on things I've actually done at work, and a few notable volunteer and side projects.
            </p>
        </div>
    </div>

    <div class="relative max-w-[100rem] mx-auto lg:px-8 sm:px-6 pr-4 sm:py-6">
        <div class="absolute h-[calc(100%-1.25rem)] sm:h-[calc(100%-4.25rem)] ml-4 border-l-2 sm:ml-5 md:right-0 md:w-1/2 border-slate-500">
            <svg aria-hidden="true" focusable="false" class="w-5 h-5 mt-[-0.3rem] ml-[-0.7rem] text-slate-500" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 352c-8.188 0-16.38-3.125-22.62-9.375L224 173.3l-169.4 169.4c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25C432.4 348.9 424.2 352 416 352z"></path></svg>
        </div>

        <div class="relative p-5 mb-5 rounded-lg shadow-xl bg-slate-200 dark:bg-slate-800 w-[calc(100%-2rem)] sm:w-[calc(100%-2.5rem)] md:w-[calc(50%-1.5rem)] float-right">
            <div class="absolute h-6 w-6 sm:h-8 sm:w-8 bottom-1/2 left-[-1.75rem] sm:left-[-2.25rem] md:left-[-2.45rem] bg-slate-300 dark:bg-slate-900 border-2 border-slate-500 rounded-full text-center">
                <div class="absolute w-4 mt-3 border-b-2 z-[-1] border-slate-500 -right-2"></div>
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mx-auto mt-0.5 sm:mt-1 sm:w-5 sm:h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M319.1 351.1c-35.35 0-64 28.66-64 64.01s28.66 64.01 64 64.01c35.34 0 64-28.66 64-64.01S355.3 351.1 319.1 351.1zM320 191.1c-70.25 0-137.9 25.6-190.5 72.03C116.3 275.7 115 295.9 126.7 309.2C138.5 322.4 158.7 323.7 171.9 312C212.8 275.9 265.4 256 320 256s107.3 19.88 148.1 56C474.2 317.4 481.8 320 489.3 320c8.844 0 17.66-3.656 24-10.81C525 295.9 523.8 275.7 510.5 264C457.9 217.6 390.3 191.1 320 191.1zM630.2 156.7C546.3 76.28 436.2 32 320 32S93.69 76.28 9.844 156.7c-12.75 12.25-13.16 32.5-.9375 45.25c12.22 12.78 32.47 13.12 45.25 .9375C125.1 133.1 220.4 96 320 96s193.1 37.97 265.8 106.9C592.1 208.8 600 211.8 608 211.8c8.406 0 16.81-3.281 23.09-9.844C643.3 189.2 642.9 168.1 630.2 156.7z"></path></svg>
            </div>
            <h1 class="pb-2 text-xl font-semibold">
                This site!
                <p class="float-right text-sm text-slate-600 dark:text-slate-400">
                    Feb. 2022
                </p>
            </h1>
            <p>
                I put together the first version of this site in one weekend, and put it online to serve as my resume.
            </p>
        </div>

        <div class="relative p-5 rounded-lg mb-5 shadow-xl bg-slate-200 dark:bg-slate-800 w-[calc(100%-2rem)] sm:w-[calc(100%-2.5rem)] float-right md:ml-0 md:float-left md:w-[calc(50%-1.5rem)] md:mt-10">
            <div class="absolute h-6 w-6 sm:h-8 sm:w-8 bottom-1/2 left-[-1.75rem] sm:left-[-2.25rem] md:left-auto md:right-[-2.5rem] bg-slate-300 dark:bg-slate-900 border-2 border-slate-500 rounded-full text-center">
                <div class="absolute w-4 mt-3 border-b-2 z-[-1] border-slate-500 -right-2 md:-left-2"></div>
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mx-auto mt-0.5 sm:mt-1 sm:w-5 sm:h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0.499 48.118 511.002 415.763"><path fill="currentColor" d="M510.003 279.642c-2.998-21.097-10.305-41.104-21.725-59.459-9.959-16.019-22.738-30.266-37.991-42.375l.041-.038L290.133 54.731a4.569 4.569 0 0 0-.361-.287c-5.326-4.08-12.537-6.325-20.297-6.325-7.77 0-15.263 2.25-21.088 6.338-6.263 4.375-9.843 10.18-10.093 16.359-.229 5.765 2.521 11.312 7.764 15.636 10.31 8.135 20.597 16.447 30.898 24.769 9.997 8.08 20.298 16.401 30.549 24.502l-196.213-.133c-22.439 0-37.718 10.537-40.861 28.178-1.381 7.727 1.056 16.223 6.504 22.73 5.78 6.898 14.172 10.703 23.629 10.703l14.958.01c20.664 0 41.419-.051 62.146-.101l19.766-.046-178.08 131.748-.707.517C8.7 336.953 2.188 347.642.783 358.653c-1.065 8.342.881 15.965 5.63 22.053 5.66 7.258 14.497 11.25 24.885 11.25 10.205 0 20.618-3.867 29.334-10.908l96.166-78.7c-.411 3.843-.91 9.481-.853 13.573.108 6.479 2.188 19.479 5.481 30.033 6.804 21.69 18.265 41.535 34.063 58.963 16.438 18.132 36.458 32.509 59.5 42.722 24.36 10.774 50.547 16.243 77.836 16.243h.253c27.376-.066 53.646-5.622 78.085-16.519 23.08-10.334 43.091-24.769 59.467-42.898 15.778-17.517 27.223-37.395 34.014-59.067a151.124 151.124 0 0 0 6.416-33.003c.839-10.83.478-21.85-1.057-32.753zM334.82 383.601c-60.141 0-108.911-43.627-108.911-97.447 0-53.814 48.771-97.441 108.911-97.441 60.142 0 108.907 43.627 108.907 97.441.002 53.82-48.765 97.447-108.907 97.447zm62.807-106.01c.887 16.063-5.529 30.978-16.796 42.019-11.461 11.248-27.815 18.313-46.103 18.313-18.28 0-34.637-7.065-46.102-18.313-11.262-11.041-17.665-25.954-16.783-42.006.864-15.603 8.475-29.376 19.939-39.128 11.273-9.589 26.41-15.439 42.945-15.439 16.537 0 31.67 5.852 42.944 15.439 11.47 9.752 19.083 23.515 19.956 39.115z"/></svg>
            </div>
            <h1 class="pb-2 text-xl font-semibold">
                Learned Blender
                <p class="float-right text-sm text-slate-600 dark:text-slate-400">
                    Jan. 2022
                </p>
            </h1>
            <p>
                In 2022 I decided to learn blender. So, I set aside around 15 hours one weekend, and crunched through learning as much as I could. I was able to create <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://www.instagram.com/reel/CZGKfZ_tbwh/">an animation</a> I was incredibly proud of, with materials, geometry, and even a looping animation, featuring material changes and geometry nodes.
            </p>
        </div>

        <div class="relative p-5 mb-5 rounded-lg shadow-xl bg-slate-200 dark:bg-slate-800 w-[calc(100%-2rem)] sm:w-[calc(100%-2.5rem)] md:w-[calc(50%-1.5rem)] float-right">
            <div class="absolute h-6 w-6 sm:h-8 sm:w-8 bottom-1/2 left-[-1.75rem] sm:left-[-2.25rem] md:left-[-2.45rem] bg-slate-300 dark:bg-slate-900 border-2 border-slate-500 rounded-full text-center">
                <div class="absolute w-4 mt-3 border-b-2 z-[-1] border-slate-500 -right-2"></div>
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mx-auto mt-0.5 sm:mt-1 sm:w-5 sm:h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M344 48H376C389.3 48 400 58.75 400 72C400 85.25 389.3 96 376 96H344V142.4L456.7 210C471.2 218.7 480 234.3 480 251.2V512H384V416C384 380.7 355.3 352 320 352C284.7 352 256 380.7 256 416V512H160V251.2C160 234.3 168.8 218.7 183.3 210L296 142.4V96H264C250.7 96 240 85.25 240 72C240 58.75 250.7 48 264 48H296V24C296 10.75 306.7 0 320 0C333.3 0 344 10.75 344 24V48zM24.87 330.3L128 273.6V512H48C21.49 512 0 490.5 0 464V372.4C0 354.9 9.53 338.8 24.87 330.3V330.3zM592 512H512V273.6L615.1 330.3C630.5 338.8 640 354.9 640 372.4V464C640 490.5 618.5 512 592 512V512z"></path></svg>
            </div>
            <h1 class="pb-2 text-xl font-semibold">
                Grace Church goes Online
                <p class="float-right text-sm text-slate-600 dark:text-slate-400">
                    March 2020 - Present
                </p>
            </h1>
            <p>
                When the pandemic came along, I was an instrumental part of helping <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="{{ route('major_projects.grace_church') }}">Grace Church</a> transition to being online. I worked out how to display our slides and media, overlay words, mix the band for online, handled our camera angles, streaming settings, etc. It was a hectic time, but we've been online for 2 years now, and continue to work on improving it. Since then, I've also helped train volunteers so it <span class="italic">isn't</span> such a one-man show. Feel free to check out the result on <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://www.youtube.com/channel/UC_JmEvI1ZSKuaMYiz3p0KEw">YouTube</a>!
            </p>
        </div>

        <div class="relative p-5 rounded-lg mb-5 shadow-xl bg-slate-200 dark:bg-slate-800 w-[calc(100%-2rem)] sm:w-[calc(100%-2.5rem)] float-right md:ml-0 md:float-left md:w-[calc(50%-1.5rem)] md:mt-5">
            <div class="absolute h-6 w-6 sm:h-8 sm:w-8 bottom-1/2 left-[-1.75rem] sm:left-[-2.25rem] md:left-auto md:right-[-2.5rem] bg-slate-300 dark:bg-slate-900 border-2 border-slate-500 rounded-full text-center">
                <div class="absolute w-4 mt-3 border-b-2 z-[-1] border-slate-500 -right-2 md:-left-2"></div>
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mx-auto mt-0.5 sm:mt-1 sm:w-5 sm:h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M448 64H192C85.96 64 0 149.1 0 256s85.96 192 192 192h256c106 0 192-85.96 192-192S554 64 448 64zM247.1 280h-32v32c0 13.2-10.78 24-23.98 24c-13.2 0-24.02-10.8-24.02-24v-32L136 279.1C122.8 279.1 111.1 269.2 111.1 256c0-13.2 10.85-24.01 24.05-24.01L167.1 232v-32c0-13.2 10.82-24 24.02-24c13.2 0 23.98 10.8 23.98 24v32h32c13.2 0 24.02 10.8 24.02 24C271.1 269.2 261.2 280 247.1 280zM431.1 344c-22.12 0-39.1-17.87-39.1-39.1s17.87-40 39.1-40s39.1 17.88 39.1 40S454.1 344 431.1 344zM495.1 248c-22.12 0-39.1-17.87-39.1-39.1s17.87-40 39.1-40c22.12 0 39.1 17.88 39.1 40S518.1 248 495.1 248z"></path></svg>

            </div>
            <h1 class="pb-2 text-xl font-semibold">
                My Generation Gaming
                <p class="float-right text-sm text-slate-600 dark:text-slate-400">
                    July 2020 + 2021
                </p>
            </h1>
            <p>
                This is an interesting one! In 2020 I volunteered to help out with an event for the maritime church district. We put together a fun online gaming event for youth all over the Maritimes (Nova Scotia, New Brunswick, and PEI). In 2021, I took over the event, and scaled it up. I chose a team of youth pastors I know across the district, and we organized the event again, this time adding in a livestream component. For one hectic weekend, we were live for 11 hours, organizing youth into different games and hosting it all online. You can even still watch the livestreams: <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://www.youtube.com/watch?v=T2cMW19AynA">Day One</a>, <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://www.youtube.com/watch?v=iSVv5S_9UnE">Day Two</a>.
            </p>
        </div>

        <div class="relative p-5 mb-5 rounded-lg shadow-xl bg-slate-200 dark:bg-slate-800 w-[calc(100%-2rem)] sm:w-[calc(100%-2.5rem)] md:w-[calc(50%-1.5rem)] float-right">
            <div class="absolute h-6 w-6 sm:h-8 sm:w-8 bottom-1/2 left-[-1.75rem] sm:left-[-2.25rem] md:left-[-2.45rem] bg-slate-300 dark:bg-slate-900 border-2 border-slate-500 rounded-full text-center">
                <div class="absolute w-4 mt-3 border-b-2 z-[-1] border-slate-500 -right-2"></div>
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mx-auto mt-0.5 sm:mt-1 sm:w-5 sm:h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M391.2 103.5H352.5v109.7h38.63zM285 103H246.4V212.8H285zM120.8 0 24.31 91.42V420.6H140.1V512l96.53-91.42h77.25L487.7 256V0zM449.1 237.8l-77.22 73.12H294.6l-67.6 64v-64H140.1V36.58H449.1z"></path></svg>
            </div>
            <h1 class="pb-2 text-xl font-semibold">
                Livestreaming
                <p class="float-right text-sm text-slate-600 dark:text-slate-400">
                    2019
                </p>
            </h1>
            <p>
                At this time I picked up a capture card and started livestreaming on Twitch. It was an interesting challenge, and required a broad set of skills, as I didn't want to hire anyone to work on my hobby. Making all of the assets, branding, layouts, and working through all the technical challenges was a fun period. As well as the challenge of being entertaining while also keeping everything running smoothly. Little did I know how helpful many of those skills would be over the next few years. I achieved relative success, getting over 100 followers and becoming a Twitch Affiliate. Ultimately, however, I decided to spend my free time on other projects. You can still view <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://www.twitch.tv/hazzardous_13">my Twitch channel</a>.
            </p>
        </div>

        <div class="relative p-5 rounded-lg mb-5 shadow-xl bg-slate-200 dark:bg-slate-800 w-[calc(100%-2rem)] sm:w-[calc(100%-2.5rem)] float-right md:ml-0 md:float-left md:w-[calc(50%-1.5rem)] md:mt-5">
            <div class="absolute h-6 w-6 sm:h-8 sm:w-8 bottom-1/2 left-[-1.75rem] sm:left-[-2.25rem] md:left-auto md:right-[-2.5rem] bg-slate-300 dark:bg-slate-900 border-2 border-slate-500 rounded-full text-center">
                <div class="absolute w-4 mt-3 border-b-2 z-[-1] border-slate-500 -right-2 md:-left-2"></div>
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mx-auto mt-0.5 sm:mt-1 sm:w-5 sm:h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M384 112v288c0 26.51-21.49 48-48 48h-288c-26.51 0-48-21.49-48-48v-288c0-26.51 21.49-48 48-48h288C362.5 64 384 85.49 384 112zM576 127.5v256.9c0 25.5-29.17 40.39-50.39 25.79L416 334.7V177.3l109.6-75.56C546.9 87.13 576 102.1 576 127.5z"></path></svg>
            </div>
            <h1 class="pb-2 text-xl font-semibold">
                Learning Davinci Resolve
                <p class="float-right text-sm text-slate-600 dark:text-slate-400">
                    July 2019
                </p>
            </h1>
            <p>
                In 2019 I started making a series of videos, to try to create some training materials for Grace Church volunteers on tech. I quickly found the limitations of iMovie, and decided to learn a more powerful industry tool. I went all out and chose Davinci Resolve! I learned the basics in a couple weeks, and have tapped into more and more in the years since. It's my go-to tool for video, effects, colouring, everything. I love just how much it can do.
            </p>
        </div>

        <div class="relative p-5 mb-5 rounded-lg shadow-xl bg-slate-200 dark:bg-slate-800 w-[calc(100%-2rem)] sm:w-[calc(100%-2.5rem)] md:w-[calc(50%-1.5rem)] float-right">
            <div class="absolute h-6 w-6 sm:h-8 sm:w-8 bottom-1/2 left-[-1.75rem] sm:left-[-2.25rem] md:left-[-2.45rem] bg-slate-300 dark:bg-slate-900 border-2 border-slate-500 rounded-full text-center">
                <div class="absolute w-4 mt-3 border-b-2 z-[-1] border-slate-500 -right-2"></div>
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mx-auto mt-0.5 sm:mt-1 sm:w-5 sm:h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M511.1 367.1c0 44.18-42.98 80-95.1 80s-95.1-35.82-95.1-79.1c0-44.18 42.98-79.1 95.1-79.1c11.28 0 21.95 1.92 32.01 4.898V148.1L192 224l-.0023 208.1C191.1 476.2 149 512 95.1 512S0 476.2 0 432c0-44.18 42.98-79.1 95.1-79.1c11.28 0 21.95 1.92 32 4.898V126.5c0-12.97 10.06-26.63 22.41-30.52l319.1-94.49C472.1 .6615 477.3 0 480 0c17.66 0 31.97 14.34 32 31.99L511.1 367.1z"></path></svg>
            </div>
            <h1 class="pb-2 text-xl font-semibold">
                Learning Sound
                <p class="float-right text-sm text-slate-600 dark:text-slate-400">
                    2018
                </p>
            </h1>
            <p>
                Around 2018 I volunteered to take over the soundboard at <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="{{ route('major_projects.grace_church') }}">Grace Church</a>. After a week or two of YouTube crash courses, and some in-person training with a professional, I took over the mixing pretty much entirely. Since then, I've trained others, added instruments, created a stereo mix for online, and learned lots of useful tricks, like de-essing, or how to mic a drum set. I've also crept into helping in other areas, like switching our lighting over to QLC+ controlled via MIDI cues sent by ProPresenter.
            </p>
        </div>

        <div class="relative p-5 rounded-lg mb-5 shadow-xl bg-slate-200 dark:bg-slate-800 w-[calc(100%-2rem)] sm:w-[calc(100%-2.5rem)] float-right md:ml-0 md:float-left md:w-[calc(50%-1.5rem)] md:mt-5">
            <div class="absolute h-6 w-6 sm:h-8 sm:w-8 bottom-1/2 left-[-1.75rem] sm:left-[-2.25rem] md:left-auto md:right-[-2.5rem] bg-slate-300 dark:bg-slate-900 border-2 border-slate-500 rounded-full text-center">
                <div class="absolute w-4 mt-3 border-b-2 z-[-1] border-slate-500 -right-2 md:-left-2"></div>
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mx-auto mt-0.5 sm:mt-1 sm:w-5 sm:h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M71.92 34.77C50.2 47.67 7.4 96.84 7 109.7v21.34c0 27.06 25.29 50.84 48.25 50.84 27.57 0 50.54-22.85 50.54-50 0 27.12 22.18 50 49.76 50s49-22.85 49-50c0 27.12 23.59 50 51.16 50h.5c27.57 0 51.16-22.85 51.16-50 0 27.12 21.47 50 49 50s49.76-22.85 49.76-50c0 27.12 23 50 50.54 50 23 0 48.25-23.78 48.25-50.84v-21.34c-.4-12.9-43.2-62.07-64.92-75C372.6 32.4 325.8 32 256 32S91.14 33.1 71.92 34.77zm132.3 134.4c-22 38.4-77.9 38.71-99.85 .25-13.17 23.14-43.17 32.07-56 27.66-3.87 40.15-13.67 237.1 17.73 269.1 80 18.67 302.1 18.12 379.8 0 31.65-32.27 21.32-232 17.75-269.1-12.92 4.44-42.88-4.6-56-27.66-22 38.52-77.85 38.1-99.85-.24-7.1 12.49-23.05 28.94-51.76 28.94a57.54 57.54 0 0 1 -51.75-28.94zm-41.58 53.77c16.47 0 31.09 0 49.22 19.78a436.9 436.9 0 0 1 88.18 0C318.2 223 332.9 223 349.3 223c52.33 0 65.22 77.53 83.87 144.4 17.26 62.15-5.52 63.67-33.95 63.73-42.15-1.57-65.49-32.18-65.49-62.79-39.25 6.43-101.9 8.79-155.6 0 0 30.61-23.34 61.22-65.49 62.79-28.42-.06-51.2-1.58-33.94-63.73 18.67-67 31.56-144.4 83.88-144.4zM256 270.8s-44.38 40.77-52.35 55.21l29-1.17v25.32c0 1.55 21.34 .16 23.33 .16 11.65 .54 23.31 1 23.31-.16v-25.28l29 1.17c-8-14.48-52.35-55.24-52.35-55.24z"></path></svg>
            </div>
            <h1 class="pb-2 text-xl font-semibold">
                GMTK Game Jam
                <p class="float-right text-sm text-slate-600 dark:text-slate-400">
                    July 2017
                </p>
            </h1>
            <p>
                I've always been interested in game development, and in 2017, GMTK announced they'd be doing their first ever game jam. Over the next two weeks, I threw myself at Unity, did some tutorials, and then buckled in to try to make a whole game from scratch in just a few days. Of course, as I was still learning the engine, I didn't make anything <span class="italic">incredible</span>, but I did succeed in finishing a basic android game within those few days. You can even still find the game on <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://nathanhazz.itch.io/launch">itch.io</a>.
            </p>
        </div>

        <div class="relative p-5 mb-5 rounded-lg shadow-xl bg-slate-200 dark:bg-slate-800 w-[calc(100%-2rem)] sm:w-[calc(100%-2.5rem)] md:w-[calc(50%-1.5rem)] float-right">
            <div class="absolute h-6 w-6 sm:h-8 sm:w-8 bottom-1/2 left-[-1.75rem] sm:left-[-2.25rem] md:left-[-2.45rem] bg-slate-300 dark:bg-slate-900 border-2 border-slate-500 rounded-full text-center">
                <div class="absolute w-4 mt-3 border-b-2 z-[-1] border-slate-500 -right-2"></div>
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mx-auto mt-0.5 sm:mt-1 sm:w-5 sm:h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M320 336c0 8.844-7.156 16-16 16h-96C199.2 352 192 344.8 192 336V288H0v144C0 457.6 22.41 480 48 480h416c25.59 0 48-22.41 48-48V288h-192V336zM464 96H384V48C384 22.41 361.6 0 336 0h-160C150.4 0 128 22.41 128 48V96H48C22.41 96 0 118.4 0 144V256h512V144C512 118.4 489.6 96 464 96zM336 96h-160V48h160V96z"></path></svg>
            </div>
            <h1 class="pb-2 text-xl font-semibold">
                Velsoft
                <p class="float-right text-sm text-slate-600 dark:text-slate-400">
                    April 2016 - Present
                </p>
            </h1>
            <p>
                In 2016, I started working my current job at Velsoft, as a Full Stack Developer. I was hired primarily to work on <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="{{ route('major_projects.znanja') }}">znanja</a>, which was challenging as a site with thousands of users, enterprise code that had been built on for more than a decade, and complex backend requirements for tasks like editing eLearning, and even converting docx and pptx files to our own proprietary elearning format. I've done many complex tasks for znanja, such as making Virtual Classes, a webinar system, or integrating <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://gridlessbuilder.com/">Gridless Builder</a> as a new editor. Besides that, Velsoft also likes to take on contract work, so I've gotten to work on loads of smaller sites and projects, which we'd usually use to try out new technologies as well.
            </p>
        </div>

        <div class="relative p-5 rounded-lg mb-5 shadow-xl bg-slate-200 dark:bg-slate-800 w-[calc(100%-2rem)] sm:w-[calc(100%-2.5rem)] float-right md:ml-0 md:mb-10 md:float-left md:w-[calc(50%-1.5rem)] md:mt-5">
            <div class="absolute h-6 w-6 sm:h-8 sm:w-8 bottom-1/2 left-[-1.75rem] sm:left-[-2.25rem] md:left-auto md:right-[-2.5rem] bg-slate-300 dark:bg-slate-900 border-2 border-slate-500 rounded-full text-center">
                <div class="absolute w-4 mt-3 border-b-2 z-[-1] border-slate-500 -right-2 md:-left-2"></div>
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mx-auto mt-0.5 sm:mt-1 sm:w-5 sm:h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M420.5 301.9a24 24 0 1 1 24-24 24 24 0 0 1 -24 24m-265.1 0a24 24 0 1 1 24-24 24 24 0 0 1 -24 24m273.7-144.5 47.94-83a10 10 0 1 0 -17.27-10h0l-48.54 84.07a301.3 301.3 0 0 0 -246.6 0L116.2 64.45a10 10 0 1 0 -17.27 10h0l47.94 83C64.53 202.2 8.24 285.5 0 384H576c-8.24-98.45-64.54-181.8-146.9-226.6"></path></svg>
            </div>
            <h1 class="pb-2 text-xl font-semibold">
                Simple To-Do
                <p class="float-right text-sm text-slate-600 dark:text-slate-400">
                    2016
                </p>
            </h1>
            <p>
                For my senior project, I decided to go all in and publish an Android app. Over the next few months, I built and published a fairly straightforward To-Do app, that filled a niche I was personally looking for. As my first published project, it was quite the new experience, and I was very proud to see a few people even use the app seriously, as it was intended. It was a bit similar in philosophy to Todoist, actually. The app no longer exists on the Play Store, but I open sourced the code <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://github.com/Hazzard13/Simple-To-Do">on github</a>.
            </p>
        </div>

        <div class="relative p-5 mb-5 rounded-lg shadow-xl bg-slate-200 dark:bg-slate-800 w-[calc(100%-2rem)] sm:w-[calc(100%-2.5rem)] md:w-[calc(50%-1.5rem)] float-right">
            <div class="absolute h-6 w-6 sm:h-8 sm:w-8 bottom-1/2 left-[-1.75rem] sm:left-[-2.25rem] md:left-[-2.45rem] bg-slate-300 dark:bg-slate-900 border-2 border-slate-500 rounded-full text-center">
                <div class="absolute w-4 mt-3 border-b-2 z-[-1] border-slate-500 -right-2"></div>
                <svg aria-hidden="true" focusable="false" class="w-4 h-4 mx-auto mt-0.5 sm:mt-1 sm:w-5 sm:h-5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M623.1 136.9l-282.7-101.2c-13.73-4.91-28.7-4.91-42.43 0L16.05 136.9C6.438 140.4 0 149.6 0 160s6.438 19.65 16.05 23.09L76.07 204.6c-11.89 15.8-20.26 34.16-24.55 53.95C40.05 263.4 32 274.8 32 288c0 9.953 4.814 18.49 11.94 24.36l-24.83 149C17.48 471.1 25 480 34.89 480H93.11c9.887 0 17.41-8.879 15.78-18.63l-24.83-149C91.19 306.5 96 297.1 96 288c0-10.29-5.174-19.03-12.72-24.89c4.252-17.76 12.88-33.82 24.94-47.03l190.6 68.23c13.73 4.91 28.7 4.91 42.43 0l282.7-101.2C633.6 179.6 640 170.4 640 160S633.6 140.4 623.1 136.9zM351.1 314.4C341.7 318.1 330.9 320 320 320c-10.92 0-21.69-1.867-32-5.555L142.8 262.5L128 405.3C128 446.6 213.1 480 320 480c105.1 0 192-33.4 192-74.67l-14.78-142.9L351.1 314.4z"></path></svg>
            </div>
            <h1 class="pb-2 text-xl font-semibold">
                Redeemer College
                <p class="float-right text-sm text-slate-600 dark:text-slate-400">
                    2013-2016
                </p>
            </h1>
            <p>
                I went to Redeemer College from 2013-2016, for a Bachelor of Computer Science. Ultimately, however, I decided to pursue my career at Velsoft rather than completing my fourth year. I still learned a great deal, and that period defines much of my coding style today.
            </p>
        </div>

        <div class="clear-both"></div>
    </div>
</x-layout>