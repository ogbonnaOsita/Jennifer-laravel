@extends('layouts.master')

@section('content')
    <!-- Appearance Section -->
    <main class="flex-grow">
        <section class="hero text-gray-600 body-font">
            <div class="container mx-auto px-5 py-10 lg:py-16">
                <h1 class="uppercase text-2xl md:text-4xl mb-5 md:mb-10 text-secondaryColor">
                    Fellowships, grants & Awards
                </h1>
                <section class="text-gray-600 body-font">
                    <div class="container mx-auto">
                        <div class="flex flex-wrap -m-2">
                            @foreach ($awards as $award)
                            <div class="p-2 md:w-1/2 w-full">
                                <div class="h-full flex flex-col justify-between border-gray-200 border rounded-lg">
                                    <div class="flex items-center p-4">
                                        <div class="flex-grow">
                                            <h2 class="text-gray-900 title-font font-medium">
                                                {{$award->title}}
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="flex justify-between rounded-b-lg px-2 py-1 bg-primaryColor text-white">
                                        <p class="inline-flex ml-3">{{$award->award_category->title}}</p>
                                        <p class="inline-flex ml-auto mr-3 italic">-{{date('Y', strtotime($award->year_recieved))}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <div>
                    {{$awards->links('customPagination.custom')}}
                </div>
            </div>
        </section>
    </main>
@endsection
