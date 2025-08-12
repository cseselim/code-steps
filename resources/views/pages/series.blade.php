<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>codeSteps</title>


    <link href="https://fonts.googleapis.com/css2?family=Reddit+Sans:ital,wght@0,200..900;1,200..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

{{-- <body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-4 items-center lg:justify-center min-h-screen flex-col">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        @if (Route::has('login'))
            <nav class="flex items-center justify-end gap-4">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>
    <div
        class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <h1 class="bg-[#ddd] text-red-500 text-[50px]">This this home page</h1>
    </div>

    @if (Route::has('login'))
        <div class="h-14.5 hidden lg:block"></div>
    @endif
</body> --}}

<body class="bg-[#080E1C]">

    <!-- header area -->

    <header class="bg-[#231D4C] relative overflow-hidden max-w-[1920px] mx-auto">
        <!-- navbar area -->
        <nav class="navbar w-full bg-[rgb(15_23_42)] mx-auto px-3 lg:px-5 py-3 text-[#fff]">
            <div class="container mx-auto flex items-center justify-between gap-5">
                <div class="">
                    <img src="{{ asset('images/logo-white.svg') }}" alt="logo" class="w-36">
                </div>
                <div>
                    <nav>
                        <ul class="lg:flex space-x-3 hidden text-[15px]">
                            <li><a href="/series" class="font-semibold cursor-pointer">Series</a></li>
                            <li><a href="/topics" class="font-semibold cursor-pointer">Topics</a></li>
                            <li><a href="/lessons" class="font-semibold cursor-pointer">Lessons</a></li>
                            <li><a href="/blog" class="font-semibold cursor-pointer">Blog</a></li>
                            <li><a href="/discuss" class="font-semibold cursor-pointer">Discuss</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="flex items-center gap-3">
                    <div
                        class="bg-[#1E293B] px-3 py-2 text-white rounded-lg hover:bg-[#334155] hover:cursor-pointer transition duration-500 ease-in-out">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div
                        class="bg-[#1E293B] px-3 py-2 text-blck rounded-lg hover:bg-[#334155] hover:cursor-pointer transition duration-500 ease-in-out">
                        <i class="fa-solid fa-sun"></i>
                    </div>
                    <div class="hidden lg:flex gap-3 text-sm">
                        <button
                            class="bg-[#1E293B] text-white px-3 py-2 rounded-lg hover:bg-gray-300 hover:cursor-pointer transition duration-500 ease-in-out">SignIn</button>
                        <button class="bg-gray-200 text-black px-3 py-2 rounded-lg">Sign Up</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- series area -->
    <section class="bg-[#0f172a]">
        <div class="container mx-auto px-3 lg:px-5 py-10">
            <h1 class="text-white text-4xl font-bold">Recently Updated.</h1>
            <div class="lg:flex items-center justify-between mb-4">
                <h3 class="text-[#8186D7] text-xl font-semibold">Series with new lessons</h3>
            </div>

            <div class="md:flex items-stretch justify-between gap-8 gap-x-8">
                <div
                    class="bg-[#162033] flex gap-20 p-5 rounded-md lg:basis-2/3 hover:cursor-pointer border-2 border-transparent hover:border-[#1e293b]">
                    <div class="w-1/2">
                        <h1 class="text-[#fff] text-[20px] font-bold">Adding an API to an AdonisJS Web App</h1>
                        <div class="flex items-center gap-10 my-1 text-[#94a3b8] text-sm">
                            <h3><i class="fa-solid fa-graduation-cap"></i> 37 Lessons</h3>
                            <h3><i class="fa-solid fa-clock"></i> 4h 37m</h3>
                        </div>
                        <p class="text-[#94a3b8] text-sm lg:text-base mt-3">In this series, we'll ad a API, using Opaque
                            Access
                            Tokens for
                            authentication, to a preexisting web application. We well implement dual-guard
                            authentication,
                            add a token management panel, and authentication our API directly with an organization
                            model!
                        </p>
                    </div>
                    <div class="w-1/2 py-2 hidden lg:block">
                        <h4 class="text-[#94a3b8] uppercase font-semibold text-sm mb-3">latest form this series</h4>
                        <div class="flex items-center gap-5 text-[12px] text-[#94a3b8] mb-1">
                            <h5>Lesson 6.1</h5>


                            <span>.</span>
                            <h5>Aug 07</h5>
                        </div>
                        <h4 class="capitalize font-bold text-[#fff] text-sm mb-3">Advanced String filtering</h4>
                        <div class="flex items-center gap-5 text-[12px] text-[#94a3b8] mb-1">
                            <h5>Lesson 6.0</h5>
                            <span>.</span>
                            <h5>Aug 05</h5>
                        </div>
                        <h4 class="capitalize font-bold text-[#fff] text-sm mb-3">Basic course search & filter</h4>
                        <div class="flex items-center gap-5 text-[12px] text-[#94a3b8] mb-1">
                            <h5>Lesson 5.9</h5>
                            <span>.</span>
                            <h5>Jul 31</h5>
                        </div>
                        <h4 class="capitalize font-bold text-[#fff] text-sm mb-3">Getting a Module's Lessons</h4>
                    </div>
                </div>
                <div
                    class="bg-[#162033] lg:basis-1/3 p-5 my-5 lg:my-0 rounded-md lg:min-h-[300px] hover:cursor-pointer border-2 border-transparent hover:border-[#1e293b]">
                    <h4 class="text-[#fff] text-[20px] font-bold">AdonisJS Quick tip</h4>
                    <div class="flex items-center gap-5 my-1 text-[#94a3b8] text-sm">
                        <h3><i class="fa-solid fa-graduation-cap"></i> 23 Lessons</h3>
                        <h3><i class="fa-solid fa-clock"></i> 2h 43m</h3>
                    </div>
                    <p class="text-[#94a3b8] text-sm lg:text-base mt-3">Quick tips, lessons, and screencasts covering
                        specific
                        topics on AdonisJS.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- topics area -->

    <section class="container mx-auto px-6 py-8">
        <div class="bg-[rgba(255,255,255,0.02)] rounded-xl p-6">
            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
                <!-- left: filter chips -->
                <div class="flex-1 min-w-0">
                    <div class="mb-3">
                        <p class="text-sm font-medium text-muted">Filter by topic</p>
                    </div>

                    <div>
                        <ul id="filter-chips" class="flex flex-wrap gap-3">
                            <li>
                                <a href="#"
                                    class="bg-[#3730a3] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]"
                                    aria-current="true">
                                    All Series Topics
                                </a>
                            </li>

                            <li>
                                <a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">AdonisJS</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">AlpineJS</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">Authentication</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">Authorization</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">Components</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">EdgeJS</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">HttpContext</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">InertiaJS</a>
                            </li>

                            <!-- second row -->
                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">JavaScript</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">Lucid</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">Nuxt</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">Services</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">Tips</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">Validator</a>
                            </li>

                            <li><a href="#"
                                    class="bg-[#1e293b] chip inline-flex items-center px-4 py-2 rounded-lg text-[15px] font-medium
                                 hover:bg-[#334155] text-[#ffff]">VueJS</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- right: sort area -->
                <div class="shrink-0 w-full sm:w-auto flex items-start sm:items-center gap-3">
                    <div class="hidden sm:block">
                        <p class="text-sm text-muted mb-1">Sort by</p>
                    </div>

                    <div class="relative">
                        <select aria-label="Sort posts"
                            class="appearance-none rounded-md px-3 py-2 text-sm font-medium bg-[rgba(255,255,255,0.02)]
                           border border-[rgba(255,255,255,0.04)] pr-8 focus:outline-none focus:ring-2 focus:ring-white/10">
                            <option>Latest</option>
                            <option>Most popular</option>
                            <option>Oldest</option>
                        </select>

                        <!-- caret icon -->
                        <svg class="pointer-events-none absolute right-2 top-1/2 -translate-y-1/2 w-4 h-4 text-muted"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="px-3 lg:px-5 py-10">
            <div class="md:flex items-stretch justify-between gap-8 gap-x-8">
                <div
                    class="bg-[#162033] lg:basis-1/2 flex gap-5 p-5 rounded-md hover:cursor-pointer border-2 border-transparent hover:border-[#1e293b]">
                    <div class="">
                        <h1 class="text-[#fff] text-3xl font-bold">Adding an API to an AdonisJS Web App</h1>
                        <div class="flex items-center gap-10 my-1 text-[#94a3b8] text-sm mt-2">
                            <h3><i class="fa-solid fa-graduation-cap"></i> 37 Lessons</h3>
                            <h3><i class="fa-solid fa-clock"></i> 4h 37m</h3>
                        </div>
                        <p class="text-[#94a3b8] text-[14px] mt-4 leading-7 text-justify">In this series, we'll ad a
                            API, using
                            Opaque
                            Access
                            Tokens for
                            authentication, to a preexisting web application. We well implement dual-guard
                            authentication,
                            add a token management panel, and authentication our API directly with an organization
                            model!
                        </p>
                    </div>
                </div>
                <div
                    class="bg-[#162033] lg:basis-1/2 p-5 my-5 lg:my-0 rounded-md lg:min-h-[300px] hover:cursor-pointer border-2 border-transparent hover:border-[#1e293b]">
                    <h4 class="text-[#fff] text-3xl font-bold">AdonisJS Quick tip</h4>
                    <div class="flex items-center gap-10 my-1 text-[#94a3b8] text-sm mt-2">
                        <h3><i class="fa-solid fa-graduation-cap"></i> 23 Lessons</h3>
                        <h3><i class="fa-solid fa-clock"></i> 2h 43m</h3>
                    </div>
                    <p class="text-[#94a3b8] text-[14px] mt-4 leading-7 text-justify">Quick tips, lessons, and
                        screencasts covering
                        specific
                        topics on AdonisJS.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer area -->

    <footer class="container mx-auto px-3 lg:px-5 pt-10 pb-3">
        <div class="flex items-center justify-between gap-5 text-[#94A3B8]">
            <div>
                <h1 class="text-[#CBD5E1] uppercase text-xl font-semibold mb-2">Content</h1>
                <ul class="hover:cursor-pointer py-1 space-y-3">
                    <li class="hover:text-[#fff]"><a href="#">Series</a></li>
                    <li class="hover:text-[#fff]"><a href="#">Topics</a></li>
                    <li class="hover:text-[#fff]"><a href="#">Lessons</a></li>
                    <li class="hover:text-[#fff]"><a href="#">Livestreams</a></li>
                </ul>
            </div>
            <div>
                <ul class="hover:cursor-pointer py-1 space-y-3">
                    <li class="hover:text-[#fff]"><a href="#">Blog</a></li>
                    <li class="hover:text-[#fff]"><a href="#">Snippets</a></li>
                    <li class="hover:text-[#fff]"><a href="#">Schedule</a></li>
                    <li class="hover:text-[#fff]"><a href="#">Requests</a></li>
                </ul>
            </div>
            <div>
                <h1 class="text-[#CBD5E1] uppercase text-xl font-semibold mb-2">Company</h1>
                <ul class="hover:cursor-pointer py-1 space-y-3">
                    <li class="hover:text-[#fff]"><a href="#">Credits</a></li>
                    <li class="hover:text-[#fff]"><a href="#">Contact Us</a></li>
                    <li class="hover:text-[#fff]"><a href="#">Pricing</a></li>
                    <li class="hover:text-[#fff]"><a href="#">Sitemap</a></li>
                </ul>
            </div>
            <div>
                <h1 class="text-[#CBD5E1] uppercase text-xl font-semibold mb-2">Legal</h1>
                <ul class="hover:cursor-pointer py-1 space-y-3">
                    <li class="hover:text-[#fff]"><a href="#">Cookies</a></li>
                    <li class="hover:text-[#fff]"><a href="#">Privacy</a></li>
                    <li class="hover:text-[#fff]"><a href="#">Terms</a></li>
                    <li class="hover:text-[#fff]"><a href="#">Guidelines</a></li>
                </ul>
            </div>

            <div class="mb-10">
                <p class="text-[#CBD5E1] uppercase text-[18px] font-semibold mb-1">Subscribe to our newsletter</p>
                <p class="text-[#94A3B8] text-[17px]">To get a monthly roundup of our latest lessons.</p>
                <div class="py-3">
                    <input type="text" name="email" placeholder="Email Address"
                        class="w-[63%] rounded-md text-[#E3E3E3] py-[13px] px-2 bg-[#0F172A]
                        border border-[#1E293B] focus:border-[#4F46E5] outline-none">

                    <button class="text-white bg-[#634DBA] py-[13px] px-5 rounded-md">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="lg:flex items-center justify-between pt-3">
            <div class="text-black shrink-0">
                <img src="./img//adocasts-plus-white-40.png" alt="" class="filter invert w-32">
            </div>
            <div class="text-black">
                <p>© 2025 Adocasts. All Rights Reserved.</p>
            </div>
            <div class="text-black text-xl flex gap-5">
                <i class="fa-brands fa-github"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-skype"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-solid fa-wifi"></i>
            </div>
        </div>
    </footer>

    <section class="bg-[#0A0F1C] text-[#B0B8C5] border-t border-[#1E293B]">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between py-4 px-6">

            <!-- Left Logo -->
            <div class="flex items-center">
                <img src="{{ asset('images/adocasts-plus-white-40.png') }}" alt="AdCasts Logo" class="h-6">
            </div>

            <!-- Center Text -->
            <div class="text-sm text-center my-2 md:my-0">
                © 2025 Adocasts. All Rights Reserved.
            </div>

            <!-- Right Social Icons -->
            <div class="flex items-center space-x-4 text-[#A0AEC0]">
                <a href="#" class="hover:text-white"><i class="fab fa-github"></i></a>
                <a href="#" class="hover:text-white"><i class="fab fa-youtube"></i></a>
                <a href="#" class="hover:text-white"><i class="fas fa-butterfly"></i></a>
                <a href="#" class="hover:text-white"><i class="fab fa-twitter"></i></a>
                <a href="#" class="hover:text-white"><i class="fas fa-rss"></i></a>
            </div>
        </div>
    </section>

</body>

</html>
