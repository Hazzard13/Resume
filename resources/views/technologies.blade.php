<x-layout>
    <div class="max-w-6xl mx-auto lg:px-8 sm:px-6 sm:py-6" x-data="{
        scrollToRef($ref) {
            $ref.scrollIntoView({
                behavior: 'smooth'
            });
        }
    }">
        <div class="p-5 shadow-xl bg-slate-200 sm:rounded-lg">
            <h1 class="pb-2 text-2xl font-semibold">
                Technologies
            </h1>
            <p class="mb-3">
                In the tech industry, every job comes down to technologies. What are you familiar with, and what have you used? Are you familiar with X? This section should answer that.
            </p>
            <p class="mb-3">
                Frankly, I've worked with a slightly insane quantity of different technologies over the years. At my current job, we like to take on a lot of contract projects, and we'll often try new techologies out on those projects. Thus, this page may look slightly overwhelming. If you take away nothing else, then just note that I can learn anything I need to. I've used almost everything here in production, on a budget, and picked it up while I went along. If something you're looking for isn't here, then I have great confidence I can pick it up just fine.
            </p>
            <p class="mb-3">
                I'll be breaking technologies into categories, and sorting them alphabetically. If it isn't here, I haven't used it (or just forgot). By each, I'll honestly assess my familiarity and experience with each language. Where possible, I'll also be trying to link out to any relevant projects where I got experience with that language.
            </p>
            <a class="pr-4 mb-3 text-blue-700 cursor-pointer hover:text-blue-800" x-on:click="scrollToRef($refs.frontEnd)">Front End</a>
            <a class="pr-4 mb-3 text-blue-700 cursor-pointer hover:text-blue-800" x-on:click="scrollToRef($refs.css)">CSS</a>
            <a class="pr-4 mb-3 text-blue-700 cursor-pointer hover:text-blue-800" x-on:click="scrollToRef($refs.js)">JS</a>
            <a class="pr-4 mb-3 text-blue-700 cursor-pointer hover:text-blue-800" x-on:click="scrollToRef($refs.backend)">Backend</a>
            <a class="pr-4 mb-3 text-blue-700 cursor-pointer hover:text-blue-800" x-on:click="scrollToRef($refs.testing)">Testing</a>
            <a class="pr-4 mb-3 text-blue-700 cursor-pointer hover:text-blue-800" x-on:click="scrollToRef($refs.language)">Languages</a>
            <a class="pr-4 mb-3 text-blue-700 cursor-pointer hover:text-blue-800" x-on:click="scrollToRef($refs.other)">Other Skills</a>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 sm:rounded-lg" x-ref="frontEnd">
            <h1 class="pb-2 text-2xl font-semibold">
                Front End
            </h1>
            <p class="mb-3">
                This is a collection of front end frameworks and tools that don't fit neatly into the CSS or JS categories.
            </p>
            <p class="mb-3">
                <span class="font-semibold">AngularJS:</span> I used AngularJS for the front end on Food Skills Library, a major multi-year project. Unfortunately, I haven't had the chance to use it's modern cousin: Angular, although I'd like the chance. AngularJS was a powerful framework, that took some getting used to, but had tons of potential once it clicked. I imagine the concepts would carry very well.
            </p>
            <p class="mb-3">
                <span class="font-semibold">ES6:</span> Unfortunately Internet Explorer compatibility still haunts this one, but thanks to compiled languages like Typescript, polyfills, and more modern projects, I've been able to use ES6 more and more over the past couple years. Arrow Functions, Promises, they're all fantastic additions to the language.
            </p>
            <p class="mb-3">
                <span class="font-semibold">React:</span> React is a language that znanja, my company's main product, has been shifting our front-end to for about 2 years. React is an incredibly powerful front-end language, and integrations with tools like JSX and Typescript really level it up to be a far superior experience to other frameworks I've used. Big fan of this one.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 sm:rounded-lg" x-ref="css">
            <h1 class="pb-2 text-2xl font-semibold">
                CSS
            </h1>
            <p class="mb-3">
                <span class="font-semibold">Bootstrap:</span> Bootstrap has been the main CSS framework I've used over the years. It has quite a lot of useful utilities, although I think modern frameworks have surpassed it.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Font Awesome:</span> FontAwesome is great to work with. It's the first place I go looking for icons. In fact, the icons this site uses are actually from FontAwesome, although I've opted to embed the SVGs directly, since I need so few icons, and prioritize keeping this site performant.
            </p>
            <p class="mb-3">
                <span class="font-semibold">LESS:</span> I've used LESS on several projects over five years. It's great.
            </p>
            <p class="mb-3">
                <span class="font-semibold">SCSS:</span> Much like LESS, I've used SCSS on several projects over years. Personally, I prefer it <span class="italic">slightly</span> over LESS.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Tailwind:</span> I've only had the privilege of using tailwind for around a month now, but I liked it so much I chose to use it for this site.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 sm:rounded-lg" x-ref="js">
            <h1 class="pb-2 text-2xl font-semibold">
                JS
            </h1>
            <p class="mb-3">
                <span class="font-semibold">Alpine.js:</span> I learned this framework in the last couple months, just like Tailwind, but it quickly impressed as an obvious replacement for JQuery in small projects. Combined with Tailwind, having <span class="italic">all</span> your code in one place is just really nice.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Backbone:</span> Backbone is a bit of a dinosaur, but it's part of the old tech stack for znanja, my main project for five years. We used it extensively once upon a time, so I've seen and worked with a lot of it.
            </p>
            <p class="mb-3">
                <span class="font-semibold">ImmerJS:</span> This one doesn't seem to do much at first, but combined with React Hooks and Typescript this was a powerful way of avoiding side effects and writing reliable, consistent code, while barely even leaving yourself the <span class="italic">option</span> to make mistakes.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Javascript:</span> Honestly, I strongly believe vanilla javascript gets a bad rap. Queries like document.getElementById are long and verbose, but it's performant, portable, and an underrated choice for small projects.
            </p>
            <p class="mb-3">
                <span class="font-semibold">JQuery:</span> JQuery is the old king of javascript. I've used it for years, like we all have. It does the job, but I'd almost always prefer something else now.
            </p>
            <p class="mb-3">
                <span class="font-semibold">MobX:</span> We switched our new architechure over to MobX... for about three months before React introduced Hooks and we migrated to that and ImmerJS.
            </p>
            <p class="mb-3">
                <span class="font-semibold">RequireJS:</span> Modern frameworks eliminate the need to load this many libraries directly, but RequireJS was part of the old tech stack for znanja, my main project for five years. We loaded hundreds of different libraries and modules through it once upon a time, so I'm definitely familiar with it.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Typescript:</span> Integrating static typing into javascript is a stroke of genius. The amount of minor errors this can catch before you even have the chance is fantastic. Not to mention the ability to compile down ES6 features, optimizations, etc. Honestly, I hope I never have to work on a large Javascript codebase without it again.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 sm:rounded-lg" x-ref="backend">
            <h1 class="pb-2 text-2xl font-semibold">
                Backend
            </h1>
            <p class="mb-3">
                <span class="font-semibold">AWS:</span> I've used AWS as a developer for around 5 years, and in the last six months I've been adding to that by taking a dedicated prep course for their Developer Associate certification.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Blade:</span> Blade is the templating engine for Laravel, which is actually rendering the page you're on now. I've used this one extensively, and it wasn't an accident I chose it for this site.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Chameleon:</span> Chameleon is a much older templating language, that we use with Pyramid. It's clunky by modern standards, but I've used it to do just about anything you can think of.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Elasticsearch:</span> I've only had the privilege to work with Elasticsearch on one project, Food Skills Library. In that one project, however, I've used it to integrate full text search on hundreds of PDFs, and more than a thousand records of all different kinds. Originally I addressed the elasticsearch API directly, but within the last year I rebuilt the functionality with Laravel scout and Queueing, making it substantially better in the process.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Laravel:</span> Laravel is a fantastic framework, and I've used it on almost a dozen projects over 5 years. I've been with Laravel since v3, and have used nearly every version up to the current 8. This site, of course, is built on Laravel 8. It's performant, it's extensible, it's secure, it has official tools for just about anything you can imagine, and notably has one of the best ORMs I've worked with.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Mongo:</span> Mongo has been a part of my main project, znanja, since forever. We don't regularly work on that code now, and prefer postgres for most applications, but I've definitely got experience with it.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Node/NPM:</span> I've never <span class="italic">written code for</span> an NPM module, but I've been using it for more than 5 years on lots of projects. I'm more than comfortable using the tools, managing packages, etc.
            </p>
            <p class="mb-3">
                <span class="font-semibold">PostgreSQL:</span> PostgreSQL has been my database for... as long as I've been addressing databases. More than 5 years now. It's both unbelievably powerful and performant. However, the concepts I've learned with PostgreSQL should easily extend to any other SQL out there.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Pyramid:</span> Pyramid is another ancient framework that powers znanja, my main project for the last 5 years. It's built on Python and the Pylons Project. We've been migrating away from it, but that will take years, and I've written thousands of lines of code using it.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Redis:</span> Redis is another technology that powers znanja, my main project for the last five years. I don't use it often, and usually not directly, but it's a great way to cache lots of data, and incredibly valuable in a large data-heavy application.
            </p>
            <p class="mb-3">
                <span class="font-semibold">SQLAlchemy:</span> SQLAlchemy was my first ORM five years ago, and I still occasionally use it now. It could certainly handle some things better, like how migrations tend to get crossed up with multiple contributors, but it's powerful and secure.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 sm:rounded-lg" x-ref="testing">
            <h1 class="pb-2 text-2xl font-semibold">
                Testing
            </h1>
            <p class="mb-3">
                <span class="font-semibold">Jasmine:</span> Jasmine has been part of our main front-end tests for 2 years now. I love it's clean way of describing tests as actions, and it's a great fit for the "real user actions" school of testing.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Jest:</span> I don't have immense experience with Jest, we try to avoid it in favour of Testing Library's more user-like selectors and actions, but every now and again you just have to do it the old school way. I'd say I'm familiar with Jest, but no expert.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Karma:</span> We've used Karma as our main front-end test runner for about 2 years. It's integration with NPM is great, and very helpful while developing tests.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Nose2:</span> Nose2 has run our backend tests for more than 5 years. Based on Python's unittest, it's not bad to work with, and I've tested just about anything you can imagine at least once by this point.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Testing Library:</span> Znanja, my main project, switched over to React Testing Library 2 years ago. And frankly, I love it. Tests are clear, reliable, and exercise real behaviour. I've written a lot of tests for it, and I'd gladly work with any version of it again.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 sm:rounded-lg" x-ref="language">
            <h1 class="pb-2 text-2xl font-semibold">
                Languages
            </h1>
            <p class="mb-3">
                <span class="font-semibold">C#:</span> I lack extensive C# knowledge, but back when I tinkered with Unity, I chose this language over javascript for it's performance. It's been a while since I've truly written low-level code, but I'm not unfamiliar with the challenges involved, and would not be against doing so in the future.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Java:</span> I haven't wrote Java in years, but this was my main language in college. I also used it fairly extensively for Android, which is a platform I might like to return to one day.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Lua:</span> Lua is a bit of an oddball. I used it a fair bit on a sideproject, and like the language.
            </p>
            <p class="mb-3">
                <span class="font-semibold">PHP:</span> PHP is another language with a bad reputation, but in reality it's just fine. Granted, I primarily use it with Laravel and it's many helpers, but it's also performant and capable on it's own.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Python:</span> Like most developers, I'm quite fond of Python. It's highly readable, and straightforward to write, even if I do keep adding semicolons. I've been using this one professionally for more than five years now.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 sm:rounded-lg" x-ref="other">
            <h1 class="pb-2 text-2xl font-semibold">
                Other Skills
            </h1>
            <p class="mb-3">
                I dabble with a lot more than just programming. This section features some of my more hobbyist skills.
            </p>
            <p class="mb-3">
                <span class="font-semibold">ATEM:</span> Since the pandemic, our church has gone online. To help with that, we picked up an ATEM, and mastering it has mostly been my task. Setting it up, creating macros, and getting the best output we can has been a fun challenge!
            </p>
            <p class="mb-3">
                <span class="font-semibold">Behringer X32:</span> About 3 years ago now, I started taking over much of the tech at my church. Learning the Behringer X32 Compact we have there was exciting, and I've improved leaps and bounds at mixing a soundboard in that time, using more and more of the tools provided by a digital board. I'm very comfortable with this board, and sound mixing in general, even though I have no formal training.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Blender:</span> This one is a new tool to my kit, but after a pretty intense weekend, I've also gone ahead and made my first blender donut, complete with animations, custom materials, and a seamless loop. Definitely interested in using this more!
            </p>
            <p class="mb-3">
                <span class="font-semibold">Davinci Resolve:</span> I've been interested in video for about 3 years now, and pretty quickly hit limitations with iMovie. Not being interested in working around bad tools, I jumped all the way to Davinci Resolve, and it's been insanely powerful ever since. Just having the ability has nudged me into tinkering with color grading, audio mixing, and lately I've even been dabbling with VFX. I'm really comfortable in it, and have published lots of small projects using it.
            </p>
            <p class="mb-3">
                <span class="font-semibold">OBS / SLOBS:</span> I started tinkering with livestreaming in 2019. It was quite the challenge, trying to create all of the branding, layouts, and everything else completely solo. Not to mention actually appearing on stream and trying to be entertaining live. Still, I managed to have some success, accruing more than 100 followers and reaching Twitch Affiliate.
            </p>
            <p class="mb-3">
                <span class="font-semibold">Photoshop:</span> I'm no expert, but I know enough to get by. I've had a license from work for viewing designs for more than 5 years, and have lightly used it on multiple personal projects over the years.
            </p>
            <p class="mb-3">
                <span class="font-semibold">ProPresenter:</span> I've used ProPresenter to put together Sunday services at Grace Church for several years now. I'd consider myself a very advanced user, having made heavy use of cues, the MIDI plugin, and Stage Displays. We even use a greenscreen Stage Display to pass effects to our ATEM Mini for livestreaming purposes.
            </p>
            <p class="mb-3">
                <span class="font-semibold">QLC+:</span> I helped switch our church's lighting over to QLC+, from a traditional light board. With it, we've added effects, and combined it with MIDI cues sent by ProPresenter to automatically adjust our lighting during the service. No extra volunteers needed, and much better lighting. Marvelous program.
            </p>
        </div>
    </div>
</x-layout>