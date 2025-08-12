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

    <!-- lesson area -->
    <section class="lesson_area bg-[#0f172a]">
        <div class="container mx-auto px-3 lg:px-5 py-10">
            <h1 class="text-2xl md:text-3xl xl:text-4xl font-heading font-black tracking-tight text-white">Lessons.
            </h1>
            <div class="lg:flex items-center justify-between">
                <h3 class="text-xl font-heading font-black text-[#818cf8] ">Here's What's New</h3>
                <h3
                    class="relative text-[#94a3b8] text-sm font-semibold inline-block
                            after:block after:absolute after:bottom-0 after:left-1/2 after:w-0 after:h-[2px] after:bg-[#94a3b8]
                            after:transition-all after:duration-300 after:-translate-x-1/2
                            hover:after:w-full cursor-pointer">
                    Browse All Lessons <i class="fa-solid fa-arrow-right"></i>
                </h3>
            </div>

            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 py-3">
                <div class="group">
                    <div class="rounded-lg">
                        <!-- Image -->
                        <img src="{{ asset('images/l8ki0nmyn1hzq2abxgsr2dor.jpg') }}" alt="lesson thumbnail"
                            class="rounded-lg w-full transform transition-transform duration-500 group-hover:scale-105">
                    </div>

                    <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                        <p>Adding an Api to...</p>
                        <div class="flex gap-3">
                            <h3>#6.4</h3>
                            <h3>.</h3>
                            <h3>Aug 07</h3>
                        </div>
                    </div>

                    <a href="" class="text-[#F0F4F8] text-ml font-bold">Advanced String Filtering</a>
                    <p class="text-[#94a3b8] text-xs">
                        In this lesson, we upgrade our course name filter to support both
                        simple strings and advanced object-based queries using VineJS’ union rule.
                        This allows users to specify not just what to search for, but how to search for it.
                    </p>
                </div>

                <div class="group">
                    <div class="rounded-lg">
                        <img src="{{ asset('images/ygf96wnzf4jqhqzakllfr839.jpg') }}" alt="advanced"
                            class="rounded-lg w-full transform transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                        <p>Adding an Api to...</p>
                        <div class="flex gap-3">
                            <h3>#6.0</h3>
                            <h3>.</h3>
                            <h3>Aug 05</h3>
                        </div>
                    </div>
                    <h1 class="text-[#F0F4F8] text-ml font-bold">Basic Course Search & Filter</h1>
                    <p class="text-[#94a3b8] text-xs">In this lesson, we'll add a new search endpoint for our
                        courses
                        and enable some basic filter functionality along with it. We'll be able to search by course
                        name
                        likeness, status, difficulty, and/or access level.</p>
                </div>
                <div class="group">
                    <div class="rounded-lg">
                        <img src="{{ asset('images/tj98r5eavtlofjbycssde4l5.jpg') }}" alt="advanced"
                            class="rounded-lg w-full transform transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                        <p>Adding an Api to...</p>
                        <div class="flex gap-3">
                            <h3>#5.9</h3>
                            <h3>.</h3>
                            <h3>Jul 31</h3>
                        </div>
                    </div>
                    <h1 class="text-[#F0F4F8] text-ml font-bold">Getting A Module's Lessons</h1>
                    <p class="text-[#94a3b8] text-xs">In this lesson, we'll remove our lesson's index method in
                        favor
                        of
                        a module method whose purpose will be to fetch a module's specific lessons in their stored
                        order.</p>
                </div>
                <div class="group">
                    <div class="rounded-lg">
                        <img src="{{ asset('images/prsaa7xekw3w4bkda4t9af9d.jpg') }}" alt="advanced" class="rounded-lg">
                    </div>
                    <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                        <p>Adding an Api to...</p>
                        <div class="flex gap-3">
                            <h3>#5.8</h3>
                            <h3>.</h3>
                            <h3>Jul 25</h3>
                        </div>
                    </div>
                    <h1 class="text-[#F0F4F8] text-ml font-bold">Lesson Operations</h1>
                    <p class="text-[#94a3b8] text-xs">In this lesson, we'll implement most of the CRUD
                        functionality
                        for
                        our lessons, including creating, updating, deleting, and patching our lesson's tags. We'll
                        also
                        discuss why we'll treat lessons as a top-level resource.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Block 1 -->
                <div class="md:flex md:gap-4 rounded-lg group cursor-pointer">
                    <img src="{{ asset('images/s0ugloteg5w4f8jzstwm0k7s.jpg') }}" alt="lesson"
                        class="md:w-62 md:h-33 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="space-y-2">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an Ado...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.7</span>
                                <span>.</span>
                                <span>Jul 25</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-ml font-bold">Fixing Our ESLint Integration</h1>
                        <p class="text-[#94a3b8] text-xs">I ran into a ReferenceError and realized our ESLint
                            wasn't
                            working. In this lesson, we'll take a brief aside to fix the linting within our project
                            so
                            it works with ESLint v9.
                        </p>
                    </div>
                </div>
                <!-- Block 2 -->
                <div class="md:flex md:gap-4 rounded-lg group cursor-pointer">
                    <img src="{{ asset('images/p5zhmeapntdknkhqu9qqa042.jpg') }}" alt="lesson"
                        class="md:w-62 md:h-33 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="space-y-2">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an Ado...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.6</span>
                                <span>.</span>
                                <span>Jul 23</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-ml font-bold">Getting Just Course Modules & Lessons</h1>
                        <p class="text-[#94a3b8] text-xs">
                            In this lesson, we'll remove our GET module route, using the except method on our
                            resource.
                            Then we'll
                            refactor to add a GetModules action.
                        </p>
                    </div>
                </div>
                <!-- Block 3 -->
                <div class="md:flex md:gap-4 rounded-lg group cursor-pointer">
                    <img src="{{ asset('images/rwo8i5iq2m399m8k81zlkp13.jpg') }}" alt="lesson"
                        class="md:w-62 md:h-33 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="space-y-2">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an Ado...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.5</span>
                                <span>.</span>
                                <span>Jul 15</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-ml font-bold">Course Module Nested Resource</h1>
                        <p class="text-[#94a3b8] text-xs">In this lesson, we'll work on nested resourceful
                            endpoints
                            for
                            our course modules. We'll add endpoints to create, update, patch, and deleting modules
                            from
                            a specific course.
                        </p>
                    </div>
                </div>
                <!-- Block 4 -->
                <div class="md:flex md:gap-4 rounded-lg group cursor-pointer">
                    <img src="{{ asset('images/rwo8i5iq2m399m8k81zlkp13.jpg') }}" alt="lesson"
                        class="md:w-62 md:h-33 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="space-y-2">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an Ado...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.5</span>
                                <span>.</span>
                                <span>Jul 15</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-ml font-bold">Course Module Nested Resource</h1>
                        <p class="text-[#94a3b8] text-xs">In this lesson, we'll work on nested resourceful
                            endpoints
                            for
                            our course modules. We'll add endpoints to create, update, patch, and deleting modules
                            from
                            a specific course.
                        </p>
                    </div>
                </div>
                <!-- Block 5 -->
                <div class="md:flex md:gap-4 rounded-lg group cursor-pointer">
                    <img src="{{ asset('images/drfexpqsk3n2pc4dbnzb17lr.jpg') }}" alt="lesson"
                        class="md:w-62 md:h-33 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="space-y-2">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an Ado...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.4</span>
                                <span>.</span>
                                <span>Jul 15</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-ml font-bold">Updating A Course's Difficulty, Status, or
                            Access
                            Level</h1>
                        <p class="text-[#94a3b8] text-xs">
                            In this lesson, we'll add a specific endpoint with the ability to patch a course's
                            difficulty, status,
                            or access level with a new value so our users have a way to update these without needing
                            to
                            send the
                            entire course payload.
                        </p>
                    </div>
                </div>
                <!-- Block 6 -->
                <div class="md:flex md:gap-4 rounded-lg group cursor-pointer">
                    <img src="{{ asset('images/s7fxhq0ipnjtuxhwt60mxlx5.jpg') }}" alt="lesson"
                        class="md:w-62 md:h-33 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="space-y-2">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an Ado...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.3</span>
                                <span>.</span>
                                <span>Jul 15</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-ml font-bold">Getting A Course's Details, Modules & Lessons
                        </h1>
                        <p class="text-[#94a3b8] text-xs">In this lesson, we wrap up the Courses controller by
                            adding a
                            show method that fetches all the key info for a single course. That includes its modules
                            and
                            lessons, all nicely organized and ready to use in your API response.</p>
                    </div>
                </div>
                <!-- Block 7 -->
                <div class="md:flex md:gap-4 rounded-lg group cursor-pointer">
                    <img src="{{ asset('images/ew1gbtzn09w7d2nshez1cy09.jpg') }}" alt="lesson"
                        class="md:w-62 md:h-33 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="space-y-2">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an Ado...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.2</span>
                                <span>.</span>
                                <span>Jun 27</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-ml font-bold">Paginating our Course List</h1>
                        <p class="text-[#94a3b8] text-xs">In this lesson, we'll transform our courses list endpoint
                            into
                            a pagination endpoint. We'll check and validate our query string for a page and per page
                            parameter that we'll then use to fetch pages of our courses.</p>
                    </div>
                </div>
                <!-- Block 9 -->
                <div class="rounded-lg md:flex md:gap-4 group cursor-pointer">
                    <img src="{{ asset('images/g7jwq9gct4us0z20wcens2rn.jpg') }}" alt="lesson"
                        class="md:w-62 md:h-33 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="space-y-2 mt-4 md:mt-0">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an AdonisJS</p>
                            <div class="flex items-center gap-2">
                                <span>#5.1</span>
                                <span>.</span>
                                <span>Jun 27</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-ml font-bold">Creating, Updating, and Deleting</h1>
                        <p class="text-[#94a3b8] text-xs">
                            In this lesson, we'll add endpoints to allow creating,
                            updating, and deleting courses from our API. We'll then use this to stub a number of
                            test
                            courses to give us wiggle room to play with our pagination.
                        </p>
                    </div>
                </div>
                <!-- Block 10 -->
                <div class="rounded-lg md:flex md:gap-4 group cursor-pointer">
                    <img src="{{ asset('images/hw2k2cijxxlnfmukrfm5ky8h.jpg') }}" alt="lesson"
                        class="md:w-62 md:h-33 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="space-y-2 mt-4 md:mt-0">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.0</span>
                                <span>.</span>
                                <span>Jun 27</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-ml font-bold">Listing Courses</h1>
                        <p class="text-[#94a3b8] text-xs">
                            Our goal in this step is to add an endpoint that lists our
                            courses. We'll then build upon this endpoint further with the ultimate goal of getting a
                            list of paginated courses.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- series area -->
    <!-- topics area -->

    <section class="container mx-auto px-6 py-8">
        <div class="bg-[rgba(255,255,255,0.02)] rounded-xl py-6">
            <div class="flex flex-col lg:flex-row lg:items-start lg:justify-between gap-4">
                <!-- left: filter chips -->
                <div class="flex-1 min-w-0">
                    <div class="mb-3">
                        <p class="text-sm font-medium text-muted text-[#fff]">Filter by topic</p>
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
        <h1 class="text-2xl md:text-3xl xl:text-4xl font-heading font-black tracking-tight text-white my-6">
            Lessons.
        </h1>
        <div class="grid grid-cols-1 lg:grid-cols-[3fr_1fr] gap-8">
            <div class="space-y-[20px]">
                <!-- Block 1 -->
                <div class="md:flex md:gap-4 rounded-lg group cursor-pointer">
                    <img src="{{ asset('images/s0ugloteg5w4f8jzstwm0k7s.jpg') }}" alt="lesson"
                        class="md:w-80 md:h-45 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="flex flex-col justify-center space-y-2">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an Ado...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.7</span>
                                <span>.</span>
                                <span>Jul 25</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-xl font-bold">Fixing Our ESLint Integration</h1>
                        <p class="text-[#94a3b8] text-[15px]">I ran into a ReferenceError and realized our ESLint
                            wasn't
                            working. In this lesson, we'll take a brief aside to fix the linting within our project
                            so
                            it works with ESLint v9.
                        </p>
                    </div>
                </div>
                <!-- Block 2 -->
                <div class="md:flex md:gap-4 rounded-lg group cursor-pointer">
                    <img src="{{ asset('images/p5zhmeapntdknkhqu9qqa042.jpg') }}" alt="lesson"
                        class="md:w-80 md:h-45 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="flex flex-col justify-center space-y-2">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an Ado...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.6</span>
                                <span>.</span>
                                <span>Jul 23</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-xl font-bold">Getting Just Course Modules & Lessons</h1>
                        <p class="text-[#94a3b8] text-[15px]">
                            In this lesson, we'll remove our GET module route, using the except method on our
                            resource.
                            Then we'll
                            refactor to add a GetModules action.
                        </p>
                    </div>
                </div>
                <!-- Block 3 -->
                <div class="md:flex md:gap-4 rounded-lg group cursor-pointer">
                    <img src="{{ asset('images/rwo8i5iq2m399m8k81zlkp13.jpg') }}" alt="lesson"
                        class="md:w-80 md:h-45 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="flex flex-col justify-center space-y-2">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an Ado...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.5</span>
                                <span>.</span>
                                <span>Jul 15</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-xl font-bold">Course Module Nested Resource</h1>
                        <p class="text-[#94a3b8] text-[15px]">In this lesson, we'll work on nested resourceful
                            endpoints
                            for
                            our course modules. We'll add endpoints to create, update, patch, and deleting modules
                            from
                            a specific course.
                        </p>
                    </div>
                </div>
                <!-- Block 4 -->
                <div class="md:flex md:gap-4 rounded-lg group cursor-pointer">
                    <img src="{{ asset('images/rwo8i5iq2m399m8k81zlkp13.jpg') }}" alt="lesson"
                        class="md:w-80 md:h-45 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="flex flex-col justify-center space-y-2">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an Ado...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.5</span>
                                <span>.</span>
                                <span>Jul 15</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-xl font-bold">Course Module Nested Resource</h1>
                        <p class="text-[#94a3b8] text-[15px]">In this lesson, we'll work on nested resourceful
                            endpoints
                            for
                            our course modules. We'll add endpoints to create, update, patch, and deleting modules
                            from
                            a specific course.
                        </p>
                    </div>
                </div>
                <!-- Block 5 -->
                <div class="md:flex md:gap-4 rounded-lg group cursor-pointer">
                    <img src="{{ asset('images/drfexpqsk3n2pc4dbnzb17lr.jpg') }}" alt="lesson"
                        class="md:w-80 md:h-45 w-full object-cover rounded-md flex-shrink-0 transform transition-transform duration-500 group-hover:scale-105">
                    <div class="flex flex-col justify-center space-y-2">
                        <div class="flex items-center justify-between gap-3 py-1 text-[#818cf8] text-xs">
                            <p>Adding an Api to an Ado...</p>
                            <div class="flex items-center gap-2">
                                <span>#5.4</span>
                                <span>.</span>
                                <span>Jul 15</span>
                            </div>
                        </div>
                        <h1 class="text-[#F0F4F8] text-xl font-bold">Updating A Course's Difficulty, Status, or
                            Access
                            Level</h1>
                        <p class="text-[#94a3b8] text-[15px]">
                            In this lesson, we'll add a specific endpoint with the ability to patch a course's
                            difficulty, status,
                            or access level with a new value so our users have a way to update these without needing
                            to
                            send the
                            entire course payload.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-2xl text-white">ddddddd</div>
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
