<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Denise J. Lazo — Fourth-year BSIT student passionate about technology, creativity, and continuous learning.">

        <title>Denise J. Lazo — Portfolio</title>

        @fonts

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* tailwind fallback: injected by vite on first build */
            </style>
        @endif
    </head>

    <body class="bg-navy-950 text-slate-200 antialiased">

        <!-- ===== NAVBAR ===== -->
        <header class="fixed top-0 inset-x-0 z-50 glass border-x-0 border-t-0">
            <nav class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4" aria-label="Primary">
                <a href="#home" class="text-xl font-bold tracking-tight text-white">
                    Denise<span class="text-cool-400"> Lazo</span>
                </a>
                <div class="hidden md:flex items-center gap-8 text-sm font-medium">
                    <a href="#home" class="nav-link text-slate-200 hover:text-cool-400 transition-colors">Home</a>
                    <a href="#about" class="nav-link text-slate-200 hover:text-cool-400 transition-colors">About</a>
                    <a href="#skills" class="nav-link text-slate-200 hover:text-cool-400 transition-colors">Skills</a>
                    <a href="#projects" class="nav-link text-slate-200 hover:text-cool-400 transition-colors">Projects</a>
                    <a href="#education" class="nav-link text-slate-200 hover:text-cool-400 transition-colors">Education</a>
                    <a href="#contact" class="inline-block px-5 py-2 rounded-lg bg-royal-500 hover:bg-royal-400 text-white font-semibold transition-colors glow-blue">Contact</a>
                </div>
                <button id="nav-toggle" class="md:hidden text-slate-200" aria-label="Toggle menu" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </nav>
            <div id="nav-menu" class="hidden md:hidden glass px-6 py-4 flex flex-col gap-3 text-sm font-medium">
                <a href="#home" class="nav-link text-slate-200 py-1">Home</a>
                <a href="#about" class="nav-link text-slate-200 py-1">About</a>
                <a href="#skills" class="nav-link text-slate-200 py-1">Skills</a>
                <a href="#projects" class="nav-link text-slate-200 py-1">Projects</a>
                <a href="#education" class="nav-link text-slate-200 py-1">Education</a>
                <a href="#contact" class="text-cool-400 py-1">Contact</a>
            </div>
        </header>

        <main>
            <!-- ===== HERO ===== -->
            <section id="home" class="relative min-h-screen flex items-center overflow-hidden pt-24 pb-16">
                <!-- background gradients -->
                <div class="absolute -top-32 -right-32 w-[500px] h-[500px] rounded-full bg-royal-500/20 blur-[120px]"></div>
                <div class="absolute -bottom-40 -left-32 w-[500px] h-[500px] rounded-full bg-cool-500/15 blur-[120px]"></div>
                <div class="absolute top-1/3 left-1/2 w-[400px] h-[400px] rounded-full bg-royal-400/10 blur-[100px]"></div>

                <canvas id="particle-canvas" class="absolute inset-0"></canvas>

                <div class="relative max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-12 items-center w-full">
                    <div class="text-center lg:text-left">
                        <p class="inline-flex items-center gap-2 glass px-4 py-1.5 rounded-full text-sm text-cool-400 mb-6">
                            <span class="w-2 h-2 rounded-full bg-cool-400 animate-pulse"></span>
                            Available for internships & projects
                        </p>
                        <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight mb-4">
                            Hi, I'm <span class="gradient-text text-glow">Denise J. Lazo</span>
                        </h1>
                        <p class="text-lg md:text-xl text-slate-300 max-w-xl mx-auto lg:mx-0 mb-8">
                            A fourth-year BSIT student passionate about technology, creativity, and continuous learning.
                        </p>
                        <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                            <a href="#about" class="px-6 py-3 rounded-lg bg-royal-500 hover:bg-royal-400 text-white font-semibold transition-transform hover:-translate-y-0.5 glow-blue">
                                About Me
                            </a>
                            <a href="#projects" class="px-6 py-3 rounded-lg glass hover:border-cool-400 text-white font-semibold transition-all hover:-translate-y-0.5">
                                View My Projects
                            </a>
                            <a href="#contact" class="px-6 py-3 rounded-lg text-cool-400 border border-cool-500/40 hover:bg-cool-500/10 font-semibold transition-all hover:-translate-y-0.5">
                                Contact Me
                            </a>
                        </div>
                    </div>

                    <!-- Profile photo -->
                    <div class="flex justify-center lg:justify-end">
                        <div class="relative">
                            <div class="absolute inset-0 rounded-full bg-gradient-to-tr from-royal-500 to-cool-400 opacity-40 blur-2xl"></div>
                            <div class="relative w-64 h-64 md:w-80 md:h-80 rounded-full p-0.1 bg-gradient-to-tr from-royal-600 to-cool-500">
                                <div class="w-full h-full rounded-full glass flex items-center justify-center overflow-hidden">
                                    <div class="text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-28 h-28 mx-auto text-slate-300 mb-2" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                        <span class="text-sm text-slate-400 font-medium"><img src="{{ asset('images/dinis.png') }}"></span>
                                    </div>
                                </div>
                            </div>
                             <div class="absolute left-1/2 -translate-x-1/2 -bottom-7 glass rounded-xl px-4 py-2 text-sm font-semibold text-cool-600">
                                BSIT · 4th Year
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#about" class="absolute bottom-8 left-1/2 -translate-x-1/2 text-slate-400 hover:text-cool-400 transition-colors" aria-label="Scroll down">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7"/>
                    </svg>
                </a>
            </section>

            <!-- ===== ABOUT ===== -->
            <section id="about" class="py-24 px-6 max-w-7xl mx-auto">
                <div class="reveal text-center mb-16">
                    <span class="glass px-4 py-1.5 rounded-full text-sm text-cool-400">About Me</span>
                    <h2 class="text-3xl md:text-5xl font-bold text-white mt-4">Get to Know Me</h2>
                    <p class="text-slate-400 mt-4 max-w-2xl mx-auto">
                        I'm a 20-year-old fourth-year BSIT student at Data Center College of the Philippines from Salnec, Bucay, Abra.
                        I enjoy technology, creative editing, learning new things, and spending my free time playing volleyball, reading, and watching movies.
                    </p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @php
                        $aboutItems = [
                            ['icon' => '🎓', 'title' => 'Education', 'text' => '4th Year BSIT'],
                            ['icon' => '💻', 'title' => 'Field', 'text' => 'Information Technology'],
                            ['icon' => '📍', 'title' => 'Location', 'text' => 'Bucay, Abra'],
                            ['icon' => '🏐', 'title' => 'Volleyball', 'text' => 'Loves to play'],
                            ['icon' => '📖', 'title' => 'Reading', 'text' => 'Avid reader'],
                            ['icon' => '🎬', 'title' => 'Movies', 'text' => 'Movie enthusiast'],
                            ['icon' => '🎞️', 'title' => 'Editing', 'text' => 'Creative editor'],
                            ['icon' => '🐕', 'title' => 'Dog Lover', 'text' => 'Loves dogs'],
                        ];
                    @endphp
                    @foreach ($aboutItems as $item)
                        <div class="reveal glass rounded-2xl p-6 hover:border-cool-400/50 hover:-translate-y-1 transition-all duration-300">
                            <div class="text-3xl mb-3">{{ $item['icon'] }}</div>
                            <h3 class="text-lg font-semibold text-white">{{ $item['title'] }}</h3>
                            <p class="text-slate-400 mt-1 text-sm">{{ $item['text'] }}</p>
                        </div>
                    @endforeach
                </div>

                <div class="reveal mt-12 grid md:grid-cols-3 gap-6">
                    <div class="glass rounded-2xl p-6 text-center">
                        <p class="text-3xl font-bold text-cool-400">20</p>
                        <p class="text-slate-400 mt-1 text-sm">Years Old</p>
                    </div>
                    <div class="glass rounded-2xl p-6 text-center">
                        <p class="text-3xl font-bold text-cool-400">4th</p>
                        <p class="text-slate-400 mt-1 text-sm">Year Level</p>
                    </div>
                    <div class="glass rounded-2xl p-6 text-center">
                        <p class="text-3xl font-bold text-cool-400">BSIT</p>
                        <p class="text-slate-400 mt-1 text-sm">Course</p>
                    </div>
                </div>
            </section>

            <!-- ===== SKILLS ===== -->
            <section id="skills" class="py-24 px-6 bg-navy-900/60">
                <div class="max-w-7xl mx-auto">
                    <div class="reveal text-center mb-16">
                        <span class="glass px-4 py-1.5 rounded-full text-sm text-cool-400">Skills</span>
                        <h2 class="text-3xl md:text-5xl font-bold text-white mt-4">My Toolbox</h2>
                        <p class="text-slate-400 mt-4 max-w-2xl mx-auto">
                            Technologies and tools I work with to build and create.
                        </p>
                    </div>

                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @php
                            $skills = [
                                ['name' => 'Photo Editing','icon' => '🖼️'  ],
                                ['name' => 'Video Editing','icon' => '🎬'  ],
                                ['name' => 'Graphic Design','icon' => '✏️' ],
                                ['name' => 'Canva', 'icon' => '🎨'],
                                ['name' => 'Microsoft Word','icon' => '✏️'],
                            ];
                        @endphp
                        @foreach ($skills as $skill)
                            <div class="reveal glass rounded-2xl p-6 hover:border-cool-400/40 hover:-translate-y-1 transition-all duration-300">
                                <div class="flex items-center gap-3 mb-4">
                                    <span class="text-2xl">{{ $skill['icon'] }}</span>
                                    <h3 class="font-semibold text-white">{{ $skill['name'] }}</h3>
                                </div>
                    
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- ===== PROJECTS ===== -->
            <section id="projects" class="py-24 px-6 max-w-7xl mx-auto">
                <div class="reveal text-center mb-16">
                    <span class="glass px-4 py-1.5 rounded-full text-sm text-cool-400">Projects</span>
                    <h2 class="text-3xl md:text-5xl font-bold text-white mt-4">Featured Projects</h2>
                    <p class="text-slate-400 mt-4 max-w-2xl mx-auto">
                        A selection of projects I've worked on during my studies.
                    </p>
                </div>

                <div class="relative flex flex-col items-center"></div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 justify-center gap-6">
                    @php
                        $projects = [
                           
                             [
                            
                                'title' => '1. Permanent Record',
                                'desc' => 'This is one of my first projects, a simple VB.NET application designed to help users manage and store records. It includes an easy-to-use interface, data validation, and basic CRUD operations for adding, viewing, updating, and deleting information.',
                                'tech' => ['VB.Net'],
                                'gradient' => 'from-blue-500 to-cyan-400',
                            ],

                        ];
                    @endphp
                    @foreach ($projects as $project)
                        <article class="reveal group glass rounded-2xl overflow-hidden hover:-translate-y-2 hover:border-cool-400/50 transition-all duration-300 hover:shadow-[0_20px_60px_rgba(37,99,235,0.25)] max-w-xs">
                            <div class="h-44 bg-gradient-to-br {{ $project['gradient'] }} flex items-center justify-center relative w-full max-w-sm">
                                <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(rgba(255,255,255,0.6) 1px, transparent 1px); background-size: 18px 18px;"></div>
                                <span class="text-5xl opacity-90 group-hover:scale-110 transition-transform duration-300"><img src="{{ asset('images/per.png') }}"></span>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-white mb-2">{{ $project['title'] }}</h3>
                                <p class="text-slate-400 text-sm mb-4">{{ $project['desc'] }}</p>
                                <div class="flex flex-wrap gap-2 mb-5">
                                    @foreach ($project['tech'] as $tech)
                                        <span class="px-2.5 py-1 rounded-md bg-royal-500/10 text-cool-400 text-xs font-medium border border-royal-500/20">{{ $tech }}</span>
                                    @endforeach
                                </div>
                               
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <!-- ===== EDUCATION ===== -->
            <section id="education" class="py-24 px-6 bg-navy-900/60">
                <div class="max-w-3xl mx-auto">
                    <div class="reveal text-center mb-16">
                        <span class="glass px-4 py-1.5 rounded-full text-sm text-cool-400">Education</span>
                        <h2 class="text-3xl md:text-5xl font-bold text-white mt-4">My Journey</h2>
                    </div>

                    <div class="relative border-l-2 border-royal-500/30 pl-8 ml-4">
                        <div class="reveal relative mb-10">
                            <span class="absolute -left-[42px] top-1 w-4 h-4 rounded-full bg-royal-500 shadow-[0_0_12px_rgba(37,99,235,0.8)]"></span>
                            <div class="glass rounded-2xl p-6 hover:border-cool-400/40 transition-colors">
                                <p class="text-sm text-cool-400 font-semibold mb-1">Data Center College of the Philippines</p>
                                <h3 class="text-xl font-bold text-white">Bachelor of Science in Information Technology</h3>
                                <p class="text-slate-400 mt-2 text-sm">Fourth Year Student · Señor Niño Village, Bangued, Abra</p>
                                <p class="text-slate-500 mt-3 text-sm">Building strong foundations in programming, web development, databases, and system analysis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ===== HOBBIES & INTERESTS ===== -->
            <section id="hobbies" class="py-24 px-6 max-w-7xl mx-auto">
                <div class="reveal text-center mb-16">
                    <span class="glass px-4 py-1.5 rounded-full text-sm text-cool-400">Hobbies & Interests</span>
                    <h2 class="text-3xl md:text-5xl font-bold text-white mt-4">Beyond the Code</h2>
                    <p class="text-slate-400 mt-4 max-w-2xl mx-auto">What I enjoy doing in my free time.</p>
                </div>

                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @php
                        $hobbies = [
                            ['icon' => '🏐', 'title' => 'Playing Volleyball', 'desc' => 'Staying active and enjoying team spirit on the court.'],
                            ['icon' => '📖', 'title' => 'Reading', 'desc' => 'Exploring new worlds and ideas through books.'],
                            ['icon' => '🎬', 'title' => 'Watching Movies', 'desc' => 'Relaxing with films and discovering new stories.'],
                            ['icon' => '🎞️', 'title' => 'Editing', 'desc' => 'Creating and polishing visuals with creative editing.'],
                            ['icon' => '🐕', 'title' => 'Spending Time With Dogs', 'desc' => 'My favorite furry companions — I absolutely love dogs.'],
                        ];
                    @endphp
                    @foreach ($hobbies as $hobby)
                        <div class="reveal glass rounded-2xl p-6 text-center hover:border-cool-400/40 hover:-translate-y-1 transition-all duration-300">
                            <div class="text-4xl mb-4">{{ $hobby['icon'] }}</div>
                            <h3 class="text-lg font-semibold text-white">{{ $hobby['title'] }}</h3>
                            <p class="text-slate-400 text-sm mt-2">{{ $hobby['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            <!-- ===== PERSONAL GOALS ===== -->
            <section id="goals" class="py-24 px-6 bg-navy-900/60">
                <div class="max-w-5xl mx-auto">
                    <div class="reveal text-center mb-16">
                        <span class="glass px-4 py-1.5 rounded-full text-sm text-cool-400">Personal Goals</span>
                        <h2 class="text-3xl md:text-5xl font-bold text-white mt-4">What Drives Me</h2>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        @php
                            $goals = [
                                'Improving programming and technical skills',
                                'Becoming better at web development',
                                'Creating useful and innovative systems',
                                'Improving editing and creative skills',
                                'Gaining professional IT experience',
                                'Continuing to learn new technologies',
                                'Becoming a successful IT professional',
                            ];
                        @endphp
                        @foreach ($goals as $goal)
                            <div class="reveal flex items-start gap-4 glass rounded-2xl p-5 hover:border-cool-400/40 transition-colors">
                                <span class="mt-1 w-6 h-6 shrink-0 rounded-full bg-royal-500/20 border border-royal-500/40 flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-cool-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
                                    </svg>
                                </span>
                                <p class="text-slate-200 font-medium">{{ $goal }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <!-- ===== CONTACT ===== -->
            <section id="contact" class="py-24 px-6 max-w-7xl mx-auto">
                <div class="reveal text-center mb-16">
                    <span class="glass px-4 py-1.5 rounded-full text-sm text-cool-400">Contact</span>
                    <h2 class="text-3xl md:text-5xl font-bold text-white mt-4">Get In Touch</h2>
                    <p class="text-slate-400 mt-4 max-w-2xl mx-auto">
                        Have a question or want to collaborate? Feel free to reach out.
                    </p>
                </div>

                <div class="grid lg:grid-cols-5 gap-10">
                    <div class="reveal lg:col-span-2">
                        <h3 class="text-xl font-bold text-white mb-4">Let's Connect</h3>
                        <p class="text-slate-400 mb-6">
                            I'm always open to discussing technology, projects, internships, and creative ideas.
                        </p>
                        <div class="flex flex-col gap-3 text-sm">
                            <div class="flex items-center gap-3 text-slate-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-cool-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                </svg>
                                <span>Salnec, Bucay, Abra, Philippines</span>
                            </div>
                            <div class="flex items-center gap-3 text-slate-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-cool-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span>deniselazo@example.com</span>
                            </div>
                        </div>

                        <div class="flex gap-4 mt-8">
                            @php
                                $socials = [
                                    ['label' => 'Facebook', 'icon' => 'f'],
                                    ['label' => 'Instagram', 'icon' => 'ig'],
                                    ['label' => 'GitHub', 'icon' => 'gh'],
                                    ['label' => 'LinkedIn', 'icon' => 'in'],
                                ];
                            @endphp
                            @foreach ($socials as $social)
                                <a href="#" aria-label="{{ $social['label'] }}" class="w-11 h-11 flex items-center justify-center rounded-lg glass hover:border-cool-400/60 hover:text-cool-400 hover:-translate-y-0.5 transition-all text-sm font-semibold text-slate-300">
                                    {{ $social['icon'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <form class="reveal lg:col-span-3 glass rounded-2xl p-8" action="mailto:deniselazo@example.com" method="post" enctype="text/plain">
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-300 mb-2">Name</label>
                                <input type="text" id="name" name="name" required placeholder="Your name"
                                    class="w-full px-4 py-3 rounded-lg bg-navy-800/60 border border-royal-500/20 focus:border-cool-400 focus:outline-none text-white placeholder-slate-500 transition-colors">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-300 mb-2">Email</label>
                                <input type="email" id="email" name="email" required placeholder="you@example.com"
                                    class="w-full px-4 py-3 rounded-lg bg-navy-800/60 border border-royal-500/20 focus:border-cool-400 focus:outline-none text-white placeholder-slate-500 transition-colors">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-sm font-medium text-slate-300 mb-2">Message</label>
                            <textarea id="message" name="message" rows="5" required placeholder="Write your message..."
                                class="w-full px-4 py-3 rounded-lg bg-navy-800/60 border border-royal-500/20 focus:border-cool-400 focus:outline-none text-white placeholder-slate-500 transition-colors resize-none"></textarea>
                        </div>
                        <button type="submit" class="w-full sm:w-auto px-8 py-3 rounded-lg bg-royal-500 hover:bg-royal-400 text-white font-semibold transition-colors glow-blue">
                            Send Message
                        </button>
                    </form>
                </div>
            </section>
        </main>

        <!-- ===== FOOTER ===== -->
        <footer class="py-10 px-6 bg-navy-900 border-t border-royal-500/20">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="text-slate-400 text-sm">
                    Designed &amp; Developed by <span class="text-cool-400 font-semibold">Denise J. Lazo</span>
                </p>
                <div class="flex gap-4">
                    @foreach ($socials ?? [] as $social)
                        <a href="#" aria-label="{{ $social['label'] }}" class="text-slate-400 hover:text-cool-400 transition-colors">{{ $social['icon'] }}</a>
                    @endforeach
                </div>
                <p class="text-slate-500 text-xs">© {{ date('Y') }} Denise J. Lazo. All rights reserved.</p>
            </div>
        </footer>

    </body>
</html>
