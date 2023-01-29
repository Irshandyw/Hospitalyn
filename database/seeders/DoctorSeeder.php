<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::create([
            "img"=>"img/Dokter1.jpg",
            "name"=>"Dr. Andre Sehatus, Sp.A",
            "specialist"=>"Spesialis Anak",
            "location"=>"HOSPITALYN Jakarta Selatan",
            "schedule"=>"img/jadwal 1.png",
            "background"=>"Dokter Joni merupakan lulusan kedokteran dari Universitas Nusantara, dimana dokter joni merupakan lulusan cumlaude dan kepala dari organisasi mahasiswa kedokteran. Dokter Joni sudah memiliki pengalaman 15 tahun dalam bidang penyakit dan komplikasi pada anak dan balita. "
        ]);
        Doctor::create([
            "img"=>"img/Dokter2.jpg",
            "name"=>"Dr. Amanda Santiago Sp.Rd",
            "specialist"=>"Spesialis Radiologi",
            "location"=>"HOSPITALYN Bandung",
            "schedule"=>"img/jadwal 2.png",
            "background"=>"Spesialis Neurologi Dokter Poppy merupakan lulusan dari Universitas Bumi yang  menerbitkan journal sains eksperimen yaitu Effects Of Axoltl Blood On Brain Neurons Growth yang membantu dunia medis dalam pengobatan syaraf otak pada remaja."
        ]);

        Doctor::create([
            "img"=>"img/Dokter3.jpg",
            "name"=>"Dr. Poppy Ayuningtias Sp.N",
            "specialist"=>"Spesialis Neurologi",
            "location"=>"HOSPITALYN Jakarta Pusat",
            "schedule"=>"img/jadwal 3.png",
            "background"=>"Dokter Poppy merupakan salah satu dokter dindonesia yang memiliki spesialisasi dalam bidang neurologi dengan pengalaman 5 tahun, Dokter Poppy sangat dipercayai dalam metode pengobatanya karena sejauh ini belum terjadi kesalahan."
        ]);

        Doctor::create([
            "img"=>"img/Dokter4.png",
            "name"=>"Dr. Aldi Berlington Sp.PD",
            "specialist"=>"Spesialis Penyakit Dalam",
            "location"=>"HOSPITALYN Surabaya",
            "schedule"=>"img/jadwal 4.png",
            "background"=>"Dokter Aldi sangat antusias dalam bidang pengobatan organ dalam yang dimana dia memiliki pengalaman selama 8 tahun lebih dalam bidang ini, dan membantu WFO dalam cara pengobatan cacing perut yang dialami oleh anak - anak pada negara yang kurang berkembang."
        ]);
    }
}
