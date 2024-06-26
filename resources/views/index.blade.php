@extends('layouts.master')

@section('content')
    <!-- Hero Section -->
    <section class="hero text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-10 md:py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h2>Hi, I'm</h2>
                <h1 class="title-font sm:text-4xl md:text-5xl text-3xl mb-4 font-bold text-gray-900">
                    Jennifer Ugwa
                </h1>

                <p class="mb-8 leading-relaxed">
                    An Independent Journalist and media trainer reporting on gender,
                    environment, health, and socio-economic issues. I am passionate
                    about writing features and narrative pieces that spotlight systemic
                    issues and underserved groups.
                </p>

                <div class="flex w-full md:justify-start justify-center items-end gap-3">
                    <a href="{{ route('about-page') }}"
                        class="inline-flex text-white bg-primaryColor border-0 py-2 px-6 focus:outline-none hover:bg-primaryDark transition-colors rounded text-lg">Read
                        More</a>
                    <a href="{{ route('contact-page') }}"
                        class="inline-flex text-secondaryColor bg-tertiaryColor border-0 py-2 px-6 focus:outline-none hover:bg-tertiaryDark hover:text-black transition-colors rounded text-lg">
                        Contact Me
                    </a>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero"
                    src="{{ $about !== null ? asset('storage/' . $about->image) : 'https://dummyimage.com/720x600' }}" />
            </div>
        </div>
    </section>

    <!-- Latest Stories Section -->
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-10">
                <h1 class="text-2xl md:text-3xl text-primaryColor font-bold title-font mb-2 text-gray-900">
                    Latest Stories
                </h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                @foreach ($stories as $story)
                    <div class="h-full flex flex-col items-center">
                        <div class="relative overflow-hidden rounded-lg w-full h-64">
                            <img alt="team"
                                class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-300 transform hover:scale-125"
                                src="{{ asset('storage/' . $story->image) }}" />
                        </div>
                        <div class="w-full">
                            <a href="{{ $story->url }}" target="_blank"
                                class="font-medium text-sm text-secondaryColor hover:text-accentColor transition-colors">
                                {{ $story->title }}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-center">
                <a href="{{ route('stories-page') }}"
                    class="inline-flex items-center bg-primaryColor text-white text-sm border-0 py-2 px-5 focus:outline-none hover:bg-primaryDark transition-colors rounded text-base mt-4 md:mt-0">
                    View More
                </a>
            </div>
        </div>
    </section>

    <!-- Short videos section -->
    <div class="container mx-auto px-4 py-8 overflow-hidden">
        <div class="flex justify-between items-center mb-10">
            <div class="flex-grow text-center">
                <h1 class="text-2xl md:text-3xl text-primaryColor font-bold title-font mb-2 text-gray-900">
                    Short Videos
                </h1>
            </div>
            <a href="{{ route('videos-page') }}"
                class="underline decoration-dotted underline-offset-4 text-secondaryColor italic hover:text-accentColor transition-colors">
                -View all
            </a>
        </div>

        <div class="container mx-auto pb-8">
            <div class="swiper relative">
                <div class="swiper-wrapper mb-5">
                    @foreach ($videos as $video)
                        <!-- Video Slides -->
                        <div class="swiper-slide">
                            <div class="image__wrapper iframe-container">
                                <iframe width="560" height="315" src="{{ $video->video_url }}"
                                    title="{{ $video->title }}" frameborder="0"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="swiper-pagination absolute bottom-0 flex justify-center"></div>

                <!-- Navigation buttons -->
                <div class="swiper-button-prev absolute left-4"></div>
                <div class="swiper-button-next absolute right-4"></div>
            </div>
        </div>
    </div>

    <!-- Appearances section -->
    <section class="text-secondaryColor bg-[#fcfcfc]">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex justify-between items-center mb-10">
                <div class="flex-grow text-center">
                    <h1 class="text-2xl md:text-3xl text-primaryColor font-bold title-font mb-2 text-gray-900">
                        Appearances
                    </h1>
                </div>
                <a href="{{ route('appearances-page') }}"
                    class="underline decoration-dotted underline-offset-4 text-secondaryColor italic hover:text-accentColor transition-colors">
                    -View all
                </a>
            </div>
            <div class="flex flex-wrap -m-4">
                @foreach ($appearances as $appearance)
                    <div class="p-4 w-full">
                        <div
                            class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                            <div class="w-full lg:w-1/3">
                                <iframe height="280"
                                    class="flex-shrink-0 rounded-lg w-full object-cover object-center sm:mb-0 mb-4"
                                    src="{{ $appearance->video_url }}" title="{{ $appearance->title }}" frameborder="0"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <div class="w-full lg:w-2/3 sm:pl-8">
                                <h2 class="title-font font-medium text-lg text-gray-900">
                                    {{ $appearance->title }}
                                </h2>
                                <h3 class="text-gray-500 mb-3"> {{ $appearance->created_at->format('d-M-Y') }} </h3>
                                <p class="mb-4 appearance-description">
                                    {{ $appearance->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact section -->
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="md:w-1/2 md:pr-12 md:py-8 md:border-b-0 pb-10 border-b border-gray-200">
                <h1 class="sm:text-3xl text-2xl font-bold title-font mb-2 text-gray-900">
                    Get In Touch
                </h1>
                <p class="leading-relaxed text-base">
                    I am here to help and answer any question you might have. I look forward to hearing from you.
                </p>
                <div class="flex justify-between lg:w-5/6">
                    <a class="inline-flex items-center mt-4">
                        <svg fill="secondaryColor" class="w-4 h-4 mr-2" viewBox="0 0 24 24">
                            <path
                                d="M20.8,3.2H3.2A2.4,2.4,0,0,0,.8,5.6V18.4A2.4,2.4,0,0,0,3.2,20.8H20.8a2.4,2.4,0,0,0,2.4-2.4V5.6A2.4,2.4,0,0,0,20.8,3.2ZM20.8,5.6,12,12.4,3.2,5.6ZM20.8,18.4H3.2V7.2l8.8,6.8,8.8-6.8Z">
                            </path>
                        </svg>
                        {{ $contact->email }}
                    </a>
                    <a class="inline-flex items-center mt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" class="w-5 h-5">
                            <path
                                d="M6.62 10.79a15.466 15.466 0 006.59 6.59l2.2-2.2a1.003 1.003 0 011.01-.24c1.12.37 2.33.57 3.58.57.55 0 1 .45 1 1v3.01a1 1 0 01-1 1c-9.39 0-17-7.61-17-17a1 1 0 011-1h3.01c.55 0 1 .45 1 1 0 1.26.2 2.47.57 3.58.14.36.05.78-.24 1.06l-2.2 2.2z">
                            </path>
                        </svg>

                        {{ $contact->phone_number }}
                    </a>
                </div>
                <div>
                    <span class="inline-flex sm:ml-auto mt-5 justify-center sm:justify-start">
                        <a href="{{ $socials->facebook }}" target="_blank"
                            class="text-secondaryColor border hover:border-accentColor transition-colors p-2 rounded-full border-secondaryColor cursor-pointer">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="social-link w-5 h-5" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                            </svg>
                        </a>
                        <a href="{{ $socials->twitter }}" target="_blank"
                            class="ml-3 text-secondaryColor border hover:border-accentColor transition-colors p-2 rounded-full border-secondaryColor cursor-pointer">
                            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                class="social-link w-5 h-5" viewBox="0 0 24 24">
                                <path
                                    d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                </path>
                            </svg>
                        </a>
                        <a href="{{ $socials->instagram }}" target="_blank"
                            class="ml-3 text-secondaryColor border hover:border-accentColor transition-colors p-2 rounded-full border-secondaryColor cursor-pointer">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="social-link-outline w-5 h-5" viewBox="0 0 24 24">
                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5">
                                </rect>
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                            </svg>
                        </a>
                        <a href="{{ $socials->linkedin }}" target="_blank"
                            class="ml-3 text-secondaryColor border hover:border-accentColor transition-colors p-2 rounded-full border-secondaryColor cursor-pointer">
                            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="0" class="social-link w-5 h-5"
                                viewBox="0 0 24 24">
                                <path stroke="none"
                                    d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                                </path>
                                <circle cx="4" cy="4" r="2" stroke="none"></circle>
                            </svg>
                        </a>
                    </span>
                </div>
            </div>
            <div class="md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:pb-8 mt-8 md:mt-0">
                @if (session('success'))
                    <div class="ml-auto shadow flex items-center justify-between p-5 leading-normal text-green-600 bg-green-100 rounded-lg"
                        role="alert">
                        <p>{{ session('success') }}</p>

                        <svg onclick="return this.parentNode.remove();"
                            class="inline w-4 h-4 fill-current ml-2 hover:opacity-80 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM359.5 133.7c-10.11-8.578-25.28-7.297-33.83 2.828L256 218.8L186.3 136.5C177.8 126.4 162.6 125.1 152.5 133.7C142.4 142.2 141.1 157.4 149.7 167.5L224.6 256l-74.88 88.5c-8.562 10.11-7.297 25.27 2.828 33.83C157 382.1 162.5 384 167.1 384c6.812 0 13.59-2.891 18.34-8.5L256 293.2l69.67 82.34C330.4 381.1 337.2 384 344 384c5.469 0 10.98-1.859 15.48-5.672c10.12-8.562 11.39-23.72 2.828-33.83L287.4 256l74.88-88.5C370.9 157.4 369.6 142.2 359.5 133.7z" />
                        </svg>
                    </div>
                @endif

                <form action="{{ route('contact.mail') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="input-data">
                            <input name="email" type="email" required class="outline-none">
                            <div class="underline"></div>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data">
                            <input name="name" type="text" required class="outline-none">
                            <div class="underline"></div>
                            <label for="name">Name</label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-data textarea">
                            <textarea name="message" rows="8" cols="80" required class="outline-none"></textarea>
                            <br />
                            <div class="underline"></div>
                            <label for="message">Write your message</label>
                            <br />
                            <button
                                class="w-full text-white bg-primaryColor border-0 py-2 px-6 focus:outline-none hover:bg-primaryDark rounded text-lg">
                                Submit
                            </button>
                </form>

            </div>
        </div>
    </section>
@endsection
