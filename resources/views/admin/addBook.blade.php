@extends('layouts.app')

@section('content')
    <h1 class="text-4xl md:text-5xl font-bold mb-2">Add New Book</h1>
    <div class="w-full h-px bg-gray-700 my-6"></div>
    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-4">
        <strong>Whoops! Ada masalah input:</strong>
        <ul class="list-disc pl-5 mt-2">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route ('add-book') }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-6">
        @csrf
        <div>
            <label class="block font-semibold">Book Title</label>
            <input type="text" name="title" class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" placeholder="Enter Book Title"required>
        </div>

        <div>
            <label class="block font-semibold">Description</label>
            <textarea name="description" rows="3" class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" placeholder="Enter Book Description"required></textarea>
        </div>

        <div>
            <label class="block font-semibold">Cover Image</label>
            <input type="file" name="image" accept="image/*" class="block w-full text-sm text-gray-400
                      file:mr-4 file:py-2 file:px-4
                      file:rounded-full file:border-0
                      file:text-sm file:font-semibold
                      file:bg-blue-600 file:text-white
                      hover:file:bg-blue-700 cursor-pointer">
            @error('image')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
        
        <div>
            <label class="block font-semibold">Book Publish Year</label>
            <input type="text" name="publish_year" class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" placeholder="Enter Book Cover Publish Year"required>
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
            <span>Add Book</span>
        </button>
    </form>
@endsection