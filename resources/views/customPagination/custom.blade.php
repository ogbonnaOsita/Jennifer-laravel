@if ($paginator->hasPages())
    <div class="flex justify-between items-center mt-10">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="inline-flex text-secondaryColor bg-tertiaryColor border-0 py-2 px-6 focus:outline-none hover:bg-primaryColor hover:text-white transition-colors duration-300 rounded text-lg invisible">
                Previous
            </button>
        @else
            <button class="inline-flex text-secondaryColor bg-tertiaryColor border-0 py-2 px-6 focus:outline-none hover:bg-primaryColor hover:text-white transition-colors duration-300 rounded text-lg"
                onclick="window.location='{{ $paginator->previousPageUrl() }}'">
                Previous
            </button>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <button class="inline-flex text-secondaryColor bg-tertiaryColor border-0 py-2 px-6 focus:outline-none hover:bg-primaryColor hover:text-white transition-colors duration-300 rounded text-lg"
                onclick="window.location='{{ $paginator->nextPageUrl() }}'">
                Next
            </button>
        @else
            <button class="inline-flex text-secondaryColor bg-tertiaryColor border-0 py-2 px-6 focus:outline-none hover:bg-primaryColor hover:text-white transition-colors duration-300 rounded text-lg invisible">
                Next
            </button>
        @endif
    </div>
@endif
