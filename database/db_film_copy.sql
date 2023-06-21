-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jun 2023 pada 16.24
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_film_copy_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktor`
--

CREATE TABLE `aktor` (
  `id_aktor` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `aktor`
--

INSERT INTO `aktor` (`id_aktor`, `nama`, `tgl_lahir`, `foto`) VALUES
(8, 'Vin Diesel', '2023-06-12', '705332838_download (1).jpeg'),
(12, 'Ryan Reynolds', '1986-10-28', '155638160_aktor 1.jpeg'),
(13, 'Hugh Jackman', '2023-06-15', '1555835734_download (1).jpeg'),
(14, 'Dakota Goyo', '1997-03-12', '16063918_aktor 1.jpeg'),
(15, 'Evangeline Lilly', '2023-06-19', '1425358951_download (1).jpeg'),
(16, 'John Gatins', '1988-12-22', '264154355_download (1).jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aktor_film`
--

CREATE TABLE `aktor_film` (
  `id_aktor_film` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `id_aktor` int(11) NOT NULL,
  `nama_pemeran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `aktor_film`
--

INSERT INTO `aktor_film` (`id_aktor_film`, `id_film`, `id_aktor`, `nama_pemeran`) VALUES
(6, 6, 12, 'Adam'),
(7, 5, 8, 'Dominic Toretto'),
(8, 8, 13, 'Charlie Kenton'),
(9, 8, 14, 'Max Kenton'),
(10, 8, 15, 'Bailey Tallet'),
(11, 8, 16, 'Kingpin'),
(12, 9, 8, 'Polisi'),
(13, 10, 12, 'Iron Man'),
(14, 11, 15, 'Adam'),
(15, 12, 15, 'Kong'),
(16, 13, 15, 'Dahlia'),
(17, 15, 14, 'Dester'),
(18, 16, 14, 'Megawati'),
(19, 17, 8, 'Puan'),
(20, 18, 8, 'gg'),
(21, 22, 14, 'hhh'),
(22, 19, 8, 'hhh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul_film` varchar(125) NOT NULL,
  `durasi` int(11) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `sinopsis` text NOT NULL,
  `link_trailer` varchar(225) NOT NULL,
  `tgl_tayang` date NOT NULL,
  `jenis_tayang` enum('Tayang hari ini','Coming soon','Tidak tayang','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `durasi`, `rating`, `sinopsis`, `link_trailer`, `tgl_tayang`, `jenis_tayang`) VALUES
(5, 'Fast X', 120, 'D', 'Selama banyak misi dan melawan rintangan yang mustahil, Dom Toretto dan keluarganya telah mengakali dan mengalahkan setiap musuh di jalan mereka. Sekarang, mereka menghadapi lawan paling mematikan yang pernah mereka hadapi: Ancaman mengerikan yang muncul dari bayang-bayang masa lalu yang dipicu oleh dendam berdarah, dan yang bertekad untuk menghancurkan keluarga ini dan menghancurkan segalanyadan semua orangyang dicintai Dom, selamanya. Dalam Fast Five 2011, Dom dan krunya mengalahkan gembong narkoba Brasil Hernan Reyes yang jahat dan memenggal kerajaannya di sebuah jembatan di Rio De Janeiro. Apa yang tidak mereka ketahui adalah bahwa putra Reyes, Dante, menyaksikan semuanya dan telah menghabiskan 12 tahun terakhir mendalangi rencana untuk membuat Dom membayar harga tertinggi. Plot Dante akan menyebarkan keluarga Dom dari Los Angeles ke katakombe Roma, dari Brasil ke London dan dari Portugal ke Antartika. Sekutu baru akan ditempa dan musuh lama akan muncul kembali. Tapi semuanya berubah ketika Dom menemukan bahwa putranya sendiri yang berusia 8 tahun adalah target utama balas dendam Dante.', 'youtube.com/watch?v=eoOaKN4qCKw', '2023-06-09', 'Tayang hari ini'),
(6, 'The Adam Project', 106, 'SU', 'Adam dewasa (Ryan Reynolds) yang kabur setelah mencuri Jet penjelajah waktu di tahun 2050 terdampar di tahun 2022. Dalam kondisi terluka dan pulang ke \"rumahnya\", ia bertemu dengan Adam kecil (Walker Scobell) yang kala itu berusia 12 tahun. Bertemu dan meminta tolong pada Adam kecil adalah satu-satunya cara agar Adam dewasa bisa melanjutkan misinya melintasi waktu.\r\n\r\nAdam dewasa pergi menjelajah waktu demi mencari kekasihnya Laura (Zoe Saldana) yang menurut informasi melompat ke tahun 2018 dan tidak kembali ke 2050. Selain itu, Adam dewasa juga menjelaskan bagaimana kekacauan teknologi yang terjadi di masa depan akibat partner kerja ayah mereka yang bernama Maya Sorian (Catherine Keener). Sementara ayah mereka (Mark Ruffalo) diceritakan telah meninggal 1,5 tahun yang lalu.\r\n\r\nAdam kecil diberitahu bahwa teknologi yang dikembangkan ayah mereka justru membuat kehidupan masyarakat di masa depan menjadi kacau karena Maya menggunakannya demi kepentingan pribadi. Namun, siapa sangka ketika dua Adam dikejar-kejar pasukan Dystopian, Laura muncul membantu mereka untuk kabur. Di tengah jeda pelarian mereka, kedua Adam kembali ke 2018 dengan terpaksa meninggalkan Laura di 2022.\r\n\r\nDi tahun 2018, mereka berdua bertemu dengan ayah mereka. Tanpa basa-basi terlalu lama, kedua Adam mencoba merusak teknologi yang mengakibatkan kekacauan penjelajahan waktu di masa depan. Meskipun awalnya mendapat penolakan dari sang ayah, pada akhirnya mereka bisa melanjutkan misi ini. Bagaimana kisah mereka dan konsekuensi perjalanan waktu yang dialami?', 'https://www.youtube.com/embed/IE8HIsIrq4o', '2022-02-28', 'Tidak tayang'),
(8, 'Real Steel', 124, 'SU', 'Dikisahkan pada tahun 2020, olahraga tinju telah mengalami perubahan ke arah yang lebih modern. Di mana, keterbatasan manusia saling beradu di atas ring, mulai tergantikan oleh teknologi robot yang dikendalikan manusia melalui remote control.Para robotlah yang bertarung layaknya petinju. Kekerasan nyata tanpa kontrol. Saling membantai sampai hancur berkeping-keping. Itulah tujuan akhirnya. adegan pertarungan di real steelCerita Film diawali dari kehidupan Charlie Kenton (Hugh Jackman). Sang legenda tinju yang berjuang dari kesulitan hidup akibat hutang yang menumpuk karena selalu kalah dalam pertarungan tinju antar robot.\r\n\r\nThe Ambush, robot terakhir sisa harapannya, harus kalah pada pertunjukan terakhir melawan banteng. Memaksanya untuk segera mencari pengganti sekaligus melunasi hutang-hutang.Kebetulan pada saat bersamaan di pengadilan, pemutusan hakim perkara hak asuh anak sedang dilaksanakan. Melihat hal itu, Charlie membuat perjanjian dengan ayah angkat Max, agar membayar 100.000 dollar.Dari situlah awal petualangan baru dimulai, antara ayah dan anak yang baru bertemu. Saling berdebat dan merasa paling benar. Charlie lagi-lagi harus menelan kekecewaan. Noisy Boy, robot baru yang dibeli dari uang perjanjian harus terbantai habis-habisan di atas ring. real steel sinopsis\r\n\r\nKarena sudah tidak ada peluang untuk memiliki robot baru, Charlie dan Max menuju ke tempat pembuangan. Karena ketidakhati-hatiannya, Max terjatuh dan beruntung tersangkut di sebuah rongsokan lengan robot. Sebuah robot yang akan menjadi tolak balik kehidupan keduanya.Dari sisa onderdil Ambush dan Noisy Boy, dengan bantuan Bailey seorang teknisi, Robot bernama ATOM dari Generesi kedua keluaran tahun 2014 berhasil dihidupkan kembali.Meskipun bertubuh kecil, Atom yang digerakkan berdasarkan respon proteksi dari gerakan Max dan Charlie mampu menghajar lawan-lawannya yang lebih besar. Akhirnya, taruhan demi taruhan berhasil dilalui, Atom semakin terkenal di kalangan pertandingan tinju antar robot.Sampai akhirnya, mereka menuju ke pentas pertandingan tinju bergengsi di dunia. Sebuah ajang pertarungan antar robot dengan teknologi terbaru di WRB', 'https://www.youtube.com/embed/obYuPJH2oTE', '2011-10-28', 'Tidak tayang'),
(9, 'The Raid', 123, 'D', 'Film The Raid mengisahkan tentang langkah kepolisian untuk menumpas salah satu gembong narkoba, yang berada di apartemen tak terawat di salah satu wilayah Jakarta.Film The Raid menghadirkan beberapa konflik yang saling berhubungan. Cerita besar dari Film The Raid tentang langkah menangkap pimpinan mafia narkoba yang dipimpin Tama Riyadi (Ray Sahetapy), yang sangat susah ditangkap. Tama memiliki orang kepercayaan bernama Mad Dog  (Yayan Ruhiyan) yang jago bela diri dan Andi (Donny Alamsyah) yang pandai berbisnis narkoba. Dalam penumpasan gembong narkoba ini dipimpin Sersan Jaka (Joe Taslim) dengan beberapa anak buah, satu di antaranya yaitu Rama (Iko Uwais). Di mana Andi dan Rama adalah kakak beradik, tetapi Andi telah lama pergi dari keluarganya tanpa diketahui kabarnya. Apakah tim penyerbuan yang dipimpun Sersan Jaka ini mampu melumpuhkan Tama, bagaimana juga dengan pertemuan Rama dan Andi? Film The Raid penuh dengan adegan bela diri, termasuk bela diri khas Indonesia yaitu pencak silat. Film bergenre action ini menghadirkan berbagai ketegangan cerita mulai dari awal hingga akhir, dibalut dengan rasa haru.', 'https://www.youtube.com/embed/m6Q7KnXpNOg', '2012-03-29', 'Tidak tayang'),
(10, 'Marvel Avenger:Invinity War', 210, 'BO +13', 'Avengers: Infinity War merupakan film ketiga dari Avengers setelah The Avengers dan The Avengers: Age Ultron.\r\nFilm ini digarap oleh sutradara Russo Brothers (Anthony Russo dan Joe Russo) dan diangkat dari Marvel Comic yang ditulis oleh Stan Lee.Dalam pembuatannya, anggaran yang dihabiskan dalam film ini mencapai 400 juta dolar Amerika Serikat. Dalam Infinity War, para superhero yang tergabung dalam Avengers berusaha mencegah Thanos yang berambisi untuk mengumpulkan enam batu abadi yang tersebar di berbagai tempat. Jika Thanos berhasil memiliki keenam batu tersebut, Thanos akan menjadi tak terkalahkan dan menjadi makhluk terkuat yang dapat mengendalikan semesta, bahkan memusnahkan planet. Dengan batu-batu yang disebut infinity stone tersebut, Thanos berniat untuk menghilangkan separuh populasi semesta yang menurutnya dapat membuah kehidupan lebih sejahtera. Niat tersebut pertama kali diketahui oleh Bruce Banner dan Thor. Bruce Banner atau Hulk kemudian memberi tahu anggota Avengers lainnya. Hulk kembali ke bumi dan memberi tahu Tony Stark, Doctor Strange, dan Wong. Bruce Banner memberi tahu Dr Strange, Tony Stark, dan Wong mengenai niat Thanos untuk menghancurkan separuh populasi Bumi namun Thanos berhasil membuat kegaduhan sebelum para superhero mencegahnya.\r\n\r\nBruce Banner memberi tahu Dr Strange, Tony Stark, dan Wong mengenai niat Thanos untuk menghancurkan separuh populasi Bumi namun Thanos berhasil membuat kegaduhan sebelum para superhero mencegahnya. (imdb.com)\r\nNaasnya, Thanos sudah berhasil muncul di Bumi sebelum mereka bertindak. Hampir semua karakter superhero Marvel muncul dalam film ini untuk berusaha mengalahkan Thanos. Anggota Guardians of the Galaxy menemukan Thor yang jatuh di atas kapal mereka dan akhirnya mereka membantu Thor ke planet lain untuk membuat senjata baru Thor. Nyawa Vision ikut terancam karena dirinya memiliki salah satu dari keenam infinity stone tersebut. Steve Rogers kemudian membawa Vision dan Scarlett Witch ke Wakanda. Captain America menganggap satu-satunya tempat paling aman dan memiliki teknologi paling canggih untuk menyelamatkan Vision adalah Wakanda. Dengan keadaan yang terpisah-pisah, para anggota Avengers dan lainnya berusaha mencegah Thanos untuk mendapatkan infinity stone.', 'https://www.youtube.com/embed/GlPk8YhN4Pk', '2018-04-25', 'Tidak tayang'),
(11, 'Wonder Woman 1984', 145, 'BO +13', 'Pada 1984, Diana Prince (Gal Gadot) memulai babak baru kehidupannya sebagai arkeolog di Washington D.C. Pasca pertarungan besar yang merenggut nyawa Steve Trevor (Chris Pine) dan orang-orang terdekatnya, Diana masih dirundung duka mendalam. Baca juga: Wonder Woman 1984 Pastikan Dirilis di Bioskop Indonesia 16 Desember Hal ini juga yang kemudian membuat Diana memilih untuk tidak menjalin kedekatan dengan siapa pun. Meski begitu, Diana memiliki hubungan baik dengan rekan kerjanya di Museum Smithsonian, Barbara Ann Minerva (Kristen Wiig). \r\n\r\nBarbara merupakan arkeolog yang terobsesi dengan legenda sebuah suku di Afrika, yang memiliki kekuatan layaknya seekor Cheetah. Baca juga: Dari Honor Kecil, Gal Gadot Kini Dibayar 33 Kali Lipat untuk Wonder Woman 1984 Obsesi gila sang doktor membawanya pada ritual pemanggilan dewa Urzkartaga dan keduanya pun membuat perjanjian. Dari sini, Barbara memperoleh kekuatan super seperti keabadian dan kekuatan fisik serupa dengan Cheetah. \r\n\r\nSeiring dengan perubahan yang terjadi pada dirinya, Barbara juga mulai menampakkan kebencian pada sosok Diana atau Wonder Woman.  Max Maxwell Lord (Pedro Pascal) juga muncul sebagai ancaman baru yang harus dihadapi Wonder Woman. Pria yang dikenal sebagai pebisnis paling sukses di Amerika Serikat itu ternyata menyimpan obsesi gila akan kekuasaan. Saat Maxwell dan Barbara bertemu, tak butuh waktu lama bagi keduanya untuk merancang misi dalam menghancurkan Wonder Woman.', 'https://www.youtube.com/embed/sfM7_JLk-84', '2020-12-16', 'Tidak tayang'),
(12, 'Godzilla vs. Kong', 125, 'SU', 'Lima tahun setelah Godzilla mengalahkan King Ghidorah, monster dari laut itu terdeteksi muncul kembali dan meluluhlantakkan fasilitas teknologi milik perusahaan Apex di Pensacola. Bernie, salah satu karyawan Apex, menemukan perangkat besar di basement paling bawah ketika Godzilla menghancurkan tempat itu. Sebagai salah satu artis podcast, Bernie menceritakan semua kejadian di kanal podcast-nya. Sementara itu, Kong bangun tidur dalam kondisi marah dan melempar sebuah batang pohon ke langit yang ternyata adalah sebuah kubah terselubung. Jia, bocah cilik yang dekat dengannya, mengabarkan kepada Dr. Ilene tentang kondisi Kong. Di tempat lain, Dr. Lind disambangi oleh Walter, CEO Apex, untuk diminta bantuannya menemukan sumber tenaga di Hollow Earth. Lind mengunjungi Ilene dengan mengajukan ide untuk membawa Kong menemukan jalan menuju Hollow Earth. Dalam perjalanan laut, mereka tiba-tiba diserang oleh Godzilla. Terjadi pertarungan di laut yang banyak menelan korban jiwa dan hancurnya banyak kapal laut. Dengan mematikan mesin kapal, mereka berhasil mengelabui Godzilla untuk pergi dari tempat itu. Sementara itu di Pensacola, Madison Russell dan Josh berhasil membujuk Bernie untuk membawa mereka ke reruntuhan fasilitas teknologi Apex untuk menemukan perangkat besar yang pernah dilihatnya. Tidak menemukan perangkat itu, mereka justru terbawa di dalam kargo yang dikirim ke Hong Kong melalui lorong rahasia.\r\n\r\nTidak berdaya setelah bertarung dengan Godzilla, Kong dibawa ke Antartika dengan menggunakan puluhan helikopter. Sesampainya disana, Jia berhasil meyakinkan Kong untuk masuk ke dalam lorong menuju Hollow Earth yang kemudian diikuti oleh mereka dengan mengendarai HEAV. Mereka takjub dengan pemandangan Hollow Earth yang tampak seperti lipatan kertas dimana posisi atas sama dengan bawahnya dan minim akan daya gravitasi. Di sana Kong menemukan sisa kaumnya dan mengambil sebuah kapak yang terbuat dari salah satu sirip punggung Godzilla. Kapak itu bereaksi dan membuat Godzilla yang berada di Hong Kong menembakkan sinar dari mulutnya. Efek sinar itu adalah sebuah lubang raksasa yang tembus hingga ke Hollow Earth. Kong segera keluar dari Hollow Earth menyambut tantangan Godzilla. Maia mengambil sampel sumber tenaga yang langsung dikirim secara daring ke pusat fasilitas teknologi Apex Hong Kong yang sedang mengaktifkan Mechagodzilla, robot Godzilla berukuran raksasa. Ketika mendapat tenaga itu, Mechagodzilla lepas kontrol dari kendali Ren Serizawa dan mulai melakukan pengrusakan di Hong Kong. Tentu saja aksinya ini langsung disambut oleh Godzilla. Apakah akan terjadi pertarungan segitiga antara mereka? Atau justru Godzilla dan Kong bersekutu? ', 'https://www.youtube.com/embed/odM92ap8_c0', '2021-03-24', 'Tidak tayang'),
(13, 'A Star is Born', 127, 'D', 'Film A Star is Born menceritakan tentang kisah 2 penyanyi terkenal bernama Jackson Maine dan Ally yang saling jatuh cinta. Di awal cerita ditampilkan kalau Jackson sudah terkenal dan punya banyak penggemar. Namun, di balik kepopulerannya itu, ia memiliki masalah dengan alkohol dan obat-obatan. Dua hal ini yang nantinya menghancurkan karier Jackson secara perlahan. Sementara itu, Ally, seorang pekerja biasa yang bermimpi jadi penyanyi diajak temannya pergi ke klub. Di sana ia menyanyi di atas panggung dan mencuri perhatian Jackson yang kala itu juga berkunjung kesana. Keduanya lantas bertemu dan ngobrol di ruang dressing. \r\n\r\nSejak saat itu, Jackson dan Ally kerap menghabiskan waktu bersama. Bahkan, Ally juga berkesempatan menyanyikan lagu ciptaannya di konser Jackson. Perlahan, karir Ally mulai naik sejak ia bertemu produser musik dan merilis lagu-lagunya. Sementara itu, karier Jackson semakin merosot karena masalah alkohol dan obat-obatan. Saking parahnya, ia bahkan sempat berbuat onar di panggung ketika Ally sedang berpidato karena meraih piala Grammy. Kini, Ally dipusingkan dengan pilihan antara karier atau cinta. Apakah ia rela mengorbankan karier dan menemani Jackson melalui masa-masa sulitnya? Atau ia akan terus mengejar mimpinya sebagai top star dan meninggalkan Jackson?', 'https://www.youtube.com/embed/ykCu1himOK8', '2018-10-19', 'Tidak tayang'),
(14, 'The Last Letter from Your Lover', 140, 'D', 'Letter From Your Lover, film yang diangkat dari novel dengan judul yang sama, mengungkapkan kenyataan tersebut. Pernikahan seseorang bukan jaminan ia telah menemukan cinta sejatinya. Cerita dalam film ini berawal dari penemuan seorang jurnalis perempuan, Ellie Haworth (Felicity Jones) yang menemukan setumpuk surat-surat cinta di tengah proses riset untuk artikel terbarunya. Surat-surat tersebut tertulis nama pengirim Anthony O’Hare (Callum Turner) dan ditujukan kepada Jennifer Stirling (Shailene Woodley). Surat ditulis sejak tahun 1965 tersebut, memuat rangkaian kisah di balik masing-masing pernikahan. Berdasarkan pembacaan Ellie Haworth, pengiriman surat tersebut bukan surat biasa, melainkan sebuah perselingkuhan. Sebab, dalam surat tersebut Anthony begitu memuja Jennifer. Padahal, Jennifer sendiri sudah menikah dengan seorang pria tampan dan kaya raya, Laurence Stirling (Joe Alwyn). Namun, siapa sangka, kehidupan pernikahan Jennifer dan Laurence yang tampak sempurna, tidak perlu memikirkan cicilan, tidak perlu mikir ribuan kali saat check out belanjaan, dan tidak perlu repot kekurangan uang saat beli barang mahal, punya kisah yang tak membahagiakan di dalamnya. \r\n\r\nJennifer merasa tidak pernah mendapatkan kebahagiaannya sebagai seorang partner dalam rumah tangga bersama suaminya. Oleh karena itu, munculnya Anthony dalam fase-fase labil Jennifer ini membuatnya punya pilihan lain dari pasangan resminya. Jennifer seperti menemukan oase di tengah kekeringan pernikahannya yang gersang bagai gurun. Melalui surat-surat yang dikirimkan Anthony, Jennifer seperti punya hasrat kembali untuk melanjutkan hidup. Setelah membaca berlembar-lembar surat tersebut, Ellie tidak menemukan akhir dari kisah dari surat tersebut. Apakah keduanya bercerai dari pasangan resminya dan memutuskan untuk kehidupan yang baru? Tidak ada jawaban dari lembar surat terakhir yang dibacanya. Berbekal dari surat-surat yang telah ia baca, Ellie memutuskan untuk menginvestigasi kedua tokoh dalam surat itu dan menemukan jawaban akhir dari kisah tersebut.', 'https://www.youtube.com/embed/Y-I3DuUOsNw', '2021-07-23', 'Tidak tayang'),
(15, 'The Worst Person In The World', 210, 'D', 'The Worst Person in the World merupakan film drama komedi arahan Joachim Trier sebagai penutup dari trilogi ‘Oslo’. Menempatkan Renate Reinsve sebagai pemeran utamanya, film ini berkisah tentang Julie, seorang wanita berumur 30 tahun yang memiliki gaya hidup bebas. Akan tetapi, hidupnya berubah ketika dirinya memiliki hubungan dekat dengan dua pria dan mulai berkontemplasi dengan hidupnya kini dan nanti.\r\n\r\nJoachim Trier mengemas plot dalam ‘The Worst Person in the World’ ini dengan sesederhana mungkin mengenai perjalanan hidup seorang wanita dalam menghadapi kemelut di depan matanya. Meski begitu, cerita sederhana tersebut disisipkan berbagai isu, seperti mengenai karier, asmara, hingga membangun keluarga. Elemen-elemen inilah yang membuat film drama komedi ini akan sangat mudah untuk diilhami, terutama bagi penonton yang sudah cukup berumur. Walaupun ‘The Worst Person in the World’ hadir dengan alur penceritaan yang cenderung maju, film Joachim Trier ini dikemas dengan format episodic dengan beberapa bagian yang ditampilkan secara jelas. \r\n\r\nTidak hanya membuat cerita lebih mudah dipahami, format yang seperti ini juga dapat memberikan waktu bagi penonton untuk rehat sebelum memasuki part yang baru. Akhir kata, ‘The Worst Person in the World’ adalah film drama komedi dari Joachim Trier yang tampil sederhana dengan kisah wanita dalam menghadapi kekhawatiran di hidupnya. Melalui kemasan yang ditampilkan sangat simpel, film ini bisa jadi cerminan bagi penonton untuk menilik kembali apa yang harus dilakukan dalam hidupnya, baik untuk sekarang dan nanti.', 'https://www.youtube.com/embed/mwPR9UeRy4Q', '2021-10-13', 'Tidak tayang'),
(16, 'Decision to Leave', 144, 'D', 'Decision to Leave berkisah tentang Hae Joon (Park Hae Il), detektif yang ramah, penuh ambisi, dan berdedikasi terhadap pekerjaannya, terlebih saat melakukan investigasi kasus. Suatu hari, seorang pria ditemukan meninggal akibat jatuh dari puncak gunung. Kematian itu menimbulkan banyak kecurigaan. Hae Joon kemudian diperintahkan untuk melakukan penyelidikan tersebut. Tiba-tiba, Hae Joon bertemu dengan Seo Rae (Tang Wei) yang merupakan istri dari korban meninggal. Seo Rae ikut turun tangan dalam proses penyelidikan sekaligus menemani Hae Joon. Padahal Hae Joon sebenarnya curiga terhadap Seo Rae. Namun, kecurigaan tersebut ia tepis. Bahkan, lama kelamaan Hae Joon mulai jatuh cinta terhadap Seo Rae. Seiring berjalannya waktu, teka-teki kepergian suami Seo Rae mulai terungkap. Penyelidikan yang terus berlanjut, membuat Hae Joon terjebak di situasi sulit. Bagaimana kelanjutan investigasi tersebut? Siapa pembunuhnya? Apakah Hae Joon dan Seo Rae bisa bersatu?', 'https://www.youtube.com/embed/9aMHyTqvIvU', '2022-07-15', 'Tidak tayang'),
(17, 'Cyrano', 240, 'SU', 'Sebuah film drama musikal yang mengisahkan tentang kehidupan Cyrano de Bergerac, seorang penyair brilian yang sakit hati dan percaya bahwa penampilannya berarti tidak ada wanita yang bisa mencintainya. Film Cyrano (2021) disutradarai oleh Joe Wright ceritanya menyelubungi penonton bioskop dalam simfoni emosi dengan musik, romansa, dan keindahan di Cyrano, membayangkan kembali tentang kisah abadi cinta segitiga yang memilukan. Seorang pria di zamannya yaitu Cyrano de Bergerac (Peter Dinklage) yang mempesona dengan permainan katanya yang ganas di adu mulut, atau dengan permainan pedang yang brilian dalam duel. Tapi dia yakin bahwa penampilannya membuat dia tidak layak mendapatkan cinta seorang teman setia Roxanne (Haley Bennett) yang bercahaya, Cyrano belum menyatakan perasaan untuknya dan Roxanne telah jatuh cinta pada pandangan pertama dengan Christian (Kelvin Harrison, Jr).', 'https://www.youtube.com/embed/5e8apSFDXsQ', '2022-02-25', 'Tidak tayang'),
(18, 'Start-Up', 120, 'BO +13', 'Drama Start upberawal dari keluarga kecil Cha Ah Hyun (Song Seon Mi) dan Seo Chung Myung (Kim Joo Hun) yang mempunyai dua anak perempuan, Seo In Jae (Kang Han Na) dan Seo Dal Mi (Bae Suzy). Awalnya semua baik-baik tapi berubah saat Seo Chung Myung berhenti kerja.\r\n\r\nMengetahui sang suami ingin berbisnis, Cha Ah Hyun tampak marah besar. Tak tanggung-tanggung Cha Ah Hyun bahkan memilih cerai dari Seo Chung Myung. Perceraian mereka berdampak pada kedua putri mereka, Seo In Jae dan Seo Dal Mi. Setelah dipikir panjang, Seo In Jae akhirnya memilih ikut ibunya sementara Seo Dal Mi setia bersama sang ayah.Tidak lama usai bercerai, Cha Ah Hyun menikah lagi dengan Woo Doo Jung (Um Hyo Sup) lalu tinggal di Amerika. Sementara Seo Chung Myung meninggal di perjalanan pulang usai berjuang demi bisnisnya. Hal itu membuat Seo Dal Mi akhirnya tinggal bersama sang nenek Choi Won Deok (Kim Hae Sook). Melihat kesedihan cucu semata wayang, Choi Won Deok meminta tolong kepada anak muda yang menumpang tinggal di tokonya, Han Ji Pyeong (Kim Seon Ho) untuk menghibur Seo Dal Mi lewat sepucuk surat. Di surat itu, Han Ji Pyeong mengaku bernama Nam Do San (Nam Joo Hyuk). Saat melihat Nam Do San di surat kabar, menurut Han Ji Pyeong hidupnya cukup sempurna karena punya keluarga yang lengkap. \r\n\r\nSejak saat itu Han Ji Pyeong dan Seo Dal Mi mengirim surat tanpa bertemu. Akan tetapi karena suatu masalah keuangan Han Ji Pyeong harus pergi meninggalkan nenek Choi Won Deok. Maka dari itu, hubungannya dengan Seo Dal Mi pun terhenti. Namun hal itu tidak berarti bagi Seo Dal Mi, setelah bertahun-tahun berlalu dirinya tetap mengirim surat. Saat dewasa, Seo In Jae mengubah namanya jadi Won In Jae, dirinya menjadi perempuan yang cukup sukses berbisnis. Akan tetapi hal itu tidak berarti bagi Seo Dal Mi. Menganggap pertemuannya berharga, Seo Dal Mi ingin mencari Nam Do San yang mengirim suratnya.Di sisi lain, Han Ji Pyeong tiba-tiba menemukan nenek Choi Won Deok lagi. Keduanya berusaha untuk menemukan Nam Do San asli yang tengah merintis usaha Samsan Tech. Akhirnya, Han Ji Pyeong berhasil bertemu dengan Nam Do San dan memintanya untuk menjadi sosok yang di surat. \r\n\r\nSetelah bertemu Seo Dal Mi secara langsung, Nam Do San tak mau lepas begitu saja. Dirinya berusaha untuk tetap berhubungan dengannya. Benih-benih cinta sungguhan pun perlahan mulai tumbuh di hati Nam Do San. Maka dari itu, ia ingin merintis perusahaan bersama Seo Dal Mi lewat Sandbox.Saat tengah berjuang bersama-sama, Han Ji Pyeong hadir seakan tak rela Seo Dal Mi dekat dengan Nam Do San. Sampai pada akhirnya semua terungkap bahwa Nam Do San di surat adalah Han Ji Pyeong. Akan tetapi cinta Nam Do San tidak gugur begitu saja, ia justru membuktikan kalau dirinya yang terbaik untuk Seo Dal Mi.', 'https://www.youtube.com/embed/eCDeNtxSKvE', '2020-10-17', 'Tayang hari ini'),
(19, 'Love Revolution', 120, 'D', 'Kisah cinta remaja dengan latar sekolah menjadi menu utama Love Revolution. Gong Joo Young (Park Ji Hoon) adalah siswa 17 tahun, bersekolah di SMA Isam kelas I-2. Ia merasakan jatuh cinta untuk pertama kalinya. Wang Ja Rim (Lee Ruby), murid kelas I-3 telah mencuri hati Joo Young. Keduanya memiliki sifat yang berbeda. Joo Young cenderung terang-terangan dalam menunjukkan perasaannya. Sementara Ja Rim tipe gadis yang dingin, pendiam bahkan terkesan angkuh. Ja Rim tergolong siswi yang populer di sekolah. Hal ini tak membuat Joo Young rendah diri dan melakukan banyak usaha mendekati Ja Rim. Usaha yang dilakukan Joo Young bikin Ja Rim risih. Bahkan sempat berminggu-minggu bersikap cuek pada Joo Young. Ja Rim juga ditaksir oleh Kyung Woo, siswa kelas I-3 yang tergolong populer. Min Ji, sahabat Ja Rim membantu Joo Young dengan mendekati Ja Rim. Karena diam-diam ia menyukai Kyung Woo. Seiring berjalannya waktu, Ja Rim akhirnya luluh melihat usaha dan perhatian Joo Young. Di sisi lain, Kyung Woo memutuskan untuk berhenti mengejar Ja Rim.', 'https://www.youtube.com/embed/O_-sgncdLXc', '2023-01-20', 'Tayang hari ini'),
(20, 'Guardian: The Lonely and Great God', 140, 'D', 'Goblin bercerita tentang kisah cinta antara Kim Shin (Gong Yoo), manusia yang dikutuk hidup abadi dengan gadis SMA bernama Ji Eun Tak (Kim Go Eun). Melansir dari MyDramaList.com, Kim Shin dulunya adalah seorang jenderal tak terkalahkan di militer Goryeo yang meninggal secara tragis. Ia kemudian dikutuk menjadi goblin yang hidup abadi oleh dewa. Selama 900 tahun, Kim Shin telah mencari pengantinnya, seorang manusia yang bisa mencabut pedang dan mengakhiri hidupnya. Suatu hari, ia bertemu Ji Eun Tak, seorang siswa SMA yang dapat melihat orang mati dan telah melalui peristiwa tragis. Ji Eun Tak mengaku bahwa ia adalah pengantin goblin yang dapat mengakhiri kutukan hidup abadi. Namun tugas Ji Eun Tak untuk mengakhiri kutukan goblin itu menjadi sulit ketika ia dan Kim Shin saling jatuh cinta. Penasaran dengan nasib percintaan Kim Shin dengan Ji Eun Tak?\r\n', 'https://www.youtube.com/embed/S94ukM8C17A', '2016-12-02', 'Tidak tayang'),
(21, 'My Name', 144, 'SU', 'rama bergenre action thriller ini mengisahkan karakter bernama Ji-woo (Han So-hee) yang berambisi balas dendam atas kematian ayahnya.Ia menyaksikan secara langsung momen ayahnya meninggal setelah ditembak oleh seseorang misterius. Ji-woo memutuskan bergabung dengan kartel narkoba demi mengungkap dan mencari pembunuh ayahnya. Ia dibantu oleh Choi Moo-jin (Park Hae-soon) yang memimpin kartel narkoba tersebut dan sahabat ayahnya. Moo-jin mengungkap kepada Ji-woo bahwa ayahnya dibunuh oleh seorang polisi. Ia kemudian memberikan Ji-woo nama samaran menjadi Oh Hye-jin untuk bekerja di unit narkoba kepolisian sebagai mata-mata bagi organisasinya. mengungkap dan mencari pembunuh ayahnya, seperti yang tertulis dalam sinopsis My Name. Dalam wawancara virtual beberapa waktu, Han So-hee mengisahkan proses di balik persiapan melakoni perannya untuk drama My Name ini. Ia mengaku berdiskusi dengan pengarah seni bela diri. Mereka sepakat ingin menampilkan gaya seni bela diri yang berbeda dari biasanya. \"Ia menunjukkan saya film Atomic Blonde (yang berisikan) adegan laga panjang dan karakter utama perempuan menang atas lawannya yang merupakan laki-laki,\" kata So-hee.\r\n', 'https://www.youtube.com/embed/d2h92UnKr6s', '2021-10-15', 'Tidak tayang'),
(22, 'Lighter and Princess', 140, 'D', 'Drama Drama China Lighter and Princess bercerita tentang dua pemuda yang selalu bertentangan dua pemuda Li Xun dan Zhu Yun yang bertemu dalam satu universitas yang sama. Keduanya selalu bertengkar dan bertentangan baik secara fisik maupun secara kepribadian. Lu Xun adalah seorang penyendiri dan seorang yang ahli dalam pemrograman komputer sehingga ia mendapatkan beasiswa khusus untuk melanjutkan pendidikan ke perguruan tinggi ternama. Ia seorang penyendiri tapi dalam cara ia memandang dunia. ia hanya melihat semua kehidupan di Bumi sama seperti ia melihat semua program yang dilakukannya. Ia akan sangat merasa nyaman ketika ia bisa mengendalikan apa yang terjadi dalam kehidupannya, setiap program yang ia jalankan selama ini. Namun, semuanya berbeda ketika ia mengalami emosi cinta, frustrasi, stress ia rasakan bersamaan karena semua terjadi jauh di luar apa yang ia pahami selama ini. Sedangkan, Zhu Yun adalah gadis polos yang baru saja terjun di dunia perkuliahan yang selama ini harapkan, ia merasa sedikit lega setelah menuruti impian orang tua dengan kemampuan terbaik yang bisa dilakukan. \r\n\r\nIa ingin menjalani dunia kuliah dengan damai, menjadi mahasiswa yang patuh tanpa adanya hal-hal aneh yang mengiringinya. Semua itu rasanya tidak mungkin, ketika Zhu Yun bertemu dengan Li Xun. pria pengganggu, pembuat orang yang merusak kedamaian hidupnya. Ia takut untuk terpengaruh, namun di sisi lain, ia masih merasa tertarik padanya, meskipun sudah berkali-kali ribut tanpa adanya kedamaian. Seiring berjalannya waktu, entah siapa yang memulai mereka mulai menghargai waktu bersama, hingga semua insiden tidak terduga mengancam mereka untuk segera berpisah setelah bibit-bibit perasaan perlahan muncul di hati keduanya.', 'https://www.youtube.com/embed/mkkR-tMogzI', '2022-11-03', 'Tayang hari ini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_film`
--

CREATE TABLE `foto_film` (
  `id_foto_film` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('Utama','Sub Utama','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `foto_film`
--

INSERT INTO `foto_film` (`id_foto_film`, `id_film`, `foto`, `status`) VALUES
(9, 6, '1907960907_movie-3.png', 'Utama'),
(10, 5, '1974449812_upcoming-1.png', 'Utama'),
(11, 8, '1103202764_Action1.jpg', 'Utama'),
(12, 9, '302207131_Action2.jpg', 'Utama'),
(13, 10, '1855175513_Action3.jpg', 'Utama'),
(14, 11, '715545927_Action4.jpg', 'Utama'),
(15, 12, '63804122_Action5.jpg', 'Utama'),
(16, 13, '64891322_Romance1.jpg', 'Utama'),
(17, 14, '1795339752_Romance2.jpg', 'Utama'),
(18, 15, '1386663812_Romance3.jpg', 'Utama'),
(19, 16, '223347055_Romance4.jpg', 'Utama'),
(20, 17, '814813755_Romance5.jpg', 'Utama'),
(21, 18, '1282340298_Drama1.jpg', 'Utama'),
(22, 19, '1720127069_Drama2.jpg', 'Utama'),
(23, 20, '1405198198_Drama3.jpg', 'Utama'),
(24, 21, '430481774_Drama4.jpg', 'Utama'),
(25, 22, '1510582159_Drama5.jpg', 'Utama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(2, 'Action'),
(3, 'Romance'),
(4, 'Drama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_film`
--

CREATE TABLE `kategori_film` (
  `id_kategori_film` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_film`
--

INSERT INTO `kategori_film` (`id_kategori_film`, `id_kategori`, `id_film`) VALUES
(8, 4, 5),
(9, 2, 5),
(10, 2, 6),
(13, 2, 8),
(14, 2, 9),
(15, 2, 10),
(16, 2, 11),
(17, 2, 12),
(18, 3, 13),
(19, 3, 14),
(20, 3, 15),
(21, 3, 16),
(22, 3, 17),
(28, 4, 22),
(29, 4, 21),
(30, 4, 20),
(31, 4, 19),
(32, 4, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` float NOT NULL,
  `isi_komentar` text NOT NULL,
  `tgl_komentar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_film`, `id_user`, `rating`, `isi_komentar`, `tgl_komentar`) VALUES
(7, 6, 11, 5, 'filmnya bagus', '2023-06-19 11:54:52'),
(8, 8, 11, 3, 'keren', '2023-06-19 14:40:14'),
(9, 13, 11, 1, 'kurang', '2023-06-19 14:40:36'),
(10, 17, 11, 5, 'keren', '2023-06-19 14:41:15'),
(11, 17, 11, 5, 'keren 2', '2023-06-19 14:41:23'),
(13, 8, 11, 5, 'filmya keren', '2023-06-19 14:46:06'),
(14, 6, 11, 5, 'hhh', '2023-06-19 14:47:18'),
(15, 6, 11, 5, 'jkk', '2023-06-19 14:47:25'),
(16, 6, 11, 5, 'kj', '2023-06-19 14:47:31'),
(17, 8, 11, 5, 'film keren', '2023-06-19 15:15:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sutradara`
--

CREATE TABLE `sutradara` (
  `id_sutradara` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sutradara`
--

INSERT INTO `sutradara` (`id_sutradara`, `nama`, `tgl_lahir`) VALUES
(1, 'Saiful', '2023-06-06'),
(2, 'Nada', '2023-06-12'),
(4, 'Shawn Levy', '1988-03-22'),
(5, 'Shawn Levy', '1968-07-23'),
(6, 'Gareth Evans', '1980-01-10'),
(7, 'Anthony Russo', '1970-02-03'),
(8, 'Joe Russo', '1971-07-18'),
(9, 'Patty Jenkins', '1971-07-24'),
(10, 'Adam Wingard', '1982-12-03'),
(11, 'Oh Choong-hwan', '1954-06-30'),
(12, 'Seo Joo Wan', '1983-12-11'),
(13, 'Kwon Hyuk Chan', '1971-05-26'),
(14, 'Lee Eung Bok', '1969-04-05'),
(15, 'Yoon Jong Ho', '1984-02-15'),
(16, 'Kim Jin-min', '1972-03-06'),
(17, 'Liu Jun Jie', '1956-02-14'),
(18, 'Bradley Cooper', '1975-01-05'),
(19, 'Augustine Frizzell', '1979-07-27'),
(20, 'Joachim Trier', '1974-03-01'),
(21, 'Park Chan-wook', '1963-08-27'),
(22, 'Joe Wright', '1972-08-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sutradara_film`
--

CREATE TABLE `sutradara_film` (
  `id_sutradara_film` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `id_sutradara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sutradara_film`
--

INSERT INTO `sutradara_film` (`id_sutradara_film`, `id_film`, `id_sutradara`) VALUES
(6, 5, 1),
(7, 6, 1),
(9, 8, 4),
(10, 9, 6),
(11, 10, 7),
(12, 10, 8),
(13, 11, 9),
(14, 12, 10),
(15, 13, 18),
(16, 14, 19),
(17, 15, 20),
(18, 16, 21),
(19, 17, 22),
(20, 18, 11),
(21, 19, 14),
(23, 20, 13),
(24, 20, 14),
(25, 20, 15),
(26, 21, 16),
(27, 22, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(10) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `telp`, `email`, `password`, `role`, `foto`) VALUES
(4, 'Heru Septiana', '089630043457', 'heruseptiana99@gmail.com', '$2y$10$AkOzMecYD9AB7dckY4VuAOEHt7/VhdJWxhEc.XhGplP7oo03DLY.y', 'Admin', 'default.png'),
(6, 'Jajang', '089630043457', 'heruseptian@gmail.com', '$2y$10$1ARfCxN3v/X/rCIX.g2xwu6dG9N90ybV3vPtKYSLSIAHeNbeGptOK', 'Admin', '1230181975_Guardians-of-the-galaxy-vol3-Logo-PNG.png'),
(7, 'Heru Septiana', '0', 'sss@gmail.com', '$2y$10$UQSUm51GC9OEpIlO9yX1ReSYyrVx9kt3cmYZn8d4rEWT1mhMB6Apq', 'User', 'default.png'),
(8, 'saiful', '0', 'saiful@gmail.com', '$2y$10$oumi5iRDcFFQkydd2s8NaOLshANOZjIkMFHFtecTfHVISwY4Zia8u', 'User', 'default.png'),
(9, 'admin', '0', 'admin@gmail.com', '$2y$10$Q5NtTPllRXUt3vo2Zr2B2ejuZ.HCkbWTa1DCp/UOy5g3llKaDkzVK', 'Admin', 'default.png'),
(11, 'User sekian', '0894744556', 'user123456@gmail.com', '$2y$10$U5CiBzcfqN5N8ZHDkM4BpueDY1dxXLOMzYu5YKWmQhF/VFJPtH3di', 'User', '2146974267_Merah Hitam Logo Stempel Cuci Sepatu Murah Usaha Kecil.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aktor`
--
ALTER TABLE `aktor`
  ADD PRIMARY KEY (`id_aktor`);

--
-- Indeks untuk tabel `aktor_film`
--
ALTER TABLE `aktor_film`
  ADD PRIMARY KEY (`id_aktor_film`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_aktor` (`id_aktor`);

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeks untuk tabel `foto_film`
--
ALTER TABLE `foto_film`
  ADD PRIMARY KEY (`id_foto_film`),
  ADD KEY `id_film` (`id_film`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kategori_film`
--
ALTER TABLE `kategori_film`
  ADD PRIMARY KEY (`id_kategori_film`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `sutradara`
--
ALTER TABLE `sutradara`
  ADD PRIMARY KEY (`id_sutradara`);

--
-- Indeks untuk tabel `sutradara_film`
--
ALTER TABLE `sutradara_film`
  ADD PRIMARY KEY (`id_sutradara_film`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_sutradara` (`id_sutradara`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aktor`
--
ALTER TABLE `aktor`
  MODIFY `id_aktor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `aktor_film`
--
ALTER TABLE `aktor_film`
  MODIFY `id_aktor_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `foto_film`
--
ALTER TABLE `foto_film`
  MODIFY `id_foto_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kategori_film`
--
ALTER TABLE `kategori_film`
  MODIFY `id_kategori_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `sutradara`
--
ALTER TABLE `sutradara`
  MODIFY `id_sutradara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `sutradara_film`
--
ALTER TABLE `sutradara_film`
  MODIFY `id_sutradara_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `aktor_film`
--
ALTER TABLE `aktor_film`
  ADD CONSTRAINT `aktor_film_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `aktor_film_ibfk_2` FOREIGN KEY (`id_aktor`) REFERENCES `aktor` (`id_aktor`);

--
-- Ketidakleluasaan untuk tabel `foto_film`
--
ALTER TABLE `foto_film`
  ADD CONSTRAINT `foto_film_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

--
-- Ketidakleluasaan untuk tabel `kategori_film`
--
ALTER TABLE `kategori_film`
  ADD CONSTRAINT `kategori_film_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `kategori_film_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `sutradara_film`
--
ALTER TABLE `sutradara_film`
  ADD CONSTRAINT `sutradara_film_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `sutradara_film_ibfk_2` FOREIGN KEY (`id_sutradara`) REFERENCES `sutradara` (`id_sutradara`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
