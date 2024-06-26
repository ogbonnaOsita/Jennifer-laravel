@extends('layouts.master')

@section('content')
    <!-- Stories Section -->
    <main class="flex-grow">
        <section class="hero text-gray-600 body-font">
            <div class="container mx-auto px-5 py-10 lg:py-24">
                <h1 class="uppercase text-2xl md:text-4xl mb-5 text-secondaryColor">
                    Latest <strong>Stories</strong>
                </h1>
                <div class="container py-4 mx-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-16">
                        @foreach ($stories as $story)
                        <div class="h-full flex flex-col items-center bg-white p-4 rounded-lg border">
                            <div class="relative overflow-hidden rounded-lg w-full h-64">
                                <img alt="team"
                                    class="absolute inset-0 w-full h-full object-cover object-center transition-transform duration-300 transform hover:scale-125"
                                    src="{{asset('storage/'.$story->image)}}" />
                            </div>
                            <div class="w-full">
                                <a href="{{$story->url}}"
                                    class="font-medium text-sm text-secondaryColor hover:text-accentColor transition-colors">
                                    {{$story->title}}
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div>
                        {{$stories->links('customPagination.custom')}}
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
