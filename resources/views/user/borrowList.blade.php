@extends('layouts.app')

@section('content')
    <h1 class="text-4xl md:text-5xl font-bold mb-2">Your Reading List</h1>
    <div class="w-full h-px bg-gray-700 my-6"></div>
    <!-- Content -->
    <div class = "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @forelse ($borrowedBooks as $borrow)
        <div class = "my-[12px]">
            <div class = "flex flex-row gap-6">
                <!-- Book Cover -->
                <div class="w-1/2 max-w-[150px] flex items-center justify-center">
                    <div class="relative aspect-[2/3] overflow-hidden rounded-lg">
                        <img src="{{ asset($borrow->book->image) ?? 'https://placehold.co/200x300' }}" alt="{{ $borrow->book->title }}" class="object-cover w-full h-full">
                    </div>
                </div>
                
                <!-- Book Details -->
                <div class = "flex flex-col w-[320px] h-[220px]">
                    <h2 class="text-3xl font-black">{{ $borrow->book->title }}</h2>
                    <h3 class="text-[14px] font-semibold flex flex-row gap-1.5">
                        <span>By</span>
                        <span>{{ $borrow->book->authors->first()->name ?? 'Unknown Author' }}</span>
                    </h3>

                    <p class="mt-auto text-[14px] flex flex-row gap-1.5">
                        <span>Borrow Date:</span>
                        <span>{{ $borrow->borrow_date ?? 'N/A' }}</span>
                    </p>
                    <p class="text-[14px] flex flex-row gap-1.5">
                        <span>Due Date: </span>
                        <span>{{ $borrow->due_date ?? 'Unknown Author' }}</span>
                    </p>
                    
                    <button class="mt-auto bg-[#EAD4AA] text-black font-bold py-3 rounded flex justify-center hover:bg-[#dcc08e] transition max-w-[150px]">
                        <span>Return Book</span>
                    </button>
                </div>
            </div>
        </div>
        @empty
            <p class="text-gray-400">No borrowed books yet</p>
        @endforelse
    </div>
    <div class="w-full h-px bg-gray-700 my-6"></div>
    

@endsection