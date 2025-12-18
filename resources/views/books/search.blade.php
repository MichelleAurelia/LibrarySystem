@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-8">Search Results for "{{ $query }}"</h1>

        @if($books->isEmpty())
            <p class="text-gray-400">No books found matching your criteria.</p>
        @else
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                @foreach($books as $book)
                    <div class="group cursor-pointer">
                        <a href="{{ route('books.show', $book) }}">
                            <div class="relative aspect-[2/3] mb-4 overflow-hidden rounded-lg">
                                <img src="{{ $book->image ?? 'https://placehold.co/200x300' }}" alt="{{ $book->title }}"
                                    class="object-cover w-full h-full group-hover:scale-105 transition duration-300">
                                <div
                                    class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                                    <span class="bg-white text-black text-xs font-bold px-3 py-1 rounded-full">View Details</span>
                                </div>
                            </div>
                            <h3 class="font-bold text-white truncate">{{ $book->title }}</h3>
                            <p class="text-sm text-gray-400 truncate">By {{ $book->authors->first()->name ?? 'Unknown' }}</p>
                            <p class="text-xs text-gray-500 mt-1">{{ $book->categories->first()->name ?? 'General' }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection