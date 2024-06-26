@extends('layouts.master')

@section('content')
    <!-- Appearances section -->
    <section id="appearances" class="hero text-secondaryColor bg-[#fcfcfc]">
        <div class="container px-5 py-16 md:py-16 mx-auto">
            <div class="flex justify-between items-center mb-10">
                <div class="">
                    <h1 class="text-2xl md:text-3xl text-primaryColor uppercase title-font mb-2 text-gray-900">
                        Appearances
                    </h1>
                </div>
            </div>
            <div class="flex flex-wrap gap-3 px-3 md:px-0">
                @foreach ($appearances as $appearance)
                <div class="p-4 w-full bg-white border rounded-lg">
                    <div
                        class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                        <div class="w-full lg:w-1/3">
                            <iframe height="280"
                                class="flex-shrink-0 rounded-lg w-full object-cover object-center sm:mb-0 mb-4"
                                src="{{$appearance->video_url}}"
                                title="{{$appearance->title}}" frameborder="0"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                        <div class="w-full lg:w-2/3 sm:pl-8">
                            <h2 class="title-font font-medium text-lg text-gray-900">
                                {{$appearance->title}}
                            </h2>
                            <h3 class="text-gray-500 mb-3">July 19, 2024</h3>
                            <p class="mb-4 appearance-description">
                                {{$appearance->description}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div>
                {{$appearances->links('customPagination.custom')}}
            </div>
        </div>
    </section>
@endsection
