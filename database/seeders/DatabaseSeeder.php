<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticleSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(MedicineSeeder::class);
    }
}
