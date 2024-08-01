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
                "image" => "https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/07/25041221/ini-resep-kuah-bakso-sap-yang-mudah-dibuat-di-rumah.jpg"
            ),
            array(
                "name" => "Mie Ayam",
                "harga" => 12000,
                "kategori" => "makanan",
                "image" => "https://www.blibli.com/friends-backend/wp-content/uploads/2023/04/B300046-Cover-resep-mie-ayam-scaled.jpg"
            ),
            array(
                "name" => "Sate",
                "harga" => 20000,
                "kategori" => "makanan",
                "image" => "https://d1vbn70lmn1nqe.cloudfront.net/prod/wp-content/uploads/2023/07/14053934/Mudah-Dibuat-di-Rumah-Ini-Resep-Sate-Ayam-Bumbu-Kacang-yang-Lezat-.jpg"
            ),
            array(
                "name" => "Pecel",
                "harga" => 14000,
                "kategori" => "makanan",
                "image" => "https://www.frisianflag.com/storage/app/media/uploaded-files/pecel-sayur-sederhana.jpg"
            ),
            array(
                "name" => "Es Jeruk",
                "harga" => 3000,
                "kategori" => "minuman",
                "image" => "https://www.bakmigm.com/cfind/source/thumb/images/menu/cover_w480_h480_tw1474_th1474_x117_y125_es-jeruk.jpg"
            ),
            array(
                "name" => "Es Teh",
                "harga" => 3000,
                "kategori" => "minuman",
                "image" => "https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/p2/162/2024/07/10/jumbo-3740461361.jpg"
            ),
            array(
                "name" => "Es Americano",
                "harga" => 10000,
                "kategori" => "minuman",
                "image" => "https://i0.wp.com/resepkoki.id/wp-content/uploads/2019/03/kopi.png?fit=883%2C589&ssl=1"
            ),
            array(
                "name" => "Machiato",
                "harga" => 10000,
                "kategori" => "minuman",
                "image" => "https://cdn0-production-images-kly.akamaized.net/uNqpTQGU6LmjVzXRliI6uMSMvXM=/0x55:999x618/1200x675/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/3978882/original/065624800_1648599303-shutterstock_1599783562.jpg"
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
