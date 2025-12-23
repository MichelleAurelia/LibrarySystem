@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <a href="{{ url()->previous() }}" class="text-gray-400 hover:text-white mb-8 inline-block">&larr; Back</a>

        <div class="flex flex-col md:flex-row gap-12">
            <!-- Book Cover -->
            <div class="md:w-1/3 lg:w-1/4">
                <div class="relative aspect-[2/3] rounded-lg overflow-hidden shadow-2xl">
                    <img src="{{  $book->image ? asset('storage/' . $book->image): 'https://placehold.co/200x300' }}" alt="{{ $book->title }}"
                        class="object-cover w-full h-full">
                </div>
            </div>

            <!-- Book Details -->
            <div class="md:w-2/3 lg:w-3/4 space-y-6">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-2">{{ $book->title }}</h1>
                    <div class="flex flex-wrap gap-4 text-gray-300">
                        <span>By <span
                                class="text-white">{{ $book->authors->first()->name ?? 'Unknown Author' }}</span></span>
                        <span>&bull;</span>
                        @foreach ($book->categories as $genre)
                            <span>{{ $genre->name ?? 'General' }}</span>
                        @endforeach
                        <span>&bull;</span>
                        <span><span
                                class="{{ $book->status === 'available' ? 'text-green-400' : 'text-red-400' }} capitalize">{{ $book->status }}</span></span>
                    </div>
                </div>

                <div class="border-t border-gray-700 pt-6">
                    <h3 class="text-xl font-bold mb-3">Description</h3>
                    <p class="text-gray-300 leading-relaxed">
                        {{ $book->description }}
                    </p>
                </div>

                <div class="grid grid-cols-2 gap-6 border-t border-gray-700 pt-6">
                    <div>
                        <span class="block text-gray-400 text-sm">Publisher</span>
                        <span class="text-white">{{ $book->publisher ?? 'Unknown' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-400 text-sm">Published Year</span>
                        <span class="text-white">{{ $book->publish_year ?? 'N/A' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-400 text-sm">Added On</span>
                        <span class="text-white">{{ $book->created_at->format('M d, Y') }}</span>
                    </div>
                </div>

                <div class="pt-6">
                    @if($validateBorrow)
                        <form action = "{{route ('books.borrow') }}" method = "POST">
                            @csrf
                            <input type = "hidden" name = "book_id" value = "{{$book->id}}">
                            <input type="hidden" name="redirect_to" value="{{ url()->previous() }}">
                            <button type = "submit"
                            class="bg-[#EAD4AA] text-black font-bold py-3 px-8 rounded flex items-center space-x-2 hover:bg-[#dcc08e] transition">
                            <span>BORROW BOOK REQUEST</span>
                            </button>
                        </form>
                    @else
                        <div class="mt-4 p-3 bg-red-900/50 border border-red-500 rounded-lg">
                            <p class="text-red-200 text-sm font-semibold">Limit Reached!</p>
                            <p class="text-red-300 text-xs">You have 3 active loans. Please return them to borrow more.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection