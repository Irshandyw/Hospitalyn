<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    public function run()
    {
        Medicine::create([
            "img"=>"https://d2qjkwm11akmwu.cloudfront.net/products/images/1653.jpg",
            "name"=>"Kenalog In Orabase",
            "price"=>"Rp 90.000",
            "description"=>" KENALOG IN ORABASE merupakan sediaan basis salep. Tiap gram Kenalog in Orabase mengandung 1 mg Triamcinolon Acetonide. Triamcinolon acetonide adalah kortikosteroid sintesis yang memiliki efek antiinflamasi, antipruritus, dan antialergi. Pasta dental emolien sebagai bahan pembawa berfungsi merekatkan obat pada jaringan mukosa rongga mulut. Bahan pembawa akan menutupi jaringan yang iritasi sehingga dapat mengurangi rasa sakit terkait iritasi mulut yang bersifat sementara. Dalam penggunaan obat ini harus SESUAI DENGAN PETUNJUK DOKTER."
        ]);
        Medicine::create([
            "img"=>"img/dumin.jpg",
            "name"=>"Dumin Paracetamol",
            "price"=>"Rp 23.000",
            "description"=>" DUMIN merupakan obat dengan kandungan Paracetamol 500 mg. Obat ini dapat digunakan untuk meredakan nyeri pada keadaan sakit kepala, sakit gigi dan menurunkan demam."
        ]);
        Medicine::create([
            "img"=>"img/Vaporub.jpg",
            "name"=>"Vicks Vaporub",
            "price"=>"Rp 35.000",
            "description"=>" Vicks Vaporub merupakan obat gosok yang mengandung zat aktif Minyak Eucalyptus, Menthol dan Camphora. Kandungan pada produk ini efektif untuk mengatasi gejala flu, seperti membantu melegakan pernapasan akibat hidung tersumbat, dapat pula digunakan untuk mengatasi pilek, pegal-pegal dan sakit kepala"
        ]);

    }
}
