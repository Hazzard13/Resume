<x-layout>
    <div class="mt-2 ml-2">
        <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="{{ route('major_projects') }}">< Other Major Projects</a>
    </div>
    <div class="max-w-6xl pt-2 mx-auto lg:px-8 sm:px-6 sm:pb-6">
        <div class="p-5 shadow-xl bg-slate-200 dark:bg-slate-800 sm:rounded-lg">
            <h1 class="pb-2 text-2xl font-semibold dark:text-slate-200">
                Znanja
            </h1>
            <p class="mb-3">
                <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://znanja.com/">Znanja</a> was the main product I was hired to work on at Velsoft. It's an LMS, or Learning Management System, similar to Moodle, or Powerschools. However, znanja has one key difference. We integrate a full editor, allowing you to update, or even create a course directly in znanja. As a longstanding enterprise app, it also features a wide variety of technologies, and has been partially modernized several times. It's an absolutely massive repository, and taught me a great deal about many technologies: Mongo, PostgreSQL, AWS, Python, Pyramid, RequireJS, JQuery, React, and many, many more. These are some highlights of major features I implemented in znanja, top-to-bottom. I've tried to exclude projects that weren't primarily my work. Also note, since their addition, these features have gotten continued support that wasn't all me, and it would be ignorant of me to try to claim full credit for the ongoing work of a team.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 dark:bg-slate-800 sm:rounded-lg">
            <h1 class="pb-2 text-xl font-semibold">
                Gridless Builder
            </h1>
            <p class="mb-3">
                One of my largest projects came about due to a government grant that allowed us to take on some large internal projects. I got to implement an entirely new editor, and link all of it's many features together with our existing tech stack. That was the <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://gridlessbuilder.com/">Gridless Builder</a>. Although the editor was sold as a complete package, it needed a lot of work to integrate with our systems: everything from getting our course assets, to certain file formats, and even to saving in the way we'd expect. The modern feature set of the Gridless Builder also revealed many weaknesses of our existing code, which would have been hard to discover in the previous editor without uploading completely custom HTML. Some examples of this were: SVGs, in-line styles, custom gradients, certain animations, custom scripts embedded in HTML, video backgrounds, and more.
            </p>
            <p class="mb-3">
                The combined task of getting the editor to work in a React view, implementing our features into the editor, and implementing the editor's features into our multiple course views made this a <span class="italic">massive</span> task. This also became a good chance to really improve my own personal project management, as closing this feature out entirely would take months of work. Incredibly proud not only to have shipped the feature, but also to have even successfully managed the scope of the work without getting lost and having it drown in development hell.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 dark:bg-slate-800 sm:rounded-lg">
            <h1 class="pb-2 text-xl font-semibold">
                Virtual Classes
            </h1>
            <p class="mb-3">
                At the start of the pandemic, I just <span class="italic">happened</span> to be working on shipping class webinars to znanja. This almost instantly become one of our most important features, and quickly became the main thing the entire team was working on fleshing out and updating further once it arrived. Our Virtual Classes are powered primarily by an integration of <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://bigbluebutton.org/">Big Blue Button</a>, with classes tied to a particular course, and only available to enrolled students. Later, I would also implement more BBB features, such as class recordings, making previous classes available to current and future students to watch at a later date.
            </p>
        </div>
    </div>
</x-layout>