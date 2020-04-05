<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CategoryAkomodasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\CategoryAkomodasi::insert([
        	[
        		'nama' => 'Hotel',
        		'deskripsi' => 'Hotel adalah usaha yang menggunakan suatu bangunan atau sebagian bangunan yang disediakan secara khusus, dan setiap orang dapat menginap, makan, serta memperoleh pelayanan dan fasilitas lainnya dengan pembayaran.',
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
        	],
        	[
        		'nama' => 'Boutique Hotel',
        		'deskripsi' => 'Boutique Hotel ini adalah jenis hotel dengan jumlah kamar yang tidak terlalu banyak dan lebih dikhususkan untuk memanjakan tamu yang menginap.',
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
        	],
        ]);
    }
}
