<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class KulinerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kuliner::insert([
    		[
    			'nama_kuliner' => 'Smile Coffee',
    			'jenis_kuliner' => 'Restorant',
    			'longitude' => '99.0623847',
    			'foto' => 'sa.jpg',
    			'latitude' => '2.3359193',
		        'lokasi' => 'Jl. Siliwangi No.8, Balige, Kabupaten Toba Samosir, Sumatera Utara, Indonesia',
		        'cbt_id' => 1,
		        'kabupaten_id' => 2,
		        'deskripsi' => 'cantik',
		        'created_at' => Carbon::now('Asia/Jakarta'),
		        'updated_at' => Carbon::now('Asia/Jakarta')
    		],
            [
                'nama_kuliner' => 'DBrands Cafe Balige',
                'jenis_kuliner' => 'Restorant',
                'longitude' => '99.06685039999999',
                'foto' => 'sa.jpg',
                'latitude' => '2.3297723',
                'lokasi' => 'Jl. Siliwangi No.8, Balige, Kabupaten Toba Samosir, Sumatera Utara, Indonesia',
                'cbt_id' => 1,
                'kabupaten_id' => 2,
                'deskripsi' => 'cantik',
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
                'nama_kuliner' => 'Pizza Andaliman',
                'jenis_kuliner' => 'Restorant',
                'longitude' => '99.0541291',
                'foto' => 'sa.jpg',
                'latitude' => '2.329186',
                'lokasi' => 'Jl. Siliwangi No.8, Balige, Kabupaten Toba Samosir, Sumatera Utara, Indonesia',
                'cbt_id' => 1,
                'kabupaten_id' => 2,
                'deskripsi' => 'cantik',
                'created_at' => Carbon::now('Asia/Jakarta'),
                'updated_at' => Carbon::now('Asia/Jakarta')
            ],
    	]);
    }
}
