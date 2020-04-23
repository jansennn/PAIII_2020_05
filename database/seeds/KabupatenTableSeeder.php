<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class KabupatenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kabupaten::insert([
            [
        	'alamat' => 'Dolok sanggul',
        	'nama_kabupaten' => 'Humbang Hasundutan',
        	'gambar_kabupaten' => 'humbang_hasundutan.jpg',
        	'longitude' => '98.7485729',
        	'latitude' => '2.251991',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Balige',
            'nama_kabupaten' => 'Toba',
            'gambar_kabupaten' => 'toba.jpg',
            'longitude' => '99.083252',
            'latitude' => '2.3337119',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Tarutung',
            'nama_kabupaten' => 'Tapanuli Utara',
            'gambar_kabupaten' => 'tapanuli_utara.jpg',
            'longitude' => '98.9797712',
            'latitude' => '2.0118822',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Pematang Siantar',
            'nama_kabupaten' => 'Simalungun',
            'gambar_kabupaten' => 'simalungun.jpg',
            'longitude' => '99.0681668',
            'latitude' => '2.970042',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Pangururan',
            'nama_kabupaten' => 'Samosir',
            'gambar_kabupaten' => 'samosir.jpg',
            'longitude' => '98.7150831',
            'latitude' => '2.6378061',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Berastagi',
            'nama_kabupaten' => 'Karo',
            'gambar_kabupaten' => 'karo.jpg',
            'longitude' => '98.504913',
            'latitude' => '3.185291',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Dairi',
            'nama_kabupaten' => 'Dairi',
            'gambar_kabupaten' => 'dairi.jpg',
            'longitude' => '98.265058',
            'latitude' => '2.8675801',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Pakpak Barat',
            'nama_kabupaten' => 'Pakpak Barat',
            'gambar_kabupaten' => 'pakpak_barat.jpg',
            'longitude' => '98.2212979',
            'latitude' => '2.5135376',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
