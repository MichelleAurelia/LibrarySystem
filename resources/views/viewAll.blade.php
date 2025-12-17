@extends('layouts.app')

@section('content')

<div class="flex flex-col justify-center">
    <!-- Hero Section -->
    <div class="mx-auto text-center mb-[72px]">
        <div class="mx-auto aspect-[60/37] w-[650px] max-w-full">
            <img src="ViewAll-hero.png" alt="" class="w-full h-full object-cover">
        </div>
        <h1 class="text-4xl font-bold text-white mt-5">
            Explore and Search for 
            <br/><span class="text-orange-200">Any Book</span> That You Need
        </h1>
    </div>

    @foreach($categories as $category)

        <h2 class="text-3xl font-bold text-white">{{ $category->name }}</h2>

        <div class="relative">

            <!-- Left Button -->
            <button
                class="slider-btn left-btn absolute left-0 top-1/2 -translate-y-1/2
                       bg-black/60 text-white px-3 py-2 rounded-full z-10">
                ‹
            </button>

            <!-- Slider Container -->
            <div class="slider-container flex gap-6 overflow-x-auto pb-4 scroll-smooth my-10">
                @forelse($category->books as $book)
                    <div
                        class="group cursor-pointer flex-shrink-0
                               w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 max-w-[200px]"
                    >
                        <a href="{{ route('books.show', $book) }}">
                            <div class="relative aspect-[2/3] overflow-hidden rounded-lg">
                                <img src="{{ $book->image ?? 'https://placehold.co/200x300' }}" 
                                    alt="{{ $book->title }}" 
                                    class="object-cover w-full h-full group-hover:scale-105 transition duration-300">
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                                    <span class="bg-white text-black text-xs font-bold px-3 py-1 rounded-full">View</span>
                                </div>
                            </div>
                            <h3 class="font-bold text-white truncate">{{ $book->title }}</h3>
                            <p class="text-sm text-gray-400 truncate">By {{ $book->authors->first()->name ?? 'Unknown' }}</p>
                            
                            <div class="flex flex-row flex-wrap">
                                @foreach ($book->categories as $genre)
                                    <p class="text-xs text-gray-500 mt-1 pr-[8px]">{{ $genre->name ?? general }}</p> 
                                @endforeach
                            </div> 
                           
                        </a>
                    </div>
                @empty
                    <p>No data available.</p>
                @endforelse
            </div>

            <!-- Right Button -->
            <button
                class="slider-btn right-btn absolute right-0 top-1/2 -translate-y-1/2
                       bg-black/60 text-white px-3 py-2 rounded-full z-10">
                ›
            </button>

        </div>

    @endforeach
</div>

@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", () => {
    // how many cards per screen size
    function getMaxVisible() {
        const width = window.innerWidth;
        if (width < 640) return 2;    
        if (width < 1024) return 4;    
        return 6;                      
    }

    document.querySelectorAll(".slider-container").forEach((slider) => {
        const cards = Array.from(slider.children);
        const leftBtn  = slider.parentElement.querySelector(".left-btn");
        const rightBtn = slider.parentElement.querySelector(".right-btn");

        if (!cards.length || !leftBtn || !rightBtn) return;

        let startIndex = 0;

        function renderWindow() {
            const maxVisible = getMaxVisible();
            const total = cards.length;

            if (startIndex < 0) startIndex = 0;
            if (startIndex > total - maxVisible) {
                startIndex = Math.max(0, total - maxVisible);
            }

            cards.forEach((card, index) => {
                if (index >= startIndex && index < startIndex + maxVisible) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });

            slider.style.justifyContent = "center";

            leftBtn.disabled  = (startIndex === 0);
            rightBtn.disabled = (startIndex + maxVisible >= total);
        }

        leftBtn.addEventListener("click", () => {
            startIndex--;
            renderWindow();
        });

        rightBtn.addEventListener("click", () => {
            startIndex++;
            renderWindow();
        });

        renderWindow();

        window.addEventListener("resize", renderWindow);
    });
});
</script>
@endpush
