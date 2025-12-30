
@extends('layouts.app')

@section('content')
    <h1 class="text-4xl md:text-5xl font-bold mb-2">{{__('user.readlist')}}</h1>
    <div class="w-full h-px bg-gray-700 my-6"></div>
    <!-- Content -->
    <div class = "grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($borrowedBooks as $borrow)
            @if($borrow->status == "borrowed")
            <div class = "my-[12px]">
                    <div class = "flex flex-wrap gap-8 w-[320px]">
                    <!-- Book Cover -->
                    <div class="w-[120px] sm:w-[140px] md:w-[180px] lg:w-[200px]">
                        <div class="relative aspect-[2/3] overflow-hidden rounded-lg">
                            <img src="{{ asset($borrow->book->image) ?? 'https://placehold.co/200x300' }}" alt="{{ $borrow->book->title }}" class="object-cover w-full h-full">
                        </div>
                    </div>
                    
                    <!-- Book Details -->
                    <div class = "flex flex-col flex-1 min-h-[220px]">
                        <h2 class="text-3xl font-black">{{ $borrow->book->title }}</h2>
                        <h3 class="text-[14px] font-semibold flex flex-row gap-1.5">
                            <span>{{ __('user.author') }}</span>
                            <span>{{ $borrow->book->authors->first()->name ?? 'Unknown Author' }}</span>
                        </h3>

                        <p class="mt-[12px] text-[14px] flex flex-row gap-1.5">
                            <span>{{ __('user.borrow_date')  }}: </span>
                            <span>{{ $borrow->borrow_date ?? 'N/A' }}</span>
                        </p>
                        <p class="text-[14px] flex flex-row gap-1.5 mb-5">
                            <span>{{ __('user.due_date') }}: </span>
                            <span>{{ $borrow->due_date ?? 'N/A' }}</span>
                        </p>
                        @if(
                            $borrow->due_date &&
                            !$borrow->return_date &&
                            now()->greaterThan($borrow->due_date)
                        )
                            <span class="inline-block mt-2 px-3 py-1 text-xs font-bold text-red-700 bg-red-100 rounded-full">
                                {{ __('user.status_late') }}
                            </span>
                        @endif
                        
                        <div class="mt-auto flex flex-row gap-6">
                            <form action = "{{route ('books.return')}}" method = "POST">
                                @csrf
                                <input type =  "hidden" name = "borrow_id" value = "{{ $borrow->id }}">
                                <button type = "submit" class="mt-auto bg-[#EAD4AA] text-black font-bold py-3 px-4 rounded flex justify-center hover:bg-[#dcc08e] transition max-w-[150px]">
                                    <span>{{ __('user.butt_return') }}</span>
                                </button>
                            </form>
                            <a href="{{ route('book.read', $borrow->id) }}"
                            target="_blank"
                            class="mt-auto bg-[#EAD4AA] text-black font-bold py-3 px-4 rounded
                                    flex justify-center hover:bg-[#dcc08e] transition max-w-[150px]">
                                {{ __('user.butt_read') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @empty
            <p class="text-gray-400">{{__('user.no_borrow')}}</p>
        @endforelse
    </div>
    <div class="w-full h-px bg-gray-700 my-6"></div>
    

@endsection