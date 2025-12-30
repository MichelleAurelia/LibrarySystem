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
                'description_id' => "Harry Potter and the Sorcerer’s Stone adalah sebuah novel fantasi karya J.K. Rowling yang menceritakan kisah petualangan awal Harry Potter setelah ia mengetahui bahwa dirinya adalah seorang penyihir. Ia memasuki dunia sihir di Hogwarts dan menghadapi misteri Batu Bertuah, sebuah artefak berbahaya yang diincar oleh kekuatan gelap. Novel ini mengeksplorasi tema persahabatan, keberanian, serta perjuangan antara kebaikan dan kejahatan.",
                'description_en' => "Harry Potter and the Sorcerer's Stone is a fantasy novel by J.K. Rowling that tells the story of Harry Potter's early adventures after discovering he is a wizard. He enters the magical world of Hogwarts and faces the mystery of the Philosopher's Stone, a dangerous underworld. The novel explores themes of friendship, courage, and the struggle between good and evil.",
                'publish_year' => '1997',
                'publisher' => 'Bloomsbury',
                'authors' => ['J.K. Rowling'],
                'categories' => [ 'Novel','Fantasy', 'Fiction'],
                'link' => "https://drive.google.com/file/d/1bEWHSTPEVu-36in5t4TOS2sDqsOeYAhk/view?usp=sharing"
            ],
            [
                'title' => 'Laskar Pelangi',
                'image' => "images/laskar_pelangi.jpg",
                'description_id' => "'Laskar Pelangi' adalah sebuah novel karya Andrea Hirata yang menceritakan kisah sekelompok anak dari keluarga sederhana di Pulau Belitung yang berjuang untuk mendapatkan pendidikan. Cerita ini menonjolkan semangat belajar, persahabatan, dan harapan di tengah keterbatasan, serta mengajarkan bahwa pendidikan dapat mengubah masa depan.",
                'description_en' => "'Laskar Pelangi' is a novel by Andrea Hirata that tells the story of a group of children from modest families in Belitung Island who struggle to achieve education. The story highlights the spirit of learning, friendship, and hope amidst limitations, and teaches that education can change the future.",
                'publish_year' => '2005',
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Andrea Hirata'],
                'categories' => ['Motivation', 'Drama'],
                'link' => "https://drive.google.com/file/d/1Txe9XAKiuNep26bFLbIKrf31MsO5BbHd/view?usp=drive_link"
            ],
            [
                'title' => 'The Hobbit',
                'image' => "images/the_hobbit.jpg",
                'description_id' => "The Hobbit adalah novel fantasi karya J.R.R. Tolkien yang menceritakan petualangan Bilbo Baggins, seorang hobbit pendiam yang memulai perjalanan berbahaya bersama sekelompok kurcaci dan penyihir Gandalf. Tujuan mereka adalah merebut kembali harta dan kerajaan yang dikuasai oleh naga Smaug. Novel ini menyoroti tema keberanian, persahabatan, dan transformasi pribadi, serta berfungsi sebagai pengantar ke dunia legendaris Middle-earth.",
                'description_en' => "The Hobbit is a fantasy novel by J.R.R. Tolkien that tells the adventures of Bilbo Baggins, a quiet hobbit who embarks on a perilous journey with a group of dwarves and the wizard Gandalf. Their goal is to reclaim the treasure and kingdom held by the dragon Smaug. The novel highlights themes of courage, friendship, and personal transformation, and serves as an introduction to the legendary world of Middle-earth.",
                'publish_year' => '1937',
                'publisher' => 'George Allen & Unwin',
                'authors' => ['J.R.R. Tolkien'],
                'categories' => ['Novel','Fantasy', 'Adventure'],
                'link' => "https://drive.google.com/file/d/1RXPHECuv95ixzyEXBC43_6msFWB840xz/view?usp=drive_link"      

            ],
            [
                'title' => 'Bumi Manusia',
                'image' => "images/bumi_manusia.jpg",
                'description_id' => "'Bumi Manusia' adalah novel karya Pramoedya Ananta Toer yang menceritakan kisah Minke, seorang wanita Indonesia terdidik yang lahir di bawah penjajahan Belanda. Novel ini menyoroti ketidaksetaraan sosial, kolonialisme, dan perjuangan identitas melalui konflik antara penduduk asli dan penjajah. Novel ini juga menekankan pentingnya pendidikan, kesadaran diri, dan perlawanan terhadap ketidakadilan.",
                'description_en' => "'Bumi Manusia' is a novel by Pramoedya Ananta Toer that tells the story of Minke, an educated native Indonesian during the Dutch colonial period. The novel highlights social inequality, colonialism, and the struggle for identity through the conflict between the natives and the colonialists. It also emphasizes the importance of education, self-awareness, and resistance against injustice.",
                'publish_year' => '1980',
                'publisher' => 'Hasta Mitra',
                'authors' => ['Pramoedya Ananta Toer'],
                'categories' => ['Novel','History', 'Drama'],
                'link' => "https://drive.google.com/file/d/1fv1r8p_D72aW7mb1yD12CtqXxH_3aOyp/view?usp=drive_link"
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'image' => "images/to_kill_a_mockingbird.jpg",
                'description_id' => "To Kill a Mockingbird adalah novel karya Harper Lee yang membahas ketidakadilan rasial melalui perspektif seorang gadis muda bernama Scout. Cerita ini menyoroti moralitas, empati, dan keberanian dalam memperjuangkan keadilan.",
                'description_en' => 'To Kill a Mockingbird is a novel by Harper Lee that addresses racial injustice through the perspective of a young girl named Scout. The story highlights morality, empathy, and courage in standing up for justice',
                'publish_year' => '1960',
                'publisher' => 'J.B. Lippincott & Co.',
                'authors' => ['Harper Lee'],
                'categories' => ['Novel','Drama', 'Classic'],
                'link' => "https://drive.google.com/file/d/10AamgFliRT5nizeSXDkSgYMKNyCsTmsJ/view?usp=drive_link"      
            ],
            [
                'title' => '5 CM',
                'image' => "images/5cm.jpg",
                'description_id' => "5 CM adalah novel karya Donny Dhirgantoro tentang persahabatan lima anak muda yang berjuang untuk meraih impian mereka. Novel ini menekankan motivasi, persahabatan, dan cinta tanah air.",
                'description_en' => "5 CM is a novel by Donny Dhirgantoro about the friendship of five young people who strive to achieve their dreams. The novel emphasizes motivation, friendship, and love for the country.",
                'publish_year' => '2005',
                'publisher' => 'Grasindo',
                'authors' => ['Donny Dhirgantoro'],
                'categories' => ['Novel','Adventure', 'Drama', 'Motivation'],
                'link' => "https://drive.google.com/file/d/1o27_F24bUbflTWC9_ZBSxD3BPioTwO2H/view?usp=drive_link"      
            ],
            [
                'title' => 'The Great Gatsby',
                'image' => "images/the_great_gatsby.jpg",
                'description_id' => "The Great Gatsby adalah novel karya F. Scott Fitzgerald yang menggambarkan kekayaan, ambisi, dan ilusi di Amerika tahun 1920-an. Kisah ini mengkritik Impian Amerika dan mengeksplorasi tema cinta dan kemerosotan moral.",
                'description_en' =>"The Great Gatsby is a novel by F. Scott Fitzgerald that portrays wealth, ambition, and illusion in 1920s America. The story critiques the American Dream and explores themes of love and moral decay.",
                'publish_year' => '1925',
                'publisher' => 'Charles Scribner\'s Sons',
                'authors' => ['F. Scott Fitzgerald'],
                'categories' => ['Classic', 'Drama'],
                'link' => "https://drive.google.com/file/d/1vm2BctmETPvv36Pvo6E5fYEONDkcQBs6/view?usp=drive_link"      
            ],
            [
                'title' => 'Negeri 5 Menara',
                'image' => "images/negeri_5_menara.jpg",
                'description_id' => "Negeri 5 Menara adalah novel karya Ahmad Fuadi yang menceritakan kisah enam siswa yang belajar di sebuah sekolah berasrama Islam sambil mengejar impian mereka. Novel ini menyoroti persahabatan, pendidikan, dan ketekunan.",
                'description_en' => "Negeri 5 Menara is a novel by Ahmad Fuadi that tells the story of six students studying at an Islamic boarding school while pursuing their dreams. The novel highlights friendship, education, and perseverance.",
                'publish_year' => '2009',
                'publisher' => 'Gramedia',
                'authors' => ['Ahmad Fuadi'],
                'categories' => ['Motivation', 'Drama'],
                'link' =>"https://drive.google.com/file/d/11ewhKzRQD9Hec-g2XzOFFGkAMqrZlga3/view?usp=drive_link"      
            ],
            [
                'title' => 'The Catcher in the Rye',
                'image' => "images/catcher_in_the_rye.jpg",
                'description_id' => "The Catcher in the Rye adalah novel karya J.D. Salinger yang menceritakan kisah Holden Caulfield, seorang remaja yang bergumul dengan kedewasaan dan masyarakat. Novel ini mengeksplorasi tema-tema identitas, keterasingan, dan hilangnya kepolosan.",
                'description_en' =>"The Catcher in the Rye is a novel by J.D. Salinger that tells the story of Holden Caulfield, a teenager struggling with adulthood and society. The novel explores themes of identity, alienation, and the loss of innocence.",
                'publish_year' => '1951',
                'publisher' => 'Little, Brown and Company',
                'authors' => ['J.D. Salinger'],
                'categories' => ['Drama', 'Classic'],
                'link' => "https://drive.google.com/file/d/1wJxTOxfhsIUt8J8PDcNkafv3NR7zmhwH/view?usp=drive_link"     
            ],
            [
                'title' => 'Pulang',
                'image' => "images/pulang.jpg",
                'description_id' => "Pulang adalah novel karya Tere Liye yang mengisahkan perjalanan hidup seorang pemuda yang terlibat dalam dunia kriminal dan pelarian lintas negara. Cerita ini menekankan makna keluarga, kesetiaan, dan pentingnya kembali ke rumah sebagai proses menemukan kembali identitas diri.",
                'description_en' => "Pulang is a novel by Tere Liye that chronicles the life journey of a young man involved in a world of crime and a cross-country escape. The story emphasizes the meaning of family, loyalty, and the significance of returning home as a process of rediscovering one's identity.",
                'publish_year' => '2015',
                'publisher' => 'Republika',
                'authors' => ['Tere Liye'],
                'categories' => ['Novel','Action', 'Drama'],
                'link' => "https://drive.google.com/file/d/1QzCZ-iyvdStXVmZu4CuPuvuJHqOeKeZm/view?usp=drive_link"      
            ],
            [
                'title' => 'The Fault in Our Stars',
                'image' => "images/fault_in_our_stars.jpg",
                'description_id' => "The Fault in Our Stars adalah novel karya John Green yang menceritakan kisah cinta Hazel Grace dan Augustus Waters, dua remaja yang mengidap kanker. Novel ini mengeksplorasi tema cinta, kehilangan, dan makna hidup dengan cara yang emosional namun realistis.",
                'description_en' => 'The Fault in Our Stars is a novel by John Green that tells the love story of Hazel Grace and Augustus Waters, two teenagers with cancer. The novel explores themes of love, loss, and the meaning of life in an emotional yet realistic way.',
                'publish_year' => '2012',
                'publisher' => 'Dutton Books',
                'authors' => ['John Green'],
                'categories' => ['Novel','Romance', 'Drama'],
                'link' => "https://drive.google.com/file/d/1c5NwqbiAaYLZdQ0CdIjs2-ozob75WseW/view?usp=drive_link"     
            ],
            [
                'title' => 'Perahu Kertas',
                'image' => "images/perahu_kertas.jpg",
                'description_id' => "'Perahu Kertas' adalah sebuah novel karya Dee Lestari yang mengisahkan kisah cinta dan impian Kugy dan Keenan. Kisah ini menyoroti pencarian jati diri, idealisme, dan pilihan hidup mereka yang seringkali bertentangan dengan kenyataan.",
                'description_en' => "'Perahu Kertas' is a novel by Dee Lestari that chronicles the love story and dreams of Kugy and Keenan. The story highlights their search for identity, idealism, and life choices that often clash with reality.",
                'publish_year' => '2009',
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Dewi Lestari'],
                'categories' => ['Novel','Romance', 'Drama'],
                'link' => "https://drive.google.com/file/d/1X18V4ZfQDhwSQyz2ajA6nj6U8iKqEcnf/view?usp=drive_link"     
            ],
            [
                'title' => '1984',
                'image' => "images/1984.jpg",
                'description_id' => "1984 adalah novel distopia karya George Orwell yang menggambarkan kehidupan di negara totaliter di mana pemerintah mengendalikan setiap aspek kehidupan warganya. Cerita ini berfokus pada Winston Smith, seorang pegawai yang mulai mempertanyakan kebenaran dan kebebasan di tengah dominasi Big Brother. Novel ini mengeksplorasi tema-tema penindasan, manipulasi informasi, dan hilangnya kebebasan berpikir dalam sistem kekuasaan absolut.",
                'description_en' => "1984 is a dystopian novel by George Orwell that depicts life in a totalitarian state where the government controls every aspect of its citizens' lives. The story focuses on Winston Smith, a clerk who begins to question truth and freedom amidst the dominance of Big Brother. The novel explores themes of oppression, information manipulation, and the loss of freedom of thought within a system of absolute power.",
                'publish_year' => '1949',
                'publisher' => 'Secker & Warburg',
                'authors' => ['George Orwell'],
                'categories' => ['Political','Fiction'],
                'link' => "https://drive.google.com/file/d/1OG99Yg1coo7j2NHhGGQSTWJnUUoLv4bv/view?usp=drive_link"     
            ],
            [
                'title' => 'Koala Kumal',
                'image' => "images/koala_kumal.jpg",
                'description_id' => "Koala Kumal adalah buku karya Raditya Dika, kumpulan cerita humor dan pengalaman pribadi, yang terutama berpusat pada cinta, patah hati, dan kehidupan sehari-hari. Dengan gaya yang ringan dan humoris, buku ini menyampaikan refleksi sederhana tentang hubungan yang gagal dan proses berdamai dengan masa lalu. Ceritanya menghibur dan mudah dipahami oleh pembaca.",
                'description_en' => 'Koala Kumal is a book by Raditya Dika, a collection of humorous stories and personal experiences, primarily centered around love, heartbreak, and everyday life. With a light and humorous style, the book conveys simple reflections on failed relationships and the process of coming to terms with the past. The story is both entertaining and relatable to readers.',
                'publish_year' => '2015',
                'publisher' => 'GagasMedia',
                'authors' => ['Raditya Dika'],
                'categories' => ['Humor', 'Drama'],
                'link' => "https://drive.google.com/file/d/1vy8QbESMUFyEMEA-jBxQgazyo9Xoc9bG/view?usp=drive_link"    
            ],
            [
                'title' => 'The Alchemist',
                'image' => "images/the_alchemist.jpg",
                'description_id' => "Sang Alkemis adalah novel karya Paulo Coelho yang menceritakan kisah Santiago, seorang gembala muda, yang mencari harta karun dan makna hidup. Sepanjang perjalanan, Santiago belajar tentang mimpi, keberanian, dan pentingnya mengikuti kata hati. Novel ini dipenuhi dengan pesan-pesan filosofis tentang pencarian identitas dan keyakinan bahwa setiap orang memiliki takdir yang harus diperjuangkan.",
                'description_en' => "The Alchemist is a novel by Paulo Coelho that tells the story of Santiago, a young shepherd, in search of treasure and the meaning of life. Along the way, Santiago learns about dreams, courage, and the importance of following one's heart. The novel is filled with philosophical messages about the search for identity and the belief that everyone has a destiny to fight for.",
                'publish_year' => '1988',
                'publisher' => 'HarperTorch',
                'authors' => ['Paulo Coelho'],
                'categories' => ['Philosophy', 'Adventure'],
                'link' => "https://drive.google.com/file/d/1WVNqyqLgqXlQi4P8iI2xNFzONLlEVg-q/view?usp=drive_link"   
            ],
            [
                'title' => 'Rembulan Tenggelam di Wajahmu',
                'image' => "images/rembulan.jpg",
                'description_id' => "Rembulan Tenggelam di Wajahmu adalah novel karya Tere Liye yang mengisahkan perjalanan hidup Ray, seorang pria dengan masa lalu kelam yang penuh dengan rasa sakit dan penderitaan. Kisah ini terungkap melalui refleksi dan kilas balik yang menyingkap makna keadilan, takdir, dan kasih sayang dalam kehidupan manusia. Dengan alur cerita yang emosional dan filosofis, novel ini mengajak pembaca untuk merenungkan fakta bahwa setiap peristiwa dalam hidup memiliki alasan dan maknanya sendiri.",
                'description_en' => 'Rembulan Tenggelam di Wajahmu is a novel by Tere Liye that chronicles the life journey of Ray, a man with a dark past filled with pain and suffering. The story unfolds through reflections and flashbacks that reveal the meaning of justice, destiny, and compassion in human life. With an emotional and philosophical plot, this novel invites readers to reflect on the fact that every event in life has its own reason and meaning.',
                'publish_year' => '2009',
                'publisher' => 'Republika',
                'authors' => ['Tere Liye'],
                'categories' => ['Novel','Drama', 'Philosophy'],
                'link' => "https://drive.google.com/file/d/1C9JirzZBGd8GDotGuUT7gKPetWY7mhFM/view?usp=drive_link"    
            ],
            [
                'title' => 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe',
                'image' => "images/narnia.jpg",
                'description_id' => "The Chronicles of Narnia: The Lion, the Witch and the Wardrobe adalah novel fantasi karya C.S. Lewis yang menceritakan petualangan empat bersaudara—Peter, Susan, Edmund, dan Lucy—di dunia ajaib Narnia. Melalui sebuah lemari pakaian, mereka memasuki negeri yang diperintah oleh Penyihir Putih dan terjerumus ke dalam musim dingin abadi. Dengan bantuan Aslan si singa, anak-anak tersebut terlibat dalam perjuangan antara kebaikan dan kejahatan. Novel ini mengeksplorasi tema keberanian, pengorbanan, dan harapan, dan telah menjadi salah satu karya fantasi klasik yang paling berpengaruh.",
                'description_en' => 'The Chronicles of Narnia: The Lion, the Witch and the Wardrobe is a fantasy novel by C.S. Lewis that tells the adventures of four siblings—Peter, Susan, Edmund, and Lucy—in the magical world of Narnia. Through a wardrobe, they enter a land ruled by the White Witch and plunged into eternal winter. With the help of Aslan the lion, the children become involved in a struggle between good and evil. The novel explores themes of courage, sacrifice, and hope, and has become one of the most influential works of classic fantasy.',
                'publish_year' => '1950',
                'publisher' => 'Geoffrey Bles',
                'authors' => ['C.S. Lewis'],
                'categories' => ['Novel','Fantasy', 'Adventure'],
                'link' => "https://drive.google.com/file/d/1Wx4cP6u-Q5rhEilJaD_WbmDv0MiOFFUm/view?usp=drive_link"   
            ],
            [
                'title' => 'Hujan',
                'image' => "images/hujan.jpg",
                'description_id' => "Hujan adalah novel karya Tere Liye yang mengisahkan perjalanan hidup Lail dan Esok di tengah dunia futuristik yang dilanda bencana besar. Kisah ini menggabungkan cerita tentang cinta, persahabatan, dan pengorbanan dengan latar belakang kemajuan teknologi dan perubahan iklim ekstrem. Novel ini menyampaikan pesan tentang kehilangan, kenangan, dan ketulusan dalam menerima masa lalu untuk melangkah ke masa depan.",
                'description_en' => "Rain is a novel by Tere Liye which tells the story of Lail and Esok's life journey in the middle of a futuristic world hit by a major disaster. This story combines stories of love, friendship and sacrifice against the backdrop of technological progress and extreme climate change. This novel conveys a message about loss, memories, and sincerity in accepting the past in order to move into the future.",
                'publish_year' => '016',
                'publisher' => 'Gramedia',
                'authors' => ['Tere Liye'],
                'categories' => ['Novel','Drama', 'Sci-Fi'],
                'link' => "https://drive.google.com/file/d/1EPf2Tt_OsU1NoLzFV5XqUTxRhWV_PVMv/view?usp=drive_link"    
            ],
            [
                'title' => 'The Da Vinci Code',
                'image' => "images/da_vinci_code.jpg",
                'description_id' => "The Da Vinci Code adalah novel thriller karya Dan Brown yang mengisahkan petualangan Robert Langdon dalam memecahkan misteri pembunuhan di Museum Louvre di Paris. Investigasinya membawa Langdon pada serangkaian teka-teki, simbol, kode, dan rahasia sejarah yang terkait dengan Gereja dan karya Leonardo da Vinci. Novel ini memadukan seni, sejarah, dan konspirasi dalam alur cerita yang menegangkan dan mengejutkan.",
                'description_en' => "The Da Vinci Code is a thriller novel by Dan Brown that follows Robert Langdon's adventures in solving a murder mystery at the Louvre Museum in Paris. His investigation leads Langdon on a series of puzzles, symbols, codes, and historical secrets connected to the Church and the work of Leonardo da Vinci. The novel blends art, history, and conspiracy in a suspenseful and surprising plot.",
                'publish_year' => '2003',
                'publisher' => 'Doubleday',
                'authors' => ['Dan Brown'],
                'categories' => ['Thriller', 'Mystery'],
                'link' => "https://drive.google.com/file/d/1VRTGRxSV0H5via-AAwdHy-7NCHm3EgB8/view?usp=drive_link"     
            ],
            [
                'title' => 'Sabtu Bersama Bapak',
                'image' => "images/sabtu_bersama_bapak.jpg",
                'description_id' => "Sabtu Bersama Bapak adalah novel karya Adhitya Mulya yang menceritakan kisah seorang ayah yang meninggalkan pesan hidup untuk istri dan anak-anaknya melalui rekaman video sebelum meninggal dunia. Kisah ini berfokus pada nilai-nilai keluarga, cinta, dan tanggung jawab seorang ayah dalam membimbing anak-anaknya menjalani hidup. Novel ini menyentuh dan bermakna, mengajarkan pentingnya kehadiran, komunikasi, dan kasih sayang dalam keluarga.",
                'description_en' => "Saturday with Father is a novel by Adhitya Mulya that tells the story of a father who leaves life messages for his wife and children through a video recording before his death. The story focuses on the values ​​of family, love, and a father's responsibility in guiding his children through life. This novel is touching and meaningful, teaching the importance of presence, communication, and affection within a family.",
                'publish_year' => '2014',
                'publisher' => 'GagasMedia',
                'authors' => ['Adhitya Mulya'],
                'categories' => ['Drama', 'Keluarga'],
                'link' => "https://drive.google.com/file/d/1tkt8nJPambgRk9P5L_i0b_6CrXHxxC6g/view?usp=drive_link"    
            ],
            [
                'title' => 'Sang Pemimpi',
                'image' => "images/sang_pemimpi.jpg",
                'description_id' => "Sang Pemimpi adalah sebuah novel karya Andrea Hirata, sekuel dari Laskar Pelangi. Novel ini mengisahkan perjuangan Ikal, Arai, dan Jimbron untuk meraih mimpi dan masa depan yang lebih baik melalui pendidikan. Berlatar belakang kehidupan sederhana di Belitung, cerita ini dipenuhi dengan nilai-nilai persahabatan, semangat pantang menyerah, dan keyakinan bahwa mimpi dapat mengubah hidup seseorang.",
                'description_en' => "Sang Pemimpi is a novel by Andrea Hirata, a sequel to Laskar Pelangi. It chronicles the struggles of Ikal, Arai, and Jimbron to achieve their dreams and a better future through education. Set against the backdrop of a simple life in Belitung, the story is filled with the values ​​of friendship, an unyielding spirit, and the belief that dreams can change one's life.",
                'publish_year' => '2006',
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Andrea Hirata'],
                'categories' => ['Novel','Drama', 'Inspiratif'],
                'link' => "https://drive.google.com/file/d/1E_K8xJNjYDf1WEx8pBJNV-GjuCJXb_9q/view?usp=drive_link"    
            ],
            [
                'title' => 'Origin',
                'image' => "images/origin.jpg",
                'description_id' => "Origin adalah novel thriller karya Dan Brown yang mengisahkan petualangan Robert Langdon dalam mengungkap penemuan ilmiah revolusioner yang berpotensi mengubah pemahaman umat manusia tentang asal usul kehidupan dan masa depan umat manusia. Berlatar di Spanyol, cerita ini memadukan sains, teknologi, agama, dan simbolisme dengan ketegangan yang tinggi. Novel ini mengeksplorasi konflik antara kepercayaan tradisional dan kemajuan ilmiah modern.",
                'description_en' => "Origin is a thriller novel by Dan Brown that follows Robert Langdon's adventures in uncovering a revolutionary scientific discovery that has the potential to change humanity's understanding of the origins of life and the future of humanity. Set in Spain, the story blends science, technology, religion, and symbolism with high tension. The novel explores the conflict between traditional beliefs and modern scientific advancements.",
                'publish_year' => '2017',
                'publisher' => 'Doubleday',
                'authors' => ['Dan Brown'],
                'categories' => ['Novel','Thriller', 'Mystery'],
                'link' => "https://drive.google.com/file/d/1D8UURGKM7voJuaAGcPTckPvaTwuECRjg/view?usp=drive_link"     
            ],
            [
                'title' => 'Habis Gelap Terbitlah Terang',
                'image' => "images/habis_gelap.jpg",
                'description_id' => "'Habis Gelap Terbitlah Terang' adalah kumpulan surat karya R.A. Kartini, yang mencatat pemikiran dan perjuangannya untuk emansipasi perempuan di Indonesia. Melalui tulisan-tulisan ini, Kartini mengadvokasi pentingnya pendidikan, kebebasan berpikir, dan hak-hak yang setara bagi perempuan. Karya ini mencerminkan semangat perubahan, harapan, dan optimisme bahwa kemajuan akan muncul setelah periode keterbelakangan dan ketidakadilan.",
                'description_en' => "'After Darkness Comes Light' is a collection of letters by R.A. Kartini, chronicling her thoughts and struggles for women's emancipation in Indonesia. Through these writings, Kartini advocates the importance of education, freedom of thought, and equal rights for women. This work reflects the spirit of change, hope, and optimism that progress will emerge after a period of backwardness and injustice.",
                'publish_year' => '1922',
                'publisher' => 'Balai Pustaka',
                'authors' => ['R.A. Kartini'],
                'categories' => ['Sejarah', 'Biografi'],
                'link' => "https://drive.google.com/file/d/1GVqhwdpGAgn9Keti4W632z_n7-vgd6_8/view?usp=drive_link"     
            ],
            [
                'title' => 'Rich Dad Poor Dad',
                'image' => "images/rich_dad_poor_dad.jpg",
                'description_id' => `Rich Dad Poor Dad adalah buku pengembangan diri dan keuangan karya Robert T. Kiyosaki yang mengeksplorasi perbedaan pola pikir antara orang kaya dan miskin. Dengan membandingkan dua figur ayah—"ayah kaya" dan "ayah miskin"—buku ini menekankan pentingnya literasi keuangan, manajemen aset, dan bagaimana membuat uang bekerja untuk kita. Buku ini mendorong pembaca untuk mengembangkan kebiasaan keuangan yang cerdas, berpikir mandiri, dan dengan berani memanfaatkan peluang investasi untuk mencapai kebebasan finansial.`,
                'description_en' => 'Rich Dad Poor Dad is a self-development and financial book by Robert T. Kiyosaki that explores the differences in mindset between rich and poor people. By comparing two father figures—"rich dad" and "poor dad"—the book emphasizes the importance of financial literacy, asset management, and how to make money work for us. It encourages readers to develop smart financial habits, think independently, and boldly embrace investment opportunities to achieve financial freedom.',
                'publish_year' => '1997',
                'publisher' => 'Warner Books',
                'authors' => ['Robert T. Kiyosaki'],
                'categories' => ['Financial', 'Motivation'],
                'link' => "https://drive.google.com/file/d/1TdmENxXK3Ra-jTlqX6DAoqQG_YFIFVRo/view?usp=drive_link"
            ],
            [
                'title' => 'The Silent Patient',
                'image' => "images/the_silent_patient.jpg",
                'description_id' => "The Silent Patient adalah novel thriller psikologis karya Alex Michaelides. Novel ini mengisahkan Alicia Berenson, seorang pelukis terkenal yang tiba-tiba membunuh suaminya dan kemudian memilih untuk tetap diam. Cerita ini berfokus pada upaya seorang psikoterapis untuk mengungkap alasan di balik kebungkaman Alicia dan misteri yang menyelimuti kasus tersebut. Dengan alur cerita yang penuh ketegangan dan kejutan, novel ini mengeksplorasi sisi gelap psikologi manusia dan trauma tersembunyi.",
                'description_en' => "The Silent Patient is a psychological thriller by Alex Michaelides. It tells the story of Alicia Berenson, a renowned painter who suddenly murders her husband and then chooses to remain silent. The story focuses on a psychotherapist's efforts to uncover the reasons behind Alicia's silence and the mystery surrounding the case. With a plot full of suspense and surprises, the novel explores the dark side of human psychology and hidden trauma.",
                'publish_year' => '2019',
                'publisher' => 'Celadon Books',
                'authors' => ['Alex Michaelides'],
                'categories' => ['Novel','Thriller', 'Psychological'],
                'link' => "https://drive.google.com/file/d/1YtwHrDIsKNud4cb4VVwtcfD_lZhdOnod/view?usp=drive_link"
            ],
            [
                'title' => 'The Subtle Art of Not Giving a F*ck',
                'image' => "images/subtle_art.jpg",
                'description_id' => `"The Subtle Art of Not Giving a F*ck" adalah buku pengembangan diri karya Mark Manson yang membahas cara menjalani hidup yang lebih realistis dan jujur ​​pada diri sendiri. Buku ini menekankan pentingnya memilih apa yang benar-benar layak dipedulikan, dan menerima keterbatasan serta kegagalan sebagai bagian dari kehidupan. Dengan gaya yang lugas dan provokatif, penulis mendorong pembaca untuk fokus pada nilai kehidupan yang bermakna daripada mengejar kebahagiaan yang dangkal.`,
                'description_en' => 'The Subtle Art of Not Giving a F*ck is a self-help book by Mark Manson that discusses how to live a more realistic and honest life with oneself. It emphasizes the importance of choosing what is truly worth caring about, and accepting limitations and failure as part of life. Using a straightforward and provocative style, the author encourages readers to focus on the value of a meaningful life rather than pursuing superficial happiness.',
                'publish_year' => '2016',
                'publisher' => 'Harper',
                'authors' => ['Mark Manson'],
                'categories' => ['Self-Help', 'Motivasi'],
                'link' => "https://drive.google.com/file/d/1ug6NIk_X87oul8KyY7hHPGyn-S7Fz7nS/view?usp=drive_link"
            ],
            [
                'title' => 'Filosofi Kopi',
                'image' => "images/filosofi_kopi.jpg",
                'description_id' => "Filosofi Kopi adalah novel karya Dee Lestari yang mengisahkan persahabatan Ben dan Jody saat mereka merintis kedai kopi dengan idealisme yang kuat. Kisah ini tidak hanya mengeksplorasi dunia kopi tetapi juga mengeksplorasi makna hidup, pencarian identitas, dan nilai-nilai filosofis di balik setiap cita rasa. Melalui dialog yang reflektif dan alur cerita yang sederhana, novel ini mengajak pembaca untuk memahami bahwa setiap pilihan dalam hidup memiliki makna dan konsekuensi.",
                'description_en' => "Filosofi Kopi is a novel by Dee Lestari that tells the story of Ben and Jody's friendship as they pioneer a coffee shop with strong idealism. This story not only explores the world of coffee but also explores the meaning of life, the search for identity, and the philosophical values ​​behind each flavor. Through reflective dialogue and a simple plot, this novel invites readers to understand that every choice in life has meaning and consequences.",
                'publish_year' => '2006',
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Dewi Lestari'],
                'categories' => ['Filosofi', 'Drama'],
                'link' => "https://drive.google.com/file/d/1crX31Q5T2JRFI8k_dPstsJly11M6bLO6/view?usp=drive_link"
            ],
            [
                'title' => 'A Brief History of Time',
                'image' => "images/brief_history_time.jpg",
                'description_id' => "A Brief History of Time adalah buku karya Stephen Hawking yang membahas konsep-konsep fundamental fisika modern, seperti asal usul alam semesta, teori relativitas, mekanika kuantum, lubang hitam, dan waktu. Ditulis dengan bahasa yang relatif sederhana, buku ini dapat dipahami oleh pembaca umum tanpa latar belakang fisika yang mendalam. Melalui karya ini, Hawking mengajak pembaca untuk memahami bagaimana alam semesta bekerja dan perkembangan pemikiran ilmiah manusia dalam menjawab pertanyaan-pertanyaan utama tentang ruang, waktu, dan keberadaan alam semesta.",
                'description_en' => 'A Brief History of Time is a book by Stephen Hawking that discusses the fundamental concepts of modern physics, such as the origins of the universe, the theory of relativity, quantum mechanics, black holes, and time. Written in relatively simple language, it can be understood by general readers without a deep background in physics. Through this work, Hawking invites readers to understand how the universe works and the development of human scientific thought in answering major questions about space, time, and the existence of the universe.',
                'publish_year' => '1988',
                'publisher' => 'Bantam Dell Publishing Group',
                'authors' => ['Stephen Hawking'],
                'categories' => ['Science', 'Non-Fiction'],
                'link' => "https://drive.google.com/file/d/1QibUm8CySZL5PEWQPh-JQ0duUrCUOI7c/view?usp=drive_link"
            ],
            [
                'title' => 'Sherlock Holmes: A Study in Scarlet',
                'image' => "images/study_in_scarlet.jpg",
                'description_id' => "Sherlock Holmes: A Study in Scarlet adalah novel detektif karya Sir Arthur Conan Doyle yang pertama kali memperkenalkan karakter Sherlock Holmes dan Dr. John Watson. Kisah dimulai dengan pertemuan Holmes dan Watson, kemudian berkembang menjadi kasus pembunuhan misterius di London yang penuh teka-teki. Dengan kemampuan observasi yang tajam, logika yang kuat, dan metode penalaran deduktif, Sherlock Holmes mampu mengungkap fakta tersembunyi di balik kejahatan tersebut. Novel ini tidak hanya menyajikan ketegangan investigasi, tetapi juga menekankan pentingnya pemikiran kritis dan ilmiah dalam memecahkan masalah, sehingga meletakkan dasar bagi serial Sherlock Holmes yang terkenal hingga saat ini.",
                'description_en' => 'Sherlock Holmes: A Study in Scarlet is a detective novel by Sir Arthur Conan Doyle that first introduced the characters of Sherlock Holmes and Dr. John Watson. The story begins with the meeting of Holmes and Watson, then develops into a mysterious murder case in London full of puzzles. With sharp observation skills, strong logic, and deductive reasoning methods, Sherlock Holmes is able to uncover the hidden facts behind the crime. This novel not only presents the suspense of the investigation, but also emphasizes the importance of critical and scientific thinking in solving problems, thus laying the foundation for the famous Sherlock Holmes series to this day.',
                'publish_year' => '1887',
                'publisher' => 'Ward Lock & Co.',
                'authors' => ['Arthur Conan Doyle'],
                'categories' => ['Mystery', 'Classic'],
                'link' => "https://drive.google.com/file/d/1SOSC--YKw5oQ4McFg0QgGSNfNwj8JQ5m/view?usp=drive_link"
            ],
            [
                'title' => 'IPA & IPS',
                'image' => "images/ipa_ips.jpg",
                'description_id' => "Masa SMA adalah masa terindah—begitu kata orang. Karena di masa inilah kita menikmati segala hal tentang kehidupan saat kita tumbuh menjadi dewasa, mulai dari bersosialisasi hingga mengalami pengalaman baru, hingga percintaan. Tentu saja, di setiap SMA dengan beragam jurusan, sering terjadi pertengkaran atau perselisihan antar jurusan. Umumnya, jurusan sains dan ilmu sosial memiliki kepribadian yang sangat berbeda. Pada dasarnya, kepribadian siswa sains dan ilmu sosial sangat berbeda. Karena perbedaan itulah, mereka tidak pernah akur. Baik dengan kakak kelas atau teman sekelas, mereka sama saja, seperti kucing dan anjing. 'Mau jadi pacarku?' tanya Rifqi, seorang siswa ilmu sosial, kepada seorang siswi sains, yang menimbulkan kehebohan di sekolah. Bagaimana mungkin? Situasi dengan Michele dan Rifqi berbeda. Michele, seorang siswa sains, jatuh cinta pada Rifqi, seorang siswa ilmu sosial. Kisah mereka dimulai dengan sebuah hukum yang mempertemukan mereka. Di tengah seringnya terjadi perdebatan antara siswa sains dan studi sosial, Rifqi dan Michele mengembangkan hubungan asmara yang tampaknya tidak terpengaruh oleh perbedaan tersebut. Namun, dapat dimengerti bahwa cinta tidak mudah diraih. Kisah cinta mereka diuji oleh kehadiran orang ketiga. Jadi, bagaimana Michele dan Rifqi akan mengatasi ini? Dapatkah mereka akhirnya bersatu meskipun memiliki perbedaan?",
                'description_en' => "High school is the most beautiful time—people say. Because it's during this time that we enjoy everything about life as we grow into adulthood, from socializing to experiencing new experiences, to romance. Of course, in every high school with its diverse majors, there are often arguments or disagreements between majors. Generally, it's the science and social studies majors, which have completely opposite personalities. Basically, the personalities of science and social studies students differ drastically. Just because of their differences, they never get along. Whether with upperclassmen or in the same year, they're the same, like cats and dogs.'Do you want to be my girlfriend?' asked Rifqi, a social studies student, to a science major girl, causing a stir at school. How could that be?The situation with Michele and Rifqi was different. Michele, a science student, fell in love with Rifqi, a social studies student. Their story began with a law that brought them together. Amidst the frequent arguments between science and social studies students, Rifqi and Michele developed a love relationship that seemed unaffected by these differences.However, it's understandable that no love is easily attained. Their love story is tested by the presence of a third person. So, how will Michele and Rifqi overcome this? Can they finally unite despite their differences?",
                'publish_year' => ' 2005',
                'publisher' => 'Coconut Books',
                'authors' => ['Chachaii'],
                'categories' => ['Novel, Romance', 'Drama'],
                'link' => "dsadasdsadada"
            ],
            
            [
                'title' => 'The Psychology of Money',
                'image' => "images/psychology_of_money.jpg",
                'description_id' => "Sukses dalam mengelola keuangan tidak selalu bergantung pada apa yang Anda ketahui. Yang terpenting adalah bagaimana Anda berperilaku. Dan perilaku sulit diajarkan, bahkan kepada orang-orang yang sangat cerdas. Keuangan—investasi, keuangan pribadi, dan keputusan bisnis—biasanya diajarkan sebagai bidang berbasis matematika, di mana data dan rumus memberi tahu kita persis apa yang harus dilakukan. Tetapi di dunia nyata, orang tidak membuat keputusan keuangan di atas spreadsheet. Mereka membuat keputusan tersebut di meja makan, atau di ruang rapat, di mana sejarah pribadi, pandangan unik Anda sendiri tentang dunia, ego, kebanggaan, pemasaran, dan insentif aneh bercampur aduk.",
                'description_en' => "Doing well with money isn't necessarily about what you know. It's about how you behave. And behavior is hard to teach, even to really smart people. Money―investing, personal finance, and business decisions―is typically taught as a math-based field, where data and formulas tell us exactly what to do. But in the real world people don’t make financial decisions on a spreadsheet. They make them at the dinner table, or in a meeting room, where personal history, your own unique view of the world, ego, pride, marketing, and odd incentives are scrambled together.",
                'publish_year' => '2020',
                'publisher' => 'Harriman House',
                'authors' => ['Morgan Housel'],
                'categories' => ['Economy', 'Non-Fiction','Self-Help'],
                'link' => "https://drive.google.com/file/d/1AnUmhI8fA_ZMtBMCMYqbL1plWgtCoa8q/view?usp=drive_link",

            ],
            [
                'title' => 'The Richest Man in Babylon',
                'image' => "images/man_in_babylon.jpg",
                'description_id' => "The Richest Man in Babylon dianggap sebagai karya inspiratif terhebat sepanjang masa tentang penghematan, perencanaan keuangan, dan kekayaan pribadi. Di dalamnya terungkap rahasia untuk memperoleh uang, menyimpan uang, dan membuat uang menghasilkan lebih banyak uang. Memberikan kebijaksanaan finansial melalui perumpamaan, 'Orang Terkaya di Babilonia' awalnya merupakan serangkaian pamflet, yang ditulis oleh penulis dan didistribusikan oleh bank dan perusahaan asuransi. Pamflet-pamflet ini kemudian dikumpulkan menjadi satu, sehingga lahirlah sebuah buku. Dalam versi baru karya Charles Conrad ini, kisah klasik tersebut diceritakan kembali dalam bahasa yang jelas dan sederhana untuk pembaca masa kini. Kisah-kisah yang menarik dan informatif ini akan menuntun Anda pada jalan yang pasti menuju kemakmuran dan kebahagiaan yang menyertainya.",
                'description_en' => "The Richest Man in Babylon is considered as the greatest of all inspirational works on the subject of thrift, financial planning, and personal wealth. Revealed inside are the secrets to acquiring money, keeping money, and making money earn more money.Providing financial wisdom through parables, 'The Richest Man in Babylon' was originally a set of pamphlets, written by the author and distributed by banks and insurance companies. These pamphlets were later bundled together, giving birth to a book. In this new rendering by Charles Conrad, the classic tale is retold in clear, simple language for today's readers. These fascinating and informative stories set you on a sure path to prosperity and its accompanying joys.",
                'publish_year' => '1926',
                'publisher' => 'Chum Change',
                'authors' => ['George S. Clason'],
                'categories' => ['Non-Fiction','Classic','Self-Help'],
                'link' => "https://drive.google.com/file/d/1O6slGbKW8pVuYeeSomqSgWLIuvRyBcea/view?usp=drive_link",
            ],
            [
                'title' => 'The Murder of Roger Ackroyd',
                'image' => "images/The_murder_of.jpg",
                'description_id' => "Roger Ackroyd tahu terlalu banyak. Dia tahu bahwa wanita yang dicintainya telah meracuni suami pertamanya yang brutal. Dia juga menduga bahwa seseorang telah memerasnya. Kemudian dia ditikam hingga tewas.",
                'description_en' => 'Roger Ackroyd knew too much. He knew that the woman he loved had poisoned her brutal first husband. He suspected also that someone had been blackmailing her. Then he is stabbed to death.',
                'publish_year' => '2000',
                'publisher' => 'Berkley',
                'authors' => ['Agatha Christie'],
                'categories' => ['Mystery','Fiction','Thriller'],
                'link' => "https://drive.google.com/file/d/1WhE-wlvJyw09c3HeyZRSYy7sIidv5KcG/view?usp=drive_link"
            ],
            [
                'title' => 'Murder on the Orient Express',
                'image' => "images/Murder_on_the_orient.jpg",
                'description_id' => "Misteri pembunuhan paling terkenal karya Agatha Christie, diterbitkan kembali dengan sampul baru yang mencolok dan sentuhan khusus. Tepat setelah tengah malam, tumpukan salju menghentikan Orient Express. Kereta mewah itu secara mengejutkan penuh untuk waktu tahun ini, tetapi pada pagi harinya jumlah penumpang berkurang satu orang. Seorang taipan Amerika ditemukan tewas di kompartemennya, ditikam belasan kali, pintunya terkunci dari dalam. Terisolasi dan dengan seorang pembunuh di tengah-tengah mereka, detektif Hercule Poirot harus mengidentifikasi pembunuh tersebut - jika ia memutuskan untuk menyerang lagi.",
                'description_en' => "Agatha Christie's most famous murder mystery, reissued with a striking new cover with special finishes. Just after midnight, a snowdrift stops the Orient Express in its tracks. The luxurious train is surprisingly full for the time of the year, but by the morning it is one passenger fewer. An American tycoon lies dead in his compartment, stabbed a dozen times, his door locked from the inside. Isolated and with a killer in their midst, detective Hercule Poirot must identify the murderer - in case he or she decides to strike again.",
                'publish_year' => '2010',
                'publisher' => 'HarperCollins',
                'authors' => ['Agatha Christie'],
                'categories' => ['Mystery','Fiction','Thriller'],
                'link' => "https://drive.google.com/file/d/166lfQLMp1mnhpKnIxU0DY5zWSGofWtWX/view?usp=drive_link"
            ],
            [
                'title' => 'Death on the Nile',
                'image' => "images/Death_on_the_nile.jpg",
                'description_id' => "Poirot berlibur dengan kapal pesiar di Sungai Nil, tetapi memiliki firasat buruk bahwa ada sesuatu yang berbahaya.",
                'description_en' => "Poirot takes a vacation on a cruise on the Nile, but has an uneasy feeling that something is dangerously amiss.",
                'publish_year' => '1992',
                'publisher' => 'HarperCollins',
                'authors' => ['Agatha Christie'],
                'categories' => ['Mystery','Fiction','Thriller'],
                'link' => "https://drive.google.com/file/d/1TSFiEIFuSVAF6AeRwZWSmtLQdabT4qpm/view?usp=drive_link"
            ],
            [
                'title' => 'And Then There Were None',
                'image' => "images/And_Then_there_none.jpg",
                'description_id' => "Satu per satu, sejumlah tamu yang penasaran di sebuah pulau pribadi di lepas pantai Devon mulai meninggal, dan hanya mereka yang sudah meninggal yang terbebas dari kecurigaan.",
                'description_en' => "One by one, a curious assortment guests on a private island off the coast of Devon begin to die and only the dead are above suspicion.",
                'publish_year' => '2004',
                'publisher' => 'Turtleback Books',
                'authors' => ['Agatha Christie'],
                'categories' => ['Mystery','Fiction','Thriller','Classic'],
                'link' => "https://drive.google.com/file/d/1Efcpw6r8fZc29I93XVydm45x9Z2ek2ID/view?usp=drive_link"
            ],
            [
                'title' => 'A Very Merry Christmas',
                'image' => "images/A_very_Merry_christmas.jpg",
                'description_id' => "Ini musimnya bersuka ria -- dan aku berusaha sekuat tenaga! Tapi dalam perjalanan ke New York City untuk bertemu keluargaku untuk liburan, koperku tertukar dengan koper tikus lain... Aduh, sial! Sekarang aku harus bergegas ke seluruh Big Apple untuk melacak tikus itu... dan semua hadiah Natalku! Dan aku, Geronimo Stilton, bukanlah orang yang hebat dalam hal berkeliling Big Apple!",
                'description_en' => "'Tis the season to be jolly -- and holey cheese was I trying! But on my way to New York City to meet my family for the holidays, my luggage got switched with another mouse's... Oh, rats! Now I had to scurry all over the Big Apple trying to track down that mouse... and all my Christmas presents! And I, Geronimo Stilton, am not a big cheese when it comes to getting around the Big Apple!",
                'publish_year' => '2008',
                'publisher' => 'Scholastic',
                'authors' => ['Geronimo Stiltone'],
                'categories' => ['Children','Children','Fiction'],
                'link' => "https://drive.google.com/file/d/1vgF9EeQddQGTRyOgNEEctnP920q7N35m/view?usp=drive_link"
            ],
            [
                'title' => 'Moby Dick',
                'image' => "images/Moby_Dick.jpg",
                'description_id' => "Moby-Dick karya Herman Melville mengisahkan tentang sebuah kapal penangkap paus dan awaknya, yang semakin terombang-ambing ke laut oleh Kapten Ahab yang berapi-api. Terobsesi untuk membunuh paus raksasa yang sebelumnya telah menggigit kaki Ahab, pelaut berpengalaman itu mengarahkan kapalnya untuk menghadapi makhluk tersebut, sementara awak kapal lainnya, termasuk narator muda, Ishmael, dan ahli tombak, Queequeg, harus menghadapi perjalanan mereka yang semakin mengerikan.",
                'description_en' => "Herman Melville's Moby-Dick tells the tale of a whaling ship and its crew, who are carried progressively further out to sea by the fiery Captain Ahab. Obsessed with killing the massive whale, which had previously bitten off Ahab's leg, the seasoned seafarer steers his ship to confront the creature, while the rest of the shipmates, including the young narrator, Ishmael, and the harpoon expert, Queequeg, must contend with their increasingly dire journey.",
                'publish_year' => '2010',
                'publisher' => 'Hadrianum Classics',
                'authors' => ['Herman Melville'],
                'categories' => ['Classic','Fiction','Adventure'],
                'link' => "https://drive.google.com/file/d/1ERtJJWZsCtD7hcbeqRmOSHRH14z0L0eD/view?usp=drive_link"
            ],
            [
                'title' => 'The Art Of War',
                'image' => "images/The_Art_of_War.jpg",
                'description_id' => "Secara luas dianggap sebagai 'Risalah Militer Tertua di Dunia,' karya penting ini mencakup prinsip-prinsip strategi, taktik, manuver, komunikasi, dan perbekalan; penggunaan medan, tembakan, dan musim dalam setahun; klasifikasi dan pemanfaatan mata-mata; perlakuan terhadap tentara, termasuk tawanan, semuanya terdengar modern.",
                'description_en' => "Widely regarded as 'The Oldest Military Treatise in the World,' this landmark work covers principles of strategy, tactics, maneuvering, communication, and supplies; the use of terrain, fire, and the seasons of the year; the classification and utilization of spies; the treatment of soldiers, including captives, all have a modern ring to them.",
                'publish_year' => '1994',
                'publisher' => 'Hachette',
                'authors' => ['Sun Tzu'],
                'categories' => ['Classic','Non-Fiction'],
                'link' => "https://drive.google.com/file/d/1Sqal_6Jux3GZWqj2RoXHXH19fNbaoxM2/view?usp=drive_link"
            ],
            [
                'title' => 'Start with Why',
                'image' => "images/Start_With_Why_15th.jpg",
                'description_id' => "Sinek memulai dengan mengajukan beberapa pertanyaan mendasar: Mengapa beberapa orang dan organisasi lebih inovatif, lebih berpengaruh, dan lebih menguntungkan daripada yang lain? Mengapa beberapa pihak mendapatkan loyalitas yang lebih besar dari pelanggan dan karyawan? Bahkan di antara mereka yang sukses, mengapa hanya sedikit yang mampu mengulangi kesuksesan mereka berulang kali? Buku Start With Why menunjukkan bahwa para pemimpin yang memiliki pengaruh terbesar di dunia—seperti Martin Luther King Jr., Steve Jobs, dan Wright Bersaudara—semuanya berpikir, bertindak, dan berkomunikasi dengan cara yang sama—dan itu adalah kebalikan dari apa yang dilakukan orang lain. Sinek menyebut ide yang kuat ini sebagai 'Lingkaran Emas,' dan ini memberikan kerangka kerja di mana organisasi dapat dibangun, gerakan dapat dipimpin, dan orang-orang dapat diinspirasi. Dan semuanya dimulai dengan WHY.",
                'description_en' => "Sinek opens by asking some fundamental questions: Why are some people and organizations more innovative, more influential, and more profitable than others? Why do some command greater loyalty from customers and employees alike? Even among the successful, why are so few able to repeat their success over and over? Start With Why shows that the leaders who've had the greatest influence in the world--think Martin Luther King Jr., Steve Jobs, and the Wright Brothers--all think, act, and communicate the same way -- and it's the opposite of what everyone else does. Sinek calls this powerful idea 'The Golden Circle,' and it provides a framework upon which organizations can be built, movements can be led, and people can be inspired. And it all starts with WHY.",
                'publish_year' => '2009',
                'publisher' => 'Penguin',
                'authors' => ['Simon Sinek'],
                'categories' => ['Self-Help','Non-Fiction'],
                'link' => "https://drive.google.com/file/d/1AH_CEkL-Q4RFF-_otYxGtLdtW3MgTdxi/view?usp=drive_link"
            ],
            [
                'title' => 'Five On A Treasure Island',
                'image' => "images/The_Famous_Five.jpg",
                'description_id' => "Inilah kisah bagaimana 'Lima Sekawan Terkenal' terbentuk, dan petualangan pertama mereka bersama. Dan sungguh petualangan yang luar biasa. Melibatkan sebuah pulau, kastil yang hancur, bangkai kapal kuno, dan perburuan harta karun yang menegangkan. Keberanian dan kecerdasan anak-anak tersebut menyelamatkan kekayaan keluarga dan memungkinkan lebih banyak ekspedisi menarik bagi Kelima Sekawan.",
                'description_en' => "This is the story how the 'Famous Five' came into being, and of their very first adventure together. And what an adventure it was. Involving an island, a ruined castle, an ancient wreck, and a desperate treasure hunt The children's pluck and resourcefulness saved the family fortunes and made possible many more exciting expeditions for the Five.",
                'publish_year' => '2008',
                'publisher' => 'Hachette',
                'authors' => ['Enid Blyton'],
                'categories' => ['Children','Fiction','Adventure'],
                'link' => "https://drive.google.com/file/d/1qBXkfX8cnNWYPewNeG5RORykoDln2sim/view?usp=drive_link"
            ],
            [
                'title' => "Five Go To Smuggler's Top",
                'image' => "images/The_Famous_Five_2.jpg",
                'description_id' => "Seandainya Paman Quentin memangkas pohon abu yang terlalu berat di bagian atasnya, badai tidak akan menumbangkannya ke Pondok Kirrin, dan kemudian Kelima Bersaudara tidak akan pergi ke Smuggler's Top untuk tinggal bersama Sooty Lenoir dan ayahnya yang eksentrik. Tetapi begitu sampai di sana, hal-hal aneh dan sangat mencurigakan tampaknya terjadi, satu demi satu. Timmy juga mengalami banyak kejadian seru, keluar masuk lorong bawah tanah, dan di rawa-rawa laut sekitarnya. Ini adalah petualangan keempat Kelima Bersaudara.",
                'description_en' => "If Uncle Quentin had had the top-heavy ash tree lopped, the gale would not have brought it crashing down on to Kirrin Cottage, and then the Five would not have gone to Smuggler's Top to stay with Sooty Lenoir and his eccentric father. But once there, queer and highly suspicious things seemed to happen, one after the other. Timmy, too, had his fair share of excitement, in and out of underground passages, and on the surrounding sea-marshes. This is the Five;s fourth adventure..",
                'publish_year' => '2010',
                'publisher' => 'Hachette',
                'authors' => ['Enid Blyton'],
                'categories' => ['Children','Fiction','Adventure'],
                'link' => "https://drive.google.com/file/d/1bSoFATTpCI8on3iFZTb6tJ2z0qckA1b3/view?usp=drive_link"
            ],
            [
                'title' => "Angels & Demons",
                'image' => "images/Angel_and_demon.jpg",
                'description_id' => "Ketika ahli simbol terkenal dunia dari Harvard, Robert Langdon, dipanggil untuk tugas pertamanya ke sebuah fasilitas penelitian Swiss untuk menganalisis simbol misterius—yang terukir di dada seorang fisikawan yang dibunuh—ia menemukan bukti yang tak terbayangkan: kebangkitan kembali persaudaraan rahasia kuno yang dikenal sebagai Illuminati...organisasi bawah tanah paling kuat yang pernah ada di bumi. Illuminati kini muncul untuk melaksanakan fase terakhir dari balas dendam legendarisnya terhadap musuh yang paling dibencinya—Gereja Katolik. Ketakutan terburuk Langdon terkonfirmasi pada malam sebelum konklaf suci Vatikan, ketika seorang utusan Illuminati mengumumkan bahwa mereka telah menyembunyikan bom waktu yang tak terhentikan di jantung Kota Vatikan. Dengan hitungan mundur yang sedang berlangsung, Langdon terbang ke Roma untuk bergabung dengan Vittoria Vetra, seorang ilmuwan Italia yang cantik dan misterius, untuk membantu Vatikan dalam upaya putus asa untuk bertahan hidup.",
                'description_en' => "When world-renowned Harvard symbologist Robert Langdon is summoned to his first assignment to a Swiss research facility to analyze a mysterious symbol—seared into the chest of a murdered physicist—he discovers evidence of the unimaginable: the resurgence of an ancient secret brotherhood known as the Illuminati...the most powerful underground organization ever to walk the earth. The Illuminati has now surfaced to carry out the final phase of its legendary vendetta against its most hated enemy—the Catholic Church. Langdon's worst fears are confirmed on the eve of the Vatican's holy conclave, when a messenger of the Illuminati announces they have hidden an unstoppable time bomb at the very heart of Vatican City. With the countdown under way, Langdon jets to Rome to join forces with Vittoria Vetra, a beautiful and mysterious Italian scientist, to assist the Vatican in a desperate bid for survival.",
                'publish_year' => '2005',
                'publisher' => 'Atria',
                'authors' => ['Dan Brown'],
                'categories' => ['Mystery','Fiction','Thriller'],
                'link' => "https://drive.google.com/file/d/1TPq0Ma72UNrQNZwuDtth4LoOtDY8TmQG/view?usp=drive_link"
            ],
            [
                'title' => "Diary of a Wimpy Kid",
                'image' => "images/Diary_of_a_Wimpy_kid.jpg",
                'description_id' => "Greg Heffley mendapati dirinya berada di tahun ajaran baru dan sekolah baru di mana anak-anak yang bertubuh kecil dan lemah berbagi koridor dengan anak-anak yang lebih tinggi dan lebih jahat. Karena sangat ingin membuktikan kedewasaannya, Greg senang memiliki sahabat karibnya, Rowley, yang menemaninya. Tetapi ketika popularitas Rowley mulai meningkat, Greg mencoba menggunakan popularitas sahabatnya itu untuk keuntungannya sendiri.",
                'description_en' => "Greg Heffley finds himself in a new year and school where undersize weaklings share the corridors with kids who are taller and meaner. Desperate to prove his maturity, Greg is happy to have his sidekick, Rowley, along for the ride. But when Rowley's star starts to rise, Greg tries to use his best friend's popularity to his own advantage.",
                'publish_year' => '2009',
                'publisher' => 'Amulet Books',
                'authors' => ['Jeff Kiney'],
                'categories' => ['Children','Fiction'],
                'link' => "https://drive.google.com/file/d/1Uei0E-3xTe9R5TtWfvzL2ABjF91P12GJ/view?usp=drive_link"
            ],
            [
                'title' => "Atomic Habits",
                'image' => "images/Atomic_habit.jpg",
                'description_id' => "Jika Anda kesulitan mengubah kebiasaan Anda, masalahnya bukan pada Anda. Masalahnya adalah sistem Anda. Kebiasaan buruk berulang lagi dan lagi bukan karena Anda tidak ingin berubah, tetapi karena Anda memiliki sistem yang salah untuk perubahan. Anda tidak akan mencapai tingkat tujuan Anda. Anda akan jatuh ke tingkat sistem Anda. Di sini, Anda akan mendapatkan sistem yang terbukti dapat membawa Anda ke tingkat yang lebih tinggi. Clear dikenal karena kemampuannya untuk menyederhanakan topik-topik kompleks menjadi perilaku sederhana yang dapat dengan mudah diterapkan dalam kehidupan dan pekerjaan sehari-hari. Di sini, ia memanfaatkan ide-ide yang paling terbukti dari biologi, psikologi, dan ilmu saraf untuk menciptakan panduan yang mudah dipahami untuk menjadikan kebiasaan baik tak terhindarkan dan kebiasaan buruk mustahil. Sepanjang perjalanan, pembaca akan terinspirasi dan terhibur dengan kisah-kisah nyata dari peraih medali emas Olimpiade, seniman pemenang penghargaan, pemimpin bisnis, dokter penyelamat jiwa, dan komedian terkenal yang telah menggunakan ilmu kebiasaan kecil untuk menguasai keahlian mereka dan melesat ke puncak bidang mereka.",
                'description_en' => "If you're having trouble changing your habits, the problem isn't you. The problem is your system. Bad habits repeat themselves again and again not because you don't want to change, but because you have the wrong system for change. You do not rise to the level of your goals. You fall to the level of your systems. Here, you'll get a proven system that can take you to new heights. Clear is known for his ability to distill complex topics into simple behaviors that can be easily applied to daily life and work. Here, he draws on the most proven ideas from biology, psychology, and neuroscience to create an easy-to-understand guide for making good habits inevitable and bad habits impossible. Along the way, readers will be inspired and entertained with true stories from Olympic gold medalists, award-winning artists, business leaders, life-saving physicians, and star comedians who have used the science of small habits to master their craft and vault to the top of their field.",
                'publish_year' => '2018',
                'publisher' => 'Penguin',
                'authors' => ['James Clear'],
                'categories' => ['Self-Help','Non-Fiction'],
                'link' => "https://drive.google.com/file/d/1uVTk82zGtctf01gDJMWXwaELcbtRegPO/view?usp=drive_link"
            ],
            
            
        ];

        foreach ($books as $b) {

            // Create book
            $book = Book::create([
                'title' => $b['title'],
                'image' => $b['image'],
                'description_id' => $b['description_id'],
                'description_en' => $b['description_en'],
                'publisher' => $b['publisher'],
                'publish_year' => $b['publish_year'],
                'link' => $b['link'],
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
