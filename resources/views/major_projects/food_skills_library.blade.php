<x-layout>
    <div class="mt-2 ml-2">
        <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="{{ route('major_projects') }}">< Other Major Projects</a>
    </div>
    <div class="max-w-6xl pt-2 mx-auto lg:px-8 sm:px-6 sm:pb-6">
        <div class="p-5 shadow-xl bg-slate-200 dark:bg-slate-800 sm:rounded-lg">
            <h1 class="pb-2 text-2xl font-semibold dark:text-slate-200">
                Food Skills Library
            </h1>
            <p class="mb-3">
                I was first given this project five years ago. The task was to take all of these different skills and manuals that the FPSC (Food Processing Skills Canada) generated every year, and convert it into a single database. This required working out a database structure to handle over 300 occupations, with a combined total of more than a thousand individual skills across them.
            </p>
            <p class="mb-3">
                In addition, I also did the majority of the support on this site. I corresponded directly with FPSC for much of the project, and implemented bugfixes, gave support, and also handled both the estimates and work for all future work on the project. Initially, it was thought that this would be a one-off project, but it was considered a major success, and I've done major updates on the site multiple times over 4 years.
            </p>
            <p class="mb-3">
                Food Skills Library was built with Laravel as the backend, and angularJS for the frontend. We used PostgreSQL for the database itself, and later introduced Elasticsearch.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 dark:bg-slate-800 sm:rounded-lg">
            <h1 class="pb-2 text-xl font-semibold">
                PDF Generation
            </h1>
            <p class="mb-3">
                One of the most complicated parts of the initial project was the idea of actually <span class="italic">generating</span> those manuals back from the database, so that the FPSC would never have to manually produce them again. We promised to look into this, but didn't actually promise we could deliver it, as we weren't even sure it was possible at the time!
            </p>
            <p class="mb-3">
                In the end, I managed to tackle this one all on my own. It ended up combining a <span class="italic">lot</span> of different technologies into one function. As a high level summary, I had the FPSC upload their PDFs in many different parts: a cover page, appendices, a background, etc. This made the end product highly customizable, while also letting them reuse different parts for different occupations. When a PDF is requested, a PDF model is created, and <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://www.pdflabs.com/tools/pdftk-the-pdf-toolkit/">PDFtk</a> is called from a PHP shell interface, to count file page lengths. These page lengths are used for fake pages, allowing us to setup a table of contents in the final product.
            </p>
            <p class="mb-3">
                The bulk of the content is generated using <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://wkhtmltopdf.org/">wkhtmltopdf</a> via <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://github.com/barryvdh/laravel-snappy">snappy</a> on a custom blade view. Unsurprisingly, wkhtmltopdf has a <span class="italic">lot</span> of quirks when used this extensively, so a lot of trial and error was involved in learning the ins and outs here. In the end, I managed to get everything worked out though, so the PDF properly included fonts, correct page wrapping and sizing, margins, and a complete table of contents, <span class="italic">including</span> fake stubs for the other PDFs.
            </p>
            <p class="mb-3">
                With the main body generated, we save the file temporarily to disk. Then, using PDFtk again, we stamp on the background, replace the stubs with their proper files, and use snappy to encode it as a file request and send it back to the user. You'd <span class="italic">think</span> a task this complicated would take an incredibly long time, but in the end, I managed to get that whole process down to around 30 seconds for a 100+ page PDF.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 dark:bg-slate-800 sm:rounded-lg">
            <h1 class="pb-2 text-xl font-semibold">
                Elasticsearch
            </h1>
            <p class="mb-3">
                With this many occupations and skills, it's no surprise the FPSC came back and requested a single primary search. We already had page-specific searches powered by PostgreSQL, but for this task, we needed something better. After a bit of research, that led us to <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://www.elastic.co/">elasticsearch</a>, an open-source tool that could probably power google. I began to work with <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://github.com/elasticquent/Elasticquent">elasticquent</a>, to link our laravel models to elasticsearch indices. This required a lot of direct work with the elasticsearch API, writing mappers, analyzers, and everything else needed to store and classify the data as we wanted it to appear on search. I even leveraged some of my newfound PDF experience to bring PDFtk back to extract the full text body of some occupation assets. I then leveraged laravel's EventServiceProvider to automatically update our elasticsearch models whenever our laravel models were updated.
            </p>
            <p class="mb-3">
                Then, with one rather large elasticsearch query, combined with a lot of testing and experimenting, we were able to create a single powerful search page, with lots of filters and options. This search came with all the features users have come to expect of search engines like google: fuzzy matching, priority ranking, and the ability to surface results based on <span class="italic">any</span> connection, even something as minor as a single sentence buried in a PDF. It also responds impressively quick, because although our dataset is considerable, it's still considered small for an industrial tool like elasticsearch.
            </p>
            <p class="mb-3">
                In the last year, I also got the chance (and budget) to work further on this, bringing so much more experience to the project than the first time I took it on! Now, much of the elasticquent functionality is rebuilt under <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://laravel.com/docs/8.x/scout">Laravel Scout</a>, allowing the power of elasticsearch to be shared with our <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://nova.laravel.com/">Laravel Nova</a> admin panel. I also introduced queueing, allowing all that indexing and PDF scanning to happen asynchronously, greatly speeding up the speed and reliability of syncing our model updates to elasticsearch.
            </p>
        </div>
    </div>
</x-layout>