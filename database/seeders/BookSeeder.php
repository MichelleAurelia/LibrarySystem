<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'image' => "images/harry_potter.jpg",
                'description' => 'Petualangan Harry Potter tahun pertama.',
                'publish_year' => '1997',
                'publisher' => 'Bloomsbury',
                'authors' => ['J.K. Rowling'],
                'categories' => ['Novel', 'Fantasy', 'Fiction']
            ],
            [
                'title' => 'Laskar Pelangi',
                'image' => "images/laskar_pelangi.jpg",
                'description' => 'Perjalanan hidup anak-anak Belitung dalam meraih pendidikan.',
                'publish_year' => '2005',
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Andrea Hirata'],
                'categories' => ['Novel', 'Inspiratif', 'Drama']
            ],
            [
                'title' => 'The Hobbit',
                'image' => "images/the_hobbit.jpg",
                'description' => 'Petualangan Bilbo Baggins mencari harta karun naga Smaug.',
                'publish_year' => '1937',
                'publisher' => 'George Allen & Unwin',
                'authors' => ['J.R.R. Tolkien'],
                'categories' => ['Fantasy', 'Adventure']
            ],
            [
                'title' => 'Bumi Manusia',
                'image' => "images/bumi_manusia.jpg",
                'description' => 'Kisah cinta Minke dan Annelies di era kolonial Belanda.',
                'publish_year' => '1980',
                'publisher' => 'Hasta Mitra',
                'authors' => ['Pramoedya Ananta Toer'],
                'categories' => ['Sejarah', 'Drama']
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'image' => "images/to_kill_a_mockingbird.jpg",
                'description' => 'Kisah tentang keadilan dan rasisme di Selatan Amerika.',
                'publish_year' => '1960',
                'publisher' => 'J.B. Lippincott & Co.',
                'authors' => ['Harper Lee'],
                'categories' => ['Drama', 'Social', 'Classic']
            ],
            [
                'title' => '5 CM',
                'image' => "images/5cm.jpg",
                'description' => 'Perjalanan lima sahabat menuju puncak Mahameru.',
                'publish_year' => '2005',
                'publisher' => 'Grasindo',
                'authors' => ['Donny Dhirgantoro'],
                'categories' => ['Petualangan', 'Drama', 'Motivasi']
            ],
            [
                'title' => 'The Great Gatsby',
                'image' => "images/the_great_gatsby.jpg",
                'description' => 'Kisah Jay Gatsby dan obsesi terhadap Daisy Buchanan.',
                'publish_year' => '1925',
                'publisher' => 'Charles Scribner\'s Sons',
                'authors' => ['F. Scott Fitzgerald'],
                'categories' => ['Classic', 'Drama']
            ],
            [
                'title' => 'Negeri 5 Menara',
                'image' => "images/negeri_5_menara.jpg",
                'description' => 'Kisah enam santri yang mengejar mimpi dari pesantren Gontor.',
                'publish_year' => '2009',
                'publisher' => 'Gramedia',
                'authors' => ['Ahmad Fuadi'],
                'categories' => ['Inspiratif', 'Drama']
            ],
            [
                'title' => 'The Catcher in the Rye',
                'image' => "images/catcher_in_the_rye.jpg",
                'description' => 'Perjalanan remaja Holden Caulfield setelah dikeluarkan sekolah.',
                'publish_year' => '1951',
                'publisher' => 'Little, Brown and Company',
                'authors' => ['J.D. Salinger'],
                'categories' => ['Drama', 'Classic']
            ],
            [
                'title' => 'Pulang',
                'image' => "images/pulang.jpg",
                'description' => 'Kisah pulang kampung para penghuni Tanah Surga karya Tere Liye.',
                'publish_year' => '2015',
                'publisher' => 'Republika',
                'authors' => ['Tere Liye'],
                'categories' => ['Aksi', 'Drama']
            ],
            [
                'title' => 'The Fault in Our Stars',
                'image' => "images/fault_in_our_stars.jpg",
                'description' => 'Kisah cinta dua remaja pengidap kanker.',
                'publish_year' => '2012',
                'publisher' => 'Dutton Books',
                'authors' => ['John Green'],
                'categories' => ['Romance', 'Drama']
            ],
            [
                'title' => 'Perahu Kertas',
                'image' => "images/perahu_kertas.jpg",
                'description' => 'Kisah cinta Kugy dan Keenan dalam perjalanan hidup mereka.',
                'publish_year' => '2009',
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Dewi Lestari'],
                'categories' => ['Romance', 'Drama']
            ],
            [
                'title' => '1984',
                'image' => "images/1984.jpg",
                'description' => 'Dunia distopia dengan pengawasan total oleh Big Brother.',
                'publish_year' => '1949',
                'publisher' => 'Secker & Warburg',
                'authors' => ['George Orwell'],
                'categories' => ['Dystopia', 'Political Fiction']
            ],
            [
                'title' => 'Koala Kumal',
                'image' => "images/koala_kumal.jpg",
                'description' => 'Kumpulan cerita lucu dan menyentuh tentang patah hati.',
                'publish_year' => '2015',
                'publisher' => 'GagasMedia',
                'authors' => ['Raditya Dika'],
                'categories' => ['Humor', 'Drama']
            ],
            [
                'title' => 'The Alchemist',
                'image' => "images/the_alchemist.jpg",
                'description' => 'Perjalanan Santiago mencari harta karun dan takdir hidupnya.',
                'publish_year' => '1988',
                'publisher' => 'HarperTorch',
                'authors' => ['Paulo Coelho'],
                'categories' => ['Filosofi', 'Adventure']
            ],
            [
                'title' => 'Rembulan Tenggelam di Wajahmu',
                'image' => "images/rembulan.jpg",
                'description' => 'Perjalanan spiritual seorang anak bernama Ray.',
                'publish_year' => '2009',
                'publisher' => 'Republika',
                'authors' => ['Tere Liye'],
                'categories' => ['Drama', 'Filosofi']
            ],
            [
                'title' => 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe',
                'image' => "images/narnia.jpg",
                'description' => 'Empat bersaudara memasuki dunia Narnia melalui lemari pakaian.',
                'publish_year' => '1950',
                'publisher' => 'Geoffrey Bles',
                'authors' => ['C.S. Lewis'],
                'categories' => ['Fantasy', 'Adventure']
            ],
            [
                'title' => 'Hujan',
                'image' => "images/hujan.jpg",
                'description' => 'Kisah perjalanan Lail yang hidup di tengah bencana besar dunia.',
                'publish_year' => '016',
                'publisher' => 'Gramedia',
                'authors' => ['Tere Liye'],
                'categories' => ['Drama', 'Sci-Fi']
            ],
            [
                'title' => 'The Da Vinci Code',
                'image' => "images/da_vinci_code.jpg",
                'description' => 'Misteri pembunuhan yang mengungkap rahasia kuno Gereja.',
                'publish_year' => '2003',
                'publisher' => 'Doubleday',
                'authors' => ['Dan Brown'],
                'categories' => ['Thriller', 'Mystery']
            ],
            [
                'title' => 'Sabtu Bersama Bapak',
                'image' => "images/sabtu_bersama_bapak.jpg",
                'description' => 'Pesan-pesan seorang ayah kepada keluarganya setelah ia tiada.',
                'publish_year' => '2014',
                'publisher' => 'GagasMedia',
                'authors' => ['Adhitya Mulya'],
                'categories' => ['Drama', 'Keluarga']
            ],
            [
                'title' => 'Sang Pemimpi',
                'image' => "images/sang_pemimpi.jpg",
                'description' => 'Kisah Ikal dan Arai mengejar mimpi sampai ke Prancis.',
                'publish_year' => '2006',
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Andrea Hirata'],
                'categories' => ['Drama', 'Inspiratif']
            ],
            [
                'title' => 'Origin',
                'image' => "images/origin.jpg",
                'description' => 'Robert Langdon menyelidiki misteri besar tentang asal-usul manusia.',
                'publish_year' => '2017',
                'publisher' => 'Doubleday',
                'authors' => ['Dan Brown'],
                'categories' => ['Thriller', 'Mystery']
            ],
            [
                'title' => 'Habis Gelap Terbitlah Terang',
                'image' => "images/habis_gelap.jpg",
                'description' => 'Kumpulan surat Kartini yang menginspirasi emansipasi wanita.',
                'publish_year' => '1922',
                'publisher' => 'Balai Pustaka',
                'authors' => ['R.A. Kartini'],
                'categories' => ['Sejarah', 'Biografi']
            ],
            [
                'title' => 'Rich Dad Poor Dad',
                'image' => "images/rich_dad_poor_dad.jpg",
                'description' => 'Tentang pola pikir finansial untuk mencapai kebebasan finansial.',
                'publish_year' => '1997',
                'publisher' => 'Warner Books',
                'authors' => ['Robert T. Kiyosaki'],
                'categories' => ['Finance', 'Motivasi']
            ],
            [
                'title' => 'The Silent Patient',
                'image' => "images/the_silent_patient.jpg",
                'description' => 'Seorang perempuan yang berhenti berbicara setelah membunuh suaminya.',
                'publish_year' => '2019',
                'publisher' => 'Celadon Books',
                'authors' => ['Alex Michaelides'],
                'categories' => ['Thriller', 'Psychological']
            ],
            [
                'title' => 'The Subtle Art of Not Giving a F*ck',
                'image' => "images/subtle_art.jpg",
                'description' => 'Pendekatan baru dalam menjalani hidup dengan fokus pada hal bermakna.',
                'publish_year' => '2016',
                'publisher' => 'Harper',
                'authors' => ['Mark Manson'],
                'categories' => ['Self-Help', 'Motivasi']
            ],
            [
                'title' => 'Filosofi Kopi',
                'image' => "images/filosofi_kopi.jpg",
                'description' => 'Kumpulan cerita pendek tentang kopi dan kehidupan.',
                'publish_year' => '2006',
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Dewi Lestari'],
                'categories' => ['Filosofi', 'Drama']
            ],
            [
                'title' => 'A Brief History of Time',
                'image' => "images/brief_history_time.jpg",
                'description' => 'Penjelasan ilmiah mengenai kosmos dan teori fisika modern.',
                'publish_year' => '1988',
                'publisher' => 'Bantam Dell Publishing Group',
                'authors' => ['Stephen Hawking'],
                'categories' => ['Science', 'Non-Fiction']
            ],
            [
                'title' => 'Sherlock Holmes: A Study in Scarlet',
                'image' => "images/study_in_scarlet.jpg",
                'description' => 'Kisah pertama Sherlock Holmes memecahkan kasus misterius.',
                'publish_year' => '1887',
                'publisher' => 'Ward Lock & Co.',
                'authors' => ['Arthur Conan Doyle'],
                'categories' => ['Mystery', 'Classic']
            ],
            [
                'title' => 'Pusaran',
                'image' => "images/pusaran.jpg",
                'description' => 'Sebuah kisah petualangan dan misteri karya penulis Indonesia.',
                'publish_year' => '2020',
                'publisher' => 'Gramedia',
                'authors' => ['Tere Liye'],
                'categories' => ['Adventure', 'Drama']
            ],
        ];

        foreach ($books as $b) {

            // Create book
            $book = Book::create([
                'title' => $b['title'],
                'image' => $b['image'],
                'description' => $b['description'],
                'publisher' => $b['publisher'],
                'publish_year' => $b['publish_year'],
                'status' => 'available',
            ]);

            // Attach authors by name
            $authorIds = Author::whereIn('name', $b['authors'])->pluck('id');
            $book->authors()->attach($authorIds);

            // Attach categories by name
            $categoryIds = Category::whereIn('name', $b['categories'])->pluck('id');
            $book->categories()->attach($categoryIds);
        }

        
        
    }
}
