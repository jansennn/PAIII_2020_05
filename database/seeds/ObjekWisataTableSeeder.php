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
    			'nama_objek_wisata' => 'Lumban Bulbul',
		        'lokasi' => 'Lumban Bulbul, Balige, Kabupaten Toba Samosir, Sumatera Utara, Indonesia',
		        'foto' => 'sa.jpg',
		        'longitude' => '99.0732353',
		        'latitude' => '2.3484022',
		        'category_id' => 1,
		        'kabupaten_id' => 2,
		        'deskripsi' => 'cantik',
		        'cbt_id' => 1,
		        'created_at' => Carbon::now('Asia/Jakarta'),
		        'updated_at' => Carbon::now('Asia/Jakarta')
    		],
            [
                'nama_objek_wisata' => 'Panatapan Tarabunga',
                'lokasi' => 'Tara Bunga, Tampahan, Kabupaten Toba Samosir, Sumatera Utara, Indonesia',
                'foto' => 'sa.jpg',
                'longitude' => '99.0294708',
                'latitude' => '2.3470097',
                'category_id' => 1,
                'kabupaten_id' => 2,
                'deskripsi' => 'cantik',
                'cbt_id' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_objek_wisata' => 'Pakkodian Balige',
                'lokasi' => 'Danau Toba, Lintong Nihuta, Tampahan, Kabupaten Toba Samosir, Sumatera Utara 22312, Indonesia',
                'foto' => 'sa.jpg',
                'longitude' => '99.0134629',
                'latitude' => '2.3396203',
                'category_id' => 1,
                'kabupaten_id' => 2,
                'deskripsi' => 'cantik',
                'cbt_id' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ]
    	]);
    }
}
