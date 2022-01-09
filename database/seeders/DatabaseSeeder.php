<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Cart;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        Product::create([
            'nama_produk' => 'Indomie',
            'gambar_produk' => 'indomie.jpeg',
            'deskripsi_produk' => 'Legenda dapur Indonesia yang selalu wajib tersedia, dari generasi emas sampai halilintar. Mi goreng dengan bumbu spesial dan taburan bawang goreng hasilkan aroma yang lezat untuk menggoreng semangat!',
            'harga' => 3500,
        ]);

        Product::create([
            'nama_produk' => 'TV',
            'gambar_produk' => 'tv.jpeg',
            'deskripsi_produk' => 'HISENSE Android TV 40E4F merupakan smart tv dengan sistem operasi Android. Dengan kemampuan menghasilkan warna yang lebih akurat dan alami, Hisense TV akan membuat tayangan Anda seakan lebih nyata. Penambahan lapisan kontras pada background, midground, dan foreground untuk memberikan kedalaman gambar lebih jauh lagi. TV telah dirancang dengan pemikiran pengguna SMART TV sistem android yang simple dan mudah. Semua kompleksitas yang tidak dibutuhkan telah dihapus untuk menghadirkan interface baru yang efisien dan mudah digunakan.',
            'harga' => 10000000,
        ]);

        Product::create([
            'nama_produk' => 'Baju',
            'gambar_produk' => 'baju.jpeg',
            'deskripsi_produk' => 'Bahan Katun TC. Cocok untuk dipakai langsung maupun untuk disablon. Tidak tipis sehingga mampu menjadi media sablon yang baik',
            'harga' => 50000,
        ]);

        Product::create([
            'nama_produk' => 'Sepatu',
            'gambar_produk' => 'sepatu.jpeg',
            'deskripsi_produk' => 'Sepatu Patrobase Equip Low White Gum Unixex termurah hanya disini. Dapatkan unitnya segera!',
            'harga' => 300000,
        ]);

        Product::create([
            'nama_produk' => 'Indomie',
            'gambar_produk' => 'indomie.jpeg',
            'deskripsi_produk' => 'Legenda dapur Indonesia yang selalu wajib tersedia, dari generasi emas sampai halilintar. Mi goreng dengan bumbu spesial dan taburan bawang goreng hasilkan aroma yang lezat untuk menggoreng semangat!',
            'harga' => 3500,
        ]);

        Product::create([
            'nama_produk' => 'Jam Tangan',
            'gambar_produk' => 'jam-tangan.jpeg',
            'deskripsi_produk' => 'Jam Tangan Elektronik Tahan Air IP67 Motif Kartun Anak Laki laki Perempuan LED Minimalis Gelang',
            'harga' => 150000,
        ]);

        Product::create([
            'nama_produk' => 'Headset',
            'gambar_produk' => 'headset.jpeg',
            'deskripsi_produk' => 'D21 Handset Handsfree hanset Suport Extra Bass dengan kualitas terbaik di bumi.',
            'harga' => 50000,
        ]);

        Product::create([
            'nama_produk' => 'Tas',
            'gambar_produk' => 'tas.jpeg',
            'deskripsi_produk' => 'Slingbag chelsy bordir. Size : 20 x 9 x 14 cm. Dalam ada furing, dalam ada kantong kecil (untuk taruh uang koin), Tali rantai memakai rantai tebal bulat, jahitan rapi, Import.',
            'harga' => 200000,
        ]);

        Cart::create([
            'users_id' => 1,
            'products_id' => 1,
            'jumlah' => 2,
        ]);

        Cart::create([
            'users_id' => 1,
            'products_id' => 3,
            'jumlah' => 1,
        ]);
    }
}
