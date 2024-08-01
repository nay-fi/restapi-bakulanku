<?php

namespace Database\Seeders;

use App\Models\KategoriModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // berisi array data yang akan dimasukkan ke database
        $datas = array(
            array(
                "name" => "makanan"
            ),
            array(
                "name" => "minuman"
            ),
        );

        // digunakan untuk memasukkan data ke database
        foreach ($datas as $data) {
            KategoriModel::create([
                'name' => $data['name'],
            ]);
        }
    }
}
