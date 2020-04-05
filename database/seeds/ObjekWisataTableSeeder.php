<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class ObjekWisataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ObjekWisata::insert([
    		[
    			'nama_objek_wisata' => 'Hotel Nabasa',
		        'lokasi' => 'Jl. Siliwangi No.8, Balige, Kabupaten Toba Samosir, Sumatera Utara, Indonesia',
		        'foto' => 'sa.jpg',
		        'longitude' => '99.0623847',
		        'latitude' => '2.3359193',
		        'category_id' => 1,
		        'kabupaten_id' => 1,
		        'deskripsi' => 'cantik',
		        'cbt_id' => 1,
		        'created_at' => Carbon::now('Asia/Jakarta'),
		        'updated_at' => Carbon::now('Asia/Jakarta')
    		]
    	]);
    }
}
