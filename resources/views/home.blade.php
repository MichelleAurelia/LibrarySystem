@extends('layouts.app')

@section('content')
    @if($featuredBook)
        <div class="flex flex-col md:flex-row items-center justify-between mb-20">
            <div class="md:w-1/2 space-y-6">
                <h1 class="text-6xl font-bold leading-tight">{{ $featuredBook->title }}</h1>

                <div class="flex items-center space-x-4 text-gray-400 text-sm">
                    <span>By <span class="text-white">{{ $featuredBook->authors->first()->name ?? 'Unknown Author' }}</span></span>
                    <span>Category: <span class="text-white">{{ $featuredBook->categories->first()->name ?? 'General' }}</span></span>
                </div>

                <div class="flex space-x-8 text-sm text-gray-400">
                    <span>Status: <span class="{{ $featuredBook->status === 'available' ? 'text-green-400' : 'text-red-400' }} capitalize">{{ $featuredBook->status }}</span></span>
                    <span>Published: <span class="text-white">{{ $featuredBook->publish_year }}</span></span>
                </div>

                <p class="text-gray-400 leading-relaxed max-w-xl">
                    {{ Str::limit($featuredBook->description, 200) }}
                </p>
                <form action = "{{ route('books.borrow') }}" method = "POST">
                    @csrf
                    <input type="hidden" name="book_id" value="{{ $featuredBook->id }}">
                    <input type="hidden" name="redirect_to" value="{{ url()->current() }}">
                    <button type="submit" class="bg-[#EAD4AA] text-black font-bold py-3 px-8 rounded flex items-center space-x-2 hover:bg-[#dcc08e] transition">
                        <span>BORROW BOOK REQUEST</span>
                    </button>
                </form>
            </div>

            <div class="md:w-1/2 flex justify-end relative mt-10 md:mt-0">
                <!-- Book Cover with Glow Effect -->
                <div class="relative">
                    <div class="absolute inset-0 bg-blue-500 blur-3xl opacity-20 rounded-full"></div>
                    <img src="{{ $featuredBook->image ?? 'https://placehold.co/300x450' }}" alt="{{ $featuredBook->title }}" class="relative z-10 w-64 md:w-80 rounded-lg shadow-2xl transform rotate-3 hover:rotate-0 transition duration-500">
                </div>
            </div>
        </div>
    @endif

    <div class="space-y-8">
        <div class="flex justify-between items-end">
            <h2 class="text-2xl font-bold text-white">Books We Have</h2>
            <a href="{{ route('view-all') }}" class="text-sm text-gray-400 hover:text-white transition border-b border-gray-600 hover:border-white pb-1">View All</a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
            @foreach($books as $book)
                <div class="group cursor-pointer">
                    <a href="{{ route('books.show', $book) }}">
                        <div class="relative aspect-[2/3] mb-4 overflow-hidden rounded-lg">
                            <img src="{{ $book->image ?? 'https://placehold.co/200x300' }}" alt="{{ $book->title }}" class="object-cover w-full h-full group-hover:scale-105 transition duration-300">
                            <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                                <span class="bg-white text-black text-xs font-bold px-3 py-1 rounded-full">View</span>
                            </div>
                        </div>
                        <h3 class="font-bold text-white truncate">{{ $book->title }}</h3>
                        <p class="text-sm text-gray-400 truncate">By {{ $book->authors->first()->name ?? 'Unknown' }}</p>
                        <p class="text-xs text-gray-500 mt-1">{{ $book->categories->first()->name ?? 'General' }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection