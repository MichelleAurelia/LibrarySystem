@extends('layouts.app')

@section('content')
    <h1 class="text-4xl md:text-5xl font-bold mb-2">Admin Page</h1>
    <div class="w-full h-px bg-gray-700 my-6"></div>
    <!-- Add new Books -->
    <div>

    </div>
    <!-- All Books -->
    <div class="flex- flex-col">
        <div class="flex flex-row justify-between">
            <h2 class="text-xl md:text-2xl font-semibold mb-2">All Books</h2>
            <a href="{{ route('create-page') }}" class="bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-2 px-4 rounded flex items-center gap-2 transition-colors">
                <span class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>
                </span>
                <span class="flex items-center">Add New Book</span>
            </a>
        </div>
        <table  class="w-full h-px my-6 text-left">
            <thead class="border-b">
                <tr>
                    <th class="py-3">Book Title</th>
                    <th class="py-3">Author</th>
                    <th class="py-3">Status</th>
                    <th class="py-3">Action</th>
                </tr>
            </thead>
            <tbody id="booksTableBody">
                @foreach($books as $book)
                <tr class="border-b border-gray-500">
                    <td class="py-4 max-w-[256px]">{{ $book->title }}</td>
                    <td class="py-4">{{ $book->authors->first()?->name ?? 'Tanpa Author'}}</td>
                    <td class="py-4">{{ $book->status }}</td>
                    <td class="flex flex-row gap-5 py-4">
                        <a href="{{ route('edit-page', $book->id) }}" class="mt-auto bg-[#EAD4AA] text-black font-bold py-2 px-4 rounded flex flex-row gap-2 justify-center hover:bg-[#dcc08e] transition">
                            <span class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </span>
                            <span class="flex items-center">
                                Edit
                            </span>
                        </a>
                        
                        </button>
                         <form action="{{ route('delete-book', $book->id) }}" method="POST" onsubmit="return confirm('Do you want to delete this book ?');">
                            @csrf
                            @method('DELETE')
                            <button type = "submit" class="mt-auto bg-[#EAD4AA] text-black font-bold py-2 px-4 rounded flex justify-center gap-2 hover:bg-[#dcc08e] transition">
                                <span class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </span>
                                <span class="flex items-center">Delete</span>
                        </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div id="pagination" class="flex justify-start gap-2 mt-6"></div>
    </div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const rowsPerPage = 10;
        const tableBody = document.getElementById('booksTableBody');
        const rows = Array.from(tableBody.querySelectorAll('tr'));
        const pagination = document.getElementById('pagination');

        const totalPages = Math.ceil(rows.length / rowsPerPage);
        let currentPage = 1;

        function renderTable(page) {
            currentPage = page;

            rows.forEach((row, index) => {
                const start = (page - 1) * rowsPerPage;
                const end = page * rowsPerPage;
                row.style.display = (index >= start && index < end) ? '' : 'none';
            });

            renderPagination();
        }

        function renderPagination() {
            pagination.innerHTML = '';

            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement('button');
                btn.textContent = i;
                btn.className = `
                    px-4 py-2 rounded border
                    ${i === currentPage
                        ? 'bg-gray-800 text-white'
                        : 'bg-white text-gray-800 hover:bg-gray-200'}
                `;
                btn.addEventListener('click', () => renderTable(i));
                pagination.appendChild(btn);
            }
        }

        renderTable(1);
    });
</script>
