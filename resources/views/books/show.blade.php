@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <a href="{{ url()->previous() }}" class="text-gray-400 hover:text-white mb-8 inline-block">&larr; {{ __('user.butt_back') }}</a>

        <div class="flex flex-col md:flex-row gap-12">
            <!-- Book Cover -->
            <div class="md:w-1/3 lg:w-1/4">
                <div class="relative aspect-[2/3] rounded-lg overflow-hidden shadow-2xl">
                    <img src="{{  $book->image ? asset($book->image): 'https://placehold.co/200x300' }}" alt="{{ $book->title }}"
                        class="object-cover w-full h-full">
                </div>
            </div>

            <!-- Book Details -->
            <div class="md:w-2/3 lg:w-3/4 space-y-6">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-2">{{ $book->title }}</h1>
                    <div class="flex flex-wrap gap-4 text-gray-300">
                        <span>{{ __('user.author') }} <span
                                class="text-white">{{ $book->authors->first()->name ?? 'Unknown Author' }}</span></span>
                        <span>&bull;</span>
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
                        @endforeach
                        <span>&bull;</span>
                        <span><span
                                class="{{ $book->status === 'available' ? 'text-green-400' : 'text-red-400' }} capitalize font-bold">{{ __('status.' . $book->status) }}</span></span>
                    </div>
                </div>

                <div class="border-t border-gray-700 pt-6">
                    <h3 class="text-xl font-bold mb-3">Description</h3>
                    @if(app()->getLocale() == 'en')
                        <p class="text-gray-300 leading-relaxed">
                            {{ $book->description_en}}
                        </p>
                    @else
                        <p class="text-gray-300 leading-relaxed">
                            {{ $book->description_id}}
                        </p>
                    @endif
                </div>

                <div class="grid grid-cols-2 gap-6 border-t border-gray-700 pt-6">
                    <div>
                        <span class="block text-gray-400 text-sm">{{ __('user.publisher') }}</span>
                        <span class="text-white">{{ $book->publisher ?? 'Unknown' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-400 text-sm">{{ __('user.publish') }}</span>
                        <span class="text-white">{{ $book->publish_year ?? 'N/A' }}</span>
                    </div>
                    <div>
                        <span class="block text-gray-400 text-sm">{{ __('user.added') }}</span>
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
                            <span>{{ __('user.butt_borrow') }}</span>
                            </button>
                        </form>
                    @else
                        <div class="mt-4 p-3 bg-red-900/50 border border-red-500 rounded-lg">
                            <p class="text-red-200 text-sm font-semibold">{{ __('message.limit') }}</p>
                            <p class="text-red-300 text-xs">{{ __('message.reachLimit') }}</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection