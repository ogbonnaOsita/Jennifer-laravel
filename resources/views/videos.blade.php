@extends('layouts.master')

@section('content')
    <!-- Short videos section -->
    <section id="short-videos" class="hero text-gray-600 body-font">
        <div class="container px-5 py-16 mx-auto">
            <div class="mb-5 md:mb-8">
                <h1 class="text-2xl md:text-3xl text-primaryColor uppercase title-font mb-2 text-gray-900">
                    Short <strong>Videos</strong>
                </h1>
            </div>
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($videos as $video)
                <div class="p-4">
                    <div class="h-full flex flex-col items-center text-sm overflow-hidden">
                        <iframe class="w-full rounded-lg h-56 object-cover object-center"
                            src="{{$video->video_url}}" title="{{$video->title}}"
                            frameborder="0" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        <div class="mt-2">
                            <p class="text-gray-600 mb-4">
                                {{$video->title}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div>
                {{$videos->links('customPagination.custom')}}
            </div>
        </div>
    </section>
@endsection
