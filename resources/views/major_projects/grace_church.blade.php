<x-layout>
    <div class="mt-2 ml-2">
        <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="{{ route('major_projects') }}">< Other Major Projects</a>
    </div>
    <div class="max-w-6xl pt-2 mx-auto lg:px-8 sm:px-6 sm:pb-6">
        <div class="p-5 shadow-xl bg-slate-200 dark:bg-slate-800 sm:rounded-lg">
            <h1 class="pb-2 text-2xl font-semibold dark:text-slate-200">
                Grace Church
            </h1>
            <p class="mb-3">
                Grace Church is my local church, and somewhere I've invested a ton of volunteered time and effort. We're a moderate-size church, of around 100 members, with no paid tech staff, but a great group of volunteers to help keep things running on a Sunday. Over the past 5 years, I've become the defacto tech lead, training volunteers, coming up with systems, and doing considerable work behind the scenes.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 dark:bg-slate-800 sm:rounded-lg">
            <h1 class="pb-2 text-xl font-semibold">
                Sound
            </h1>
            <p class="mb-3">
                The first major thing I took over was sound. Our church has an incredible board, the <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://www.behringer.com/product.html?modelCode=P0AAP">Behringer X32 Compact</a>. Frankly, it was... a bit much for our sound guy at the time. He was an amazing volunteer, who stepped up when no one else would, but it's a complicated piece of hardware, and we'd frequently have issues that were hard for him to diagnose. I threw myself at the task, watching a whole lot of YouTube tutorials, grasping concepts like gain, buses, faders, DCAs, and EQing. Sound is a <span class="italic">wonderful</span> world, and there's a great deal you can learn.
            </p>
            <p class="mb-3">
                Ultimately, I took over, and with some initial help from a professional, managed to conquer almost all of the buzz and whine we were having before. Since then, I've continued to learn, by experimentation, some research, and volunteering for larger events where I could work side-by-side with real professionals. Our sound mixing has improved little by little over the years, into something I'm rather proud of.
            </p>
            <p class="mb-3">
                Part of that has also been making sure <span class="italic">other people</span> know how to use the board as well. I've trained a few volunteers on the hardware, and at one point I even tried recording my own <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://www.youtube.com/playlist?list=PLa5PlRpgCwpPNH9iPeuWJFPVWtnQttpN_">series of YouTube tutorials</a>, while learning video editing and recording along the way.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 dark:bg-slate-800 sm:rounded-lg">
            <h1 class="pb-2 text-xl font-semibold">
                Stage Lights
            </h1>
            <p class="mb-3">
                Another thing I've dabbled heavily in here is stage lighting. Grace Church has <span class="italic">never</span> had a dedicated lights guy, we simply don't have enough volunteers to justify creating a whole other position. However, I still wanted to know, so I started learning how our lights work, first by asking questions from the guy who volunteered to install our stage lights, and later by finding and reading the manual for our old-school lighting board.
            </p>
            <p class="mb-3">
                I was able to use that to create some chase sequences, tweak some settings, etc. I created a few custom effects or lighting, for things like dramas or holidays. But ultimately, the light board didn't allow much. It was clunky to use, highly manual, and too obtuse to train anyone else on. I started looking for a more <span class="italic">digital</span> solution. I also suspected there may be a way to link our lighting to <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://renewedvision.com/propresenter/">ProPresenter</a>, as it had a MIDI communication module. Unfortunately, that module was more than thousand dollars, and I didn't even know it would work, so I had to shelve that idea for a while.
            </p>
            <p class="mb-3">
                However, with the release of ProPresenter 7, all the modules were included for free. So, I petitioned for a 100$ cable, that would allow DMX communication over USB, and began researching an app to control it. I settled on <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://www.qlcplus.org/">QLC+</a>, and began redesigning our entire lighting setup from scratch, while creating a powerful dashboard as I went. Gone were the 48 channels of our light board, with this new digital "board" I had access to a whopping 512 channels. I reconfigured our entire DMX universe, addressing each light individually, and linking them via groups in QLC instead. I also succeeded in linking MIDI cues from ProPresenter to QLC+, allowing our lights to automatically adjust as we went through the service schedule, often without the ProPresenter operator even <span class="italic">realizing</span> they were triggering cues.
            </p>
            <p class="mb-3">
                At the risk of sounding vain, this was a <span class="italic">killer</span> solution for our church. No new volunteers required, we didn't even have to train our volunteers on the change, they were already clicking slides to change backgrounds, etc, I simply linked the cues to those existing slides. It was also incredibly cheap, with the only expense being that initial 100$ cable. QLC+ has also proved remarkably versatile, helping us do flashier light shows for youth events, and made it far easier and more accessible to setup custom flair for holidays and dramas.
            </p>
        </div>

        <div class="p-5 mt-5 shadow-xl bg-slate-200 dark:bg-slate-800 sm:rounded-lg">
            <h1 class="pb-2 text-xl font-semibold">
                Going Online
            </h1>
            <p class="mb-3">
                As with most churches, the 2020 pandemic forced us to go online, and created new challenges for <span class="italic">everything</span>. Starting with the most obvious, we had to go online! We went with an <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://www.blackmagicdesign.com/ca/products/atemmini">ATEM Mini</a>, and it's proven to be a wonderful little piece of hardware. We setup two cameras, and also connected another output to ProPresenter. I also learned ATEM Software Control, and setup macros for some different things.
            </p>
            <p class="mb-3">
                For our overlays, I ended up innovating a weird little trick. I setup ProPresenter with a custom Stage Display, overlayed on a green background. Feeding that output to the ATEM, I used the ATEM's keying features to overlay that Stage Display over the video feed. This little trick let our existing volunteers power our lyrics, again, without even realizing it was happening. When the words changed for our live audience, they were mirrored online! Combined with some ATEM macros, I ended up switching between this "greenscreen" view, and a live view, for videos and announcement slides, relying on the ATEM's picture-in-picture features.
            </p>
            <p class="mb-3">
                Lots of other things were affected too. With sound, it turned out we couldn't just output the same mix to the livestream as we did to a live audience, what sounds good live would just sound... flat online. A larger church would hire another soundperson, it was again impractical to train and schedule two volunteers every single week. To solve this, I ended up leveraging our digital soundboard to create a custom bus, using relative adjustments to make changes <span class="italic">on top of</span> the live mix. So online, we'd get the same mix as the room, but with more bass guitar, or louder voices, or more reverb, for example. I also introduced a stereo element to the mix, and we added some overhead mics to capture the sound in the room, some natural reverb, and later, crowd reactions. All of these changes together made an online mix that sounded <span class="italic">significantly</span> better, without adding any more work for our volunteers, and without introducing substantial costs.
            </p>
            <p class="mb-3">
                Stage lighting also became more important than ever. Frankly, cameras are <span class="italic">far</span> less forgiving than the human eye when it comes to lighting. Thanks to my existing work with QLC+, we were able to add more lights, carefully control our spotlights to highlight speakers, and eventually get a much better picture.
            </p>
            <p class="mb-3">
                All in all, our setup isn't <span class="italic">professional</span>, by any means, as that would require far more money and staff. However, thanks to my work over the prior few years, and our amazing volunteers, we were uniquely prepared to adapt and develop a very competent online presence when it mattered most. I still believe our online services are better technically than all but the biggest churches I've seen, even some with substantially larger budgets than our little church. If you want to see the product of that effort, we've continued to stay online, even while we're also open in-person. <a class="text-blue-700 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-500" href="https://www.youtube.com/c/GraceChurchBuctouche">Check out our YouTube!</a>
            </p>
        </div>
    </div>
</x-layout>