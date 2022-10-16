<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = [
            [
                "id" => "1",
                "nama_menu" => "Nasi Goreng",
                "harga_menu" => "14000",
                "deskripsi_menu" => "Telur Ceplok, sosis, dan ayam suir"
            ],
            [
                "id" => "2",
                "nama_menu" => "Nasi Goreng Mawur",
                "harga_menu" => "14000",
                "deskripsi_menu" => "Telur Ceplok, sosis, mie, dan ayam suir"
            ],
            [
                "id" => "3",
                "nama_menu" => "Mie Goreng",
                "harga_menu" => "14000",
                "deskripsi_menu" => "Telur dicampur, bakso, dan ayam suir"
            ],
            [
                "id" => "4",
                "nama_menu" => "Ayam Goreng + Nasi",
                "harga_menu" => "23000",
                "deskripsi_menu" => "Lalapan, terong goreng, tempe goreng, tahu goreng"
            ],
            [
                "id" => "5",
                "nama_menu" => "Nila Goreng + Nasi",
                "harga_menu" => "20000",
                "deskripsi_menu" => "Lalapan, terong goreng, tempe goreng, tahu goreng"
            ],
            [
                "id" => "6",
                "nama_menu" => "Lele Goreng + Nasi",
                "harga_menu" => "18000",
                "deskripsi_menu" => "Lalapan, terong goreng, tempe goreng, tahu goreng"
            ],
            [
                "id" => "7",
                "nama_menu" => "Nasi Goreng Surga Dunia",
                "harga_menu" => "20000",
                "deskripsi_menu" => "Telur dicampur, sosis ayam, sosis sapi, kulit ayam, dan emping"
            ],
            [
                "id" => "8",
                "nama_menu" => "Mie Kwetiaw",
                "harga_menu" => "18000",
                "deskripsi_menu" => "Telur Ceplok, sosis, dan ayam sayur"
            ],
            [
                "id" => "9",
                "nama_menu" => "Nasi Goreng Seafood",
                "harga_menu" => "27000",
                "deskripsi_menu" => "Udang, Cumi, dan bakso"
            ],
            [
                "id" => "10",
                "nama_menu" => "Nasi Goreng Ikan Asin",
                "harga_menu" => "20000",
                "deskripsi_menu" => "Ikan asin, putihan"
            ]
        ];
        foreach ($menu as $mnu) {
            \App\Models\Menu::firstOrCreate($mnu);
        }
    }
}
