@extends('layouts.master')

@section('content')
    <!-- About Section -->
    <main class="flex-grow">
        <section class="hero text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-10 lg:py-16 lg:flex-row flex-col items-center">
                <div
                    class="lg:flex-grow lg:w-1/2 lg:pr-24 lg:pr-16 flex flex-col lg:items-start text-justify mb-16 lg:mb-0 items-center">
                    <h1 class="uppercase text-2xl md:text-4xl mb-5 text-secondaryColor">
                        About <strong>Jennifer Ugwa</strong>
                    </h1>
                    <p class="mb-8 leading-relaxed">
                        {{$about->content}}
                    </p>
                </div>
                <div class="lg:max-w-lg lg:w-full lg:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded rounded-lg" alt="hero" src="{{$about !== null ? asset('storage/'.$about->image) : "https://dummyimage.com/720x600"}}" />
                </div>
            </div>
        </section>
    </main>
@endsection
