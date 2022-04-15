<!-- ===== About Section Start --->
<section id="about" class="dark:bg-slate-800 pt-20 lg:pt[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center -mx-4">
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex items-center -mx-3 sm:mx-4">
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="py-3 sm:py-4">
                            <img 
                                src="{{ url('/img/me1.png') }}"
                                alt="Omotolani Olurotimi"
                                class="rounded-2xl w-full"
                            />
                        </div>
                        <div class="py-3 sm:py-4">
                            <img 
                                src="{{ url('/img/me3.png') }}"
                                alt="Omotolani Olurotimi"
                                class="rounded-2xl w-full"
                            />
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                            <img 
                                src="{{ url('/img/me2.png') }}"
                                alt="Omotolani Olurotimi"
                                class="rounded-2xl w-full"
                            />
                            <x-about-dots></x-about-dots>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="mt-10 lg:mt-0">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        <blockquote class="text-sm text-gray-500 italic py=2 px-3 border-amber-500">
                            "By all means WORK HARD: Favour is always Pivotal to Success"
                        </blockquote>
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
                        About Me
                    </h2>
                    <p class="text-base dark:text-gray-400 mb-8">
                        I am a Web Developer with a demonstrated history of working in the Software Development Industry.<br />
                        Over the course of my Web Development journey, I have worked on various projects making use of 
                        different technologies, however I feel that there is sill much that I need to know.
                    </p>
                    <p class="text-base dark:text-gray-400 mb-8">
                        I started my Web Development journey in 2014 and have majored in Backend Web Development.<br /> I am skilled in the use of
                        <span class="text-amber-500 font-bold">PHP(Vanilla and Laravel), MySQL, HTML, CSS, Bootstrap, jQuery</span>. I am also familiar
                        with the use of <span class="text-amber-500 font-bold">MSSQL and TailwindCSS</span>
                    </p>
                    <p class="text-base dark:text-gray-400 mb-8">
                        I have a LlB Degree from the Faculty of Law of the Obafemi Awolowo University and a BL from the Nigerian Law School Lagos (Kano Campus)
                    </p>
                    <x-button-link href="https://www.linkedin.com/in/omotolani-olurotimi-5b455b12a/" variant="primary" target="_blank">
                        My LinkedIn
                    </x-button-link>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== About Section End --->