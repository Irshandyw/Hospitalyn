<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Article::create([
            "title"=>"Hari Hepatitis Sedunia",
            "img"=>"https://i0.wp.com/rsanggrekmas.com/wp-content/uploads/2022/07/hepatitis-2022.png?fit=1000%2C1000&ssl=1",
            "text"=>"Dunia saat ini sedang menghadapi wabah baru infeksi hepatitis akut yang tidak dapat dijelaskan yang berdampak pada anak-anak. WHO, bersama dengan para ilmuwan dan pembuat kebijakan di negara-negara yang terkena dampak, sedang bekerja untuk memahami penyebab infeksi ini yang bukan disebabkan dari salah satu 5 jenis virus hepatitis yang diketahui: A,B,C,D, dan E.
            Wabah baru ini membawa fokus pada ribuan infeksi virus hepatitis akut yang terjadi di kalangan anak-anak, remaja dan orang dewasa setiap tahun. Sebagian besar infeksi hepatitis akut menyebabkan penyakit ringan dan bahkan tidak terdeteksi. Tetapi dalam beberapa kasus, mereka dapat menyebabkan komplikasi dan berakibat fatal. Pada tahun 2019 saja, diperkirakan 78.000 kematian terjadi di seluruh dunia karena komplikasi infeksi hepatitis A hingga E akut.
            Upaya global memprioritaskan eliminasi infeksi hepatitis menular B, C dan D. Tidak seperti hepatitis virus akut, 3 infeksi ini menyebabkan hepatitis kronis yang berlangsung selama beberapa dekade dan mengakibatkan lebih dari 1 juta kematian per tahun akibat sirosis dan kanker hati. Tiga jenis infeksi hepatitis kronis ini mengakibatkan atas lebih dari 95% kematian akibat hepatitis. Meskipun telah terdapat pedoman dan alat untuk mendiagnosis, mengobati, dan mencegah hepatitis virus kronis, layanan ini seringkali berada di luar jangkauan sehingga sulit diakses oleh komunitas dan terkadang hanya tersedia di rumah sakit pusat/khusus.",
        ]);

        Article::create([
            "title"=>"Kapan Bayi Mulai MPASI?",
            "img"=>"img/Artikel 2.jpg",
            "text"=>"Menurut anjuran Ikatan Dokter Anak Indonesia, bayi mulai MPASI pertama sebaiknya ketika sudah masuk usia enam bulan.
            Pada usia enam bulan, bayi bisa mulai MPASI pertama karena umumnya Si Kecil sudah menunjukkan tanda-tanda siap makan.
            Tanda bayi siap makan di antaranya kepala sudah tegak, bisa duduk dengan bantuan, serta kebiasaan menjulurkan lidah sudah berkurang.
            Pada usia ini, bayi juga tertarik saat melihat orang makan, mencoba meraih makanan, dan membuka mulut jika disodori sendok atau makanan. Meskipun sudah ada anjuran kapan bayi mulai MPASI dari pakar, namun masih ada sebagian orang yang memberikan MPASI dini sebelum bayi berusia enam bulan.
            Namun, hal ini bisa membahayakan kesehatan bayi."
        ]);

        Article::create([
            "title"=>"Apa itu Kista Epidermoid",
            "img"=>"img/Artikel3.jpg",
            "text"=>"Dunia saat ini sedang menghadapi wabah baru infeksi hepatitis akut yang tidak dapat dijelaskan yang berdampak pada anak-anak. WHO, bersama dengan para ilmuwan dan pembuat kebijakan di negara-negara yang terkena dampak, sedang bekerja untuk memahami penyebab infeksi ini yang bukan disebabkan dari salah satu 5 jenis virus hepatitis yang diketahui: A,B,C,D, dan E.
            Wabah baru ini membawa fokus pada ribuan infeksi virus hepatitis akut yang terjadi di kalangan anak-anak, remaja dan orang dewasa setiap tahun. Sebagian besar infeksi hepatitis akut menyebabkan penyakit ringan dan bahkan tidak terdeteksi. Tetapi dalam beberapa kasus, mereka dapat menyebabkan komplikasi dan berakibat fatal. Pada tahun 2019 saja, diperkirakan 78.000 kematian terjadi di seluruh dunia karena komplikasi infeksi hepatitis A hingga E akut.
            Upaya global memprioritaskan eliminasi infeksi hepatitis menular B, C dan D. Tidak seperti hepatitis virus akut, 3 infeksi ini menyebabkan hepatitis kronis yang berlangsung selama beberapa dekade dan mengakibatkan lebih dari 1 juta kematian per tahun akibat sirosis dan kanker hati. Tiga jenis infeksi hepatitis kronis ini mengakibatkan atas lebih dari 95% kematian akibat hepatitis. Meskipun telah terdapat pedoman dan alat untuk mendiagnosis, mengobati, dan mencegah hepatitis virus kronis, layanan ini seringkali berada di luar jangkauan sehingga sulit diakses oleh komunitas dan terkadang hanya tersedia di rumah sakit pusat/khusus.",
        ]);

    }
}
