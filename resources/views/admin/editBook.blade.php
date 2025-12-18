@extends('layouts.app')

@section('content')
    <h1 class="text-4xl md:text-5xl font-bold mb-2">Edit Book</h1>
    <div class="w-full h-px bg-gray-700 my-6"></div>
    <div class="grid grid-cols-2 gap-12">
        <!-- Left Side -->
        <div>
            <h2 class="text-3xl md:text-4xl font-bold mb-2">Current Book Information</h2>
            <div class="w-full h-px bg-white my-6"></div>
            <div class="flex flex-row gap-5">
                <div class="w-1/2 max-w-[250px] flex">
                    <div class="relative aspect-[2/3] overflow-hidden rounded-lg">
                        <img src="{{ asset($book->image) ?? 'https://placehold.co/200x300' }}" alt="{{ $book->title }}" class="object-cover w-full h-full">
                    </div>
                </div>
                <div class="flex flex-col">
                    <h3 class="text-3xl font-bold mb-4">{{ $book->title }}</h3>
                    <h3 class="text-2xl font-bold mb-8">By {{ $book->authors->first()->name }}</h3>
                    <h3 class="text-2xl font-bold mb-2">Genre</h3>
                    <p class="flex flex-col gap-3">
                        @foreach($book->categories as $category)
                            <span>&bull; {{ $category->name }}</span>
                        @endforeach
                    </p>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <div>
                    <h3 class="text-2xl font-bold mt-8">Description</h3>
                    <p class="text-md">{{ $book->description }}</p>
                </div>

                <div class = "flex flex-row gap-12">
                    <div>
                        <h3 class="text-2xl font-bold">Publisher</h3>
                        <p class="text-md">{{ $book->publisher }}</p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">Publish Year</h3>
                        <p class="text-md">{{ $book->publish_year }}</p> 
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side -->
        <div>
            <h2 class="text-3xl md:text-4xl font-bold mb-2">Update Book Information</h2>
             <div class="w-full h-px bg-white my-6"></div>
            <form action="" class="flex flex-col gap-6">
                <div>
                    <label class="block font-semibold">Title</label>
                    <input type="text" name="title" class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" placeholder="Enter Book Title"required>
                </div>

                <div>
                    <label class="block font-semibold">Description</label>
                    <textarea name="description" rows="3" class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" placeholder="Enter Book Description"required></textarea>
                </div>

                <div>
                    <label class="block font-semibold">Book Publish Year</label>
                    <input type="text" name="publishYear" class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" placeholder="Enter Book Cover Publish Year"required>
                </div>

                <div>
                    <label class="block font-semibold">Book Publisher</label>
                    <input type="text" name="publisher" class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" placeholder="Enter Book Cover Publisher"required>
                </div>

                <div>
                    <label class="block font-semibold">Author</label>
                    <input list="authors" name="author_name" class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" placeholder="Select or type new author" required>
                    <datalist id="authors">
                        @foreach ($authors as $author)
                            <option value="{{ $author->name }}"></option>
                        @endforeach
                    </datalist>
                </div>

                <div>
                    <label class="block font-semibold">Genre</label>

                    <div class="grid grid-cols-2 gap-3 p-3 bg-slate-800 border border-slate-700 rounded-xl mt-3">
                        @foreach ($categories as $category)
                        <label class="flex items-center gap-3 cursor-pointer group">

                            <input type="checkbox" name="category_ids[]" value="{{ $category->id }}" class="peer hidden">

                            <div class="w-5 h-5 rounded border border-slate-500 flex items-center justify-center group-hover:border-orange-400 peer-checked:bg-orange-400 peer-checked:border-orange-400 peer-checked:[&>svg]:opacity-100 transition">

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class=" w-4 h-4 text-black opacity-0 transition">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>

                            </div>

                            <span class="text-sm">{{ $category->name }}</span>
                        </label>
                        @endforeach
                    </div>
                </div>

                <button type="submit" class="bg-[#EAD4AA] text-black font-bold py-3 rounded flex justify-center space-x-2 hover:bg-[#dcc08e] transition">
                    <span>Update Book</span>
                </button>
            </form>
        </div>
    </div>
@endsection