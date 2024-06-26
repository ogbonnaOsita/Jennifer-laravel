<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                container: {
                    screens: {
                        sm: "640px",
                        md: "768px",
                        lg: "1024px",
                        xl: "1280px",
                        // "2xl": "1536px",
                    },
                },
                extend: {
                    colors: {
                        primaryColor: "#2a2454",
                        secondaryColor: "#333333",
                        tertiaryColor: "#d9d9d9",
                        accentColor: "#e01b1b",
                        primaryDark: "#1f1944",
                        tertiaryDark: "#a8a8a8",
                    },
                },
            },
        };
    </script>
    <title>Jennifer Ugwa</title>
</head>

<body class="min-h-screen flex flex-col">
    <!-- Preloader -->
    <div id="preloader" class="preloader bg-white bg-opacity-75">
        <div class="spinner"></div>
    </div>

    <!-- Nav Section -->
    @include('layouts.navigation')

    @yield('content')

    <footer>
        <div class="bg-primaryColor text-white">
            <div class="container mx-auto py-8 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="white text-sm text-center sm:text-left">
                    © <span id="current-year"></span> Jennifer Ugwa. All rights reserved.
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a href="{{$socials->facebook}}" target="_blank" class="white">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="social-link w-5 h-5 cursor-pointer" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a href="{{$socials->twitter}}" target="_blank" class="white ml-3">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="social-link w-5 h-5 cursor-pointer" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a href="{{$socials->instagram}}" target="_blank" class="white ml-3">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="social-link-outline w-5 h-5 cursor-pointer" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a href="{{$socials->linkedin}}" target="_blank" class="white ml-3">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="social-link w-5 h-5 cursor-pointer" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer>

    <!-- Footer section -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
