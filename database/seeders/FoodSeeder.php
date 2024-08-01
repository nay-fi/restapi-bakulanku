<?php

namespace Database\Seeders;

use App\Models\FoodModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // berisi array data menu yang akan dimasukkan ke database
        $datas = array(
            array(
                "name" => "Bakso",
                "harga" => 11000,
                "kategori" => "makanan",
                "image" => "https://pixabay.com/id/photos/bakso-bakso-sapi-daging-sapi-rebus-7622509/"
            ),
            array(
                "name" => "Mie Ayam",
                "harga" => 12000,
                "kategori" => "makanan",
                "image" => "https://pixabay.com/id/photos/bakso-bakso-sapi-daging-sapi-rebus-7622513/"
            ),
            array(
                "name" => "Sate",
                "harga" => 20000,
                "kategori" => "makanan",
                "image" => "https://pixabay.com/id/photos/sate-ayam-saus-kacang-makanan-thai-3604856/"
            ),
            array(
                "name" => "Salad",
                "harga" => 14000,
                "kategori" => "makanan",
                "image" => "https://pixabay.com/id/photos/vegan-makanan-makan-malam-salad-4809593/"
            ),
            array(
                "name" => "Es Jeruk",
                "harga" => 3000,
                "kategori" => "minuman",
                "image" => "https://pixabay.com/id/photos/limun-minum-minuman-ringan-2097312/"
            ),
            array(
                "name" => "Es Teh",
                "harga" => 3000,
                "kategori" => "minuman",
                "image" => "https://pixabay.com/id/photos/es-teh-lemon-teh-minum-kaca-lemon-1726270/"
            ),
            array(
                "name" => "Es Americano",
                "harga" => 3000,
                "kategori" => "minuman",
                "image" => "https://pixabay.com/id/photos/es-kopi-amerika-serikat-minum-7113043/"
            ),
            array(
                "name" => "Lemon Machiato",
                "harga" => 3000,
                "kategori" => "minuman",
                "image" => "https://pixabay.com/id/photos/latte-macchiato-kopi-kaca-buih-susu-4166922/"
            )
        );

        // digunakan untuk memasukkan data ke database
        foreach ($datas as $data) {
            FoodModel::create([
                'name' => $data['name'],
                'harga' => $data['harga'],
                'kategori' => $data['kategori'],
                'images' => $data['image'],
            ]);
        }
    }
}
