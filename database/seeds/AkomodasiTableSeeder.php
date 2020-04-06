<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class AkomodasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\Akomodasi::insert([
    		[
    			'nama_akomodasi' => 'Hotel Nabasa',
		        'lokasi' => 'Jl. Siliwangi No.8, Balige, Kabupaten Toba Samosir, Sumatera Utara, Indonesia',
		        'foto' => 'sa.jpg',
		        'cbt_id' => 1,
		        'kabupaten_id' => 2,
		        'category_akomodasi_id' => 1,
		        'deskripsi' => 'cantik',
		        'longitude' => '99.0623847',
		        'latitude' => '2.3359193',
		        'created_at' => Carbon::now('Asia/Jakarta'),
		        'updated_at' => Carbon::now('Asia/Jakarta')
    		],
            [
                'nama_akomodasi' => 'GM Marsaringar Hotel',
                'lokasi' => 'Balige III, Balige, Kabupaten Toba Samosir, Sumatera Utara, Indonesia',
                'foto' => 'sa.jpg',
                'cbt_id' => 1,
                'kabupaten_id' => 2,
                'category_akomodasi_id' => 1,
                'deskripsi' => 'cantik',
                'longitude' => '99.06708859999999',
                'latitude' => '2.3287113',
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_akomodasi' => 'Mutiara Hotel Balige',
                'lokasi' => 'Sibola Hotangsas, Balige, Kabupaten Toba Samosir, Sumatera Utara, Indonesia',
                'foto' => 'sa.jpg',
                'cbt_id' => 1,
                'kabupaten_id' => 2,
                'category_akomodasi_id' => 1,
                'deskripsi' => 'cantik',
                'longitude' => '99.0588186',
                'latitude' => '2.333485',
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
    	]);
    }
}
