<header id="navbar" class="sticky top-0 z-50 transition-shadow duration-300 text-gray-600 body-font bg-white">

    <div class="container mx-auto flex justify-between items-center px-3 py-5 lg:py-3">
        <a href="{{route('index-page')}}" class="flex title-font font-medium items-center text-gray-900 cursor-pointer">
            <div class="h-6 w-6 bg-primaryColor"></div>
            <span class="ml-1 mr-2 md:mr-0 md:text-xl text-base uppercase">Jennifer Ugwa</span>
        </a>
        <div class="hidden lg:flex lg:flex-row lg:ml-auto">
            <nav class="flex flex-wrap items-center text-sm justify-center">
                <a href="{{route('index-page')}}" class="mr-5 hover:text-primaryColor cursor-pointer nav-link nav-link-fade-up">Home</a>
                <a href="{{route('about-page')}}" class="mr-5 hover:text-primaryColor cursor-pointer nav-link nav-link-fade-up">About Me</a>
                <a href="{{route('awards-page')}}"
                    class="mr-5 hover:text-primaryColor cursor-pointer nav-link nav-link-fade-up">Grants/Fellowships/Awards</a>
            </nav>
        </div>
        <div class="flex items-center gap-3 md:gap-6">
            <a href="{{route('contact-page')}}"
                class="bg-primaryColor text-white text-sm border-0 py-2 px-5 focus:outline-none hover:bg-primaryDark transition-colors rounded text-base">Contact
                Me</a>
            <ion-icon onclick="onToggleMenu(this)" name="menu"
                class="menuButton text-3xl cursor-pointer lg:hidden"></ion-icon>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div id="menu"
        class="fixed inset-y-0 right-0 bg-primaryColor text-white w-72 transform translate-x-full transition-transform duration-300 z-50">
        <nav class="py-4">
            <svg id="closeIcon" class="w-8 h-8 menuButton ml-2 mb-2" fill="none" stroke="currentColor"
                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
            <a href="{{route('index-page')}}" class="block py-4 px-3 hover:bg-primaryDark ">Home</a>
            <a href="{{route('about-page')}}" class="block py-4 px-3 hover:bg-primaryDark ">About Me</a>
            <a href="{{route('awards-page')}}" class="block py-4 px-3 hover:bg-primaryDark ">Grants/Fellowships/Awards</a>
        </nav>
    </div>
</header>

