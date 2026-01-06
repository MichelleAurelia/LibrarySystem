@extends('layouts.app')

@section('content')

<div class="flex flex-col justify-center">
    <!-- Hero Section -->
    <div class="mx-auto text-center mb-[72px]">
        <div  class="mx-auto aspect-[60/37] w-full max-w-[320px] sm:max-w-[480px] md:max-w-[650px] lg:max-w-[900px]">
            <img src="ViewAll-hero.png" alt="" class="w-full h-full object-cover">
        </div>
        <h1 class="text-4xl font-bold text-white mt-5">
            {{ __('user.view_title1') }} 
            <br/><span class="text-orange-200">{{ __('user.view_title2') }} </span> {{ __('user.view_title3') }} 
        </h1>
    </div>

    @foreach($categories as $category)
        @php
            $genre_h2_Slug = Str::slug($category->name);
            $translation_h2_Key = 'genre.' . $genre_h2_Slug;
        @endphp

            <h2 class="text-3xl font-bold text-white mb-4" >
                @if(Lang::has($translation_h2_Key))
                    {{ __($translation_h2_Key) }}
                @else
                    {{ $category->name }}
                @endif
            </h2>
        <div class="relative">

            <!-- Left Button -->
            <button
                class="slider-btn left-btn absolute left-0 top-1/2 -translate-y-1/2
                       bg-black/60 px-3 py-3 rounded-full z-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg> 
            </button>

            <!-- Slider Container -->
            <div class="slider-container flex gap-6 overflow-x-auto pb-4 scroll-smooth my-10">
                @forelse($category->books as $book)
                    <div class="group cursor-pointer flex-shrink-0 w-[140px] sm:w-[160px] md:w-[180px] lg:w-[200px]">
                        <a href="{{ route('books.show', $book) }}">
                            <div class="relative aspect-[2/3] overflow-hidden rounded-lg">
                                <img src="{{ $book->image ? asset($book->image) : 'https://placehold.co/200x300' }}" 
                                    alt="{{ $book->title }}" 
                                    class="object-cover w-full h-full group-hover:scale-105 transition duration-300">
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                                    <span class="bg-white text-black text-xs font-bold px-3 py-1 rounded-full">{{ __('user.view_detail') }}</span>
                                </div>
                            </div>
                            <h3 class="font-bold text-white truncate">{{ $book->title }}</h3>
                            <p class="text-sm text-gray-400 truncate">By {{ $book->authors->first()->name ?? 'Unknown' }}</p>
                            
                            <div class="text-xs text-gray-500 mt-1 pr-[8px]flex flex-row flex-wrap">
                                @foreach ($book->categories as $genre)
                                @php
                                    $genreSlug = Str::slug($genre->name);
                                    $translationKey = 'genre.' . $genreSlug;
                                @endphp

                                <span>
                                    @if(Lang::has($translationKey))
                                        {{ __($translationKey) }}
                                    @else
                                        {{ $genre->name }}
                                    @endif
                                </span>

                                @if(!$loop->last)
                                <span>, </span>
                                @endif

                                @endforeach
                            </div> 
                           
                        </a>
                    </div>
                @empty
                    <p>{{ __('user.no_data') }}.</p>
                @endforelse
            </div>

            <!-- Right Button -->
            <button
                class="slider-btn right-btn absolute right-0 top-1/2 -translate-y-1/2
                       bg-black/60 px-3 py-3 rounded-full z-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
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
        if (width < 640) return 1;        
        if (width < 768) return 2;       
        if (width < 1024) return 3;      
        if (width < 1256) return 4;      
        return 5;  
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
