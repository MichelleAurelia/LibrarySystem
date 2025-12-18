@extends('layouts.app')

@section('content')
    <h1 class="text-4xl md:text-5xl font-bold mb-2">Edit Book</h1>
    <div class="w-full h-px bg-gray-700 my-6"></div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
        
        <div class="sticky top-4 h-fit">
            <h2 class="text-3xl md:text-4xl font-bold mb-2">Current Book Information</h2>
            <div class="w-full h-px bg-white my-6"></div>
            
            <div class="flex flex-row gap-5">
                <div class="w-1/2 max-w-[250px] flex">
                    <div class="relative aspect-[2/3] overflow-hidden rounded-lg bg-gray-700">
                        <img id="display-image" img src="{{ $book->image ? asset('storage/' . $book->image) : 'https://placehold.co/200x300' }}" alt="{{ $book->title }}"" class="object-cover w-full h-full">
                    </div>
                </div>
                <div class="flex flex-col">
                    <h3 id="display-title" class="text-3xl font-bold mb-4">{{ $book->title }}</h3>
                    
                    <h3 class="text-2xl font-bold mb-8">By <span id="display-author">{{ $book->authors->first()?->name ?? 'Unknown' }}</span></h3>
                    
                    <h3 class="text-2xl font-bold mb-2">Genre</h3>
                    <div id="display-genre-container" class="flex flex-col gap-2">
                        @foreach($book->categories as $category)
                            <span class="text-gray-300">&bull; {{ $category->name }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            
            <div class="flex flex-col gap-6 mt-6">
                <div>
                    <h3 class="text-2xl font-bold mt-2">Description</h3>
                    <p id="display-description" class="text-md text-gray-300">{{ $book->description }}</p>
                </div>

                <div class="flex flex-row gap-12">
                    <div>
                        <h3 class="text-2xl font-bold">Publisher</h3>
                        <p id="display-publisher" class="text-md">{{ $book->publisher }}</p>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold">Publish Year</h3>
                        <p id="display-year" class="text-md">{{ $book->publish_year }}</p> 
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h2 class="text-3xl md:text-4xl font-bold mb-2">Update Book Information</h2>
            <div class="w-full h-px bg-white my-6"></div>
            
            <form action="{{ route('update-book', $book->id) }}" method="POST" enctype="multipart/form-data" class="flex flex-col gap-6">
                @csrf
                @method('PUT') <div>
                    <label class="block font-semibold">Title</label>
                    <input type="text" id="input-title" name="title" value="{{ old('title', $book->title) }}" 
                           class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" required>
                </div>

                <div>
                    <label class="block font-semibold">Description</label>
                    <textarea id="input-description" name="description" rows="3" 
                              class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" required>{{ old('description', $book->description) }}</textarea>
                </div>
                

                <div>
                    <label class="block font-semibold">Book Publish Year</label>
                    <input type="number" id="input-year" name="publish_year" value="{{ old('publish_year', $book->publish_year) }}"
                           class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" required>
                </div>

                <div>
                    <label class="block font-semibold">Book Publisher</label>
                    <input type="text" id="input-publisher" name="publisher" value="{{ old('publisher', $book->publisher) }}"
                           class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" required>
                </div>

                <div>
                    <label class="block font-semibold">Author</label>
                    <input list="authors" id="input-author" name="author_name" value="{{ old('author_name', $book->authors->first()?->name) }}"
                           class="mt-3 p-3 bg-slate-800 border border-slate-700 rounded-xl outline-none focus:ring-2 focus:ring-orange-300 w-full" required>
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
                            <input type="checkbox" name="category_ids[]" value="{{ $category->id }}" 
                                   class="peer hidden genre-checkbox" 
                                   data-name="{{ $category->name }}"
                                   {{ $book->categories->contains($category->id) ? 'checked' : '' }}>

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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 1. Update Teks (Title, Description, dll)
            const mappings = [
                { input: 'input-title', display: 'display-title', default: 'Book Title' },
                { input: 'input-description', display: 'display-description', default: 'Description...' },
                { input: 'input-publisher', display: 'display-publisher', default: '-' },
                { input: 'input-year', display: 'display-year', default: '-' },
                { input: 'input-author', display: 'display-author', default: 'Unknown' },
            ];

            mappings.forEach(map => {
                const inputEl = document.getElementById(map.input);
                const displayEl = document.getElementById(map.display);
                
                if(inputEl && displayEl) {
                    inputEl.addEventListener('input', function() {
                        displayEl.textContent = this.value || map.default;
                    });
                }
            });


            //Update Genre (Checkbox)
            const checkboxes = document.querySelectorAll('.genre-checkbox');
            const genreContainer = document.getElementById('display-genre-container');

            function updateGenres() {
                // Kosongkan container dulu
                genreContainer.innerHTML = '';
                
                // Cari semua checkbox yang dicentang
                const checkedBoxes = document.querySelectorAll('.genre-checkbox:checked');
                
                if (checkedBoxes.length === 0) {
                    genreContainer.innerHTML = '<span class="text-gray-500 italic">No genre selected</span>';
                    return;
                }

                // Loop dan tambahkan ke tampilan kiri
                checkedBoxes.forEach(box => {
                    const genreName = box.getAttribute('data-name');
                    const span = document.createElement('span');
                    span.className = 'text-gray-300';
                    span.innerHTML = '&bull; ' + genreName;
                    genreContainer.appendChild(span);
                });
            }

            // Pasang event listener ke semua checkbox
            checkboxes.forEach(box => {
                box.addEventListener('change', updateGenres);
            });
        });
    </script>
@endsection