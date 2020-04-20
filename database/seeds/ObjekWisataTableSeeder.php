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
            ],
            [
                'nama_objek_wisata' => 'Air Terjun Siboruon',
                'lokasi' => 'Siboruon, Balige, Kabupaten Toba Samosir, Sumatera Utara 22312, Indonesia',
                'foto' => 'sa.jpg',
                'longitude' => '99.08199139999999',
                'latitude' => '2.280912',
                'category_id' => 1,
                'kabupaten_id' => 2,
                'deskripsi' => 'cantik',
                'cbt_id' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_objek_wisata' => 'Bukit Pahoda',
                'lokasi' => 'Lumban Silintong, Balige, Kabupaten Toba Samosir, Sumatera Utara 22312, Indonesia',
                'foto' => 'sa.jpg',
                'longitude' => '99.0406849',
                'latitude' => '2.3475204',
                'category_id' => 1,
                'kabupaten_id' => 2,
                'deskripsi' => 'cantik',
                'cbt_id' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_objek_wisata' => '',
                'lokasi' => 'Danau Toba, Lintong Nihuta, Tampahan, Kabupaten Toba Samosir, Sumatera Utara 22312, Indonesia',
                'foto' => 'sa.jpg',
                'longitude' => '',
                'latitude' => '',
                'category_id' => 1,
                'kabupaten_id' => 2,
                'deskripsi' => 'cantik',
                'cbt_id' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_objek_wisata' => 'Air Terjun Situmurun (Binangalom)',
                'lokasi' => 'Jonggi Nihuta, Lumban Julu, Hatinggian, Lumban Julu, Kabupaten Toba Samosir, Sumatera Utara 22386, Indonesia',
                'foto' => 'sa.jpg',
                'longitude' => '99.0081719',
                'latitude' => '2.5370911',
                'category_id' => 1,
                'kabupaten_id' => 2,
                'deskripsi' => 'cantik',
                'cbt_id' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_objek_wisata' => 'Pantai Agadon',
                'lokasi' => 'Sibaruang, Lumban Julu, Kabupaten Toba Samosir, Sumatera Utara 22386, Indonesia',
                'foto' => 'sa.jpg',
                'longitude' => '99.0406237',
                'latitude' => '2.510664',
                'category_id' => 1,
                'kabupaten_id' => 2,
                'deskripsi' => 'cantik',
                'cbt_id' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_objek_wisata' => 'Air Terjun Sigura-Gura',
                'lokasi' => 'Halado, Pintu Pohan Merant, Kabupaten Toba Samosir, Sumatera Utara 21274, Indonesia',
                'foto' => 'sa.jpg',
                'longitude' => '99.30264249999999',
                'latitude' => '2.548432',
                'category_id' => 1,
                'kabupaten_id' => 2,
                'deskripsi' => 'cantik',
                'cbt_id' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_objek_wisata' => 'Pantai Meat',
                'lokasi' => 'Meat, Tampahan, Kabupaten Toba Samosir, Sumatera Utara, Indonesia',
                'foto' => 'sa.jpg',
                'longitude' => '99.0046048',
                'latitude' => '2.3106208',
                'category_id' => 1,
                'kabupaten_id' => 2,
                'deskripsi' => 'cantik',
                'cbt_id' => 1,
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
    	]);
    }
}
