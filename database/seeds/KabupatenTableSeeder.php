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
        	'longitude' => 'asd',
        	'latitude' => 'asd',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Balige',
            'nama_kabupaten' => 'Toba',
            'gambar_kabupaten' => 'toba.jpg',
            'longitude' => 'asd',
            'latitude' => 'asd',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Tarutung',
            'nama_kabupaten' => 'Tapanuli Utara',
            'gambar_kabupaten' => 'tapanuli_utara.jpg',
            'longitude' => 'asd',
            'latitude' => 'asd',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Pematang Siantar',
            'nama_kabupaten' => 'Simalungun',
            'gambar_kabupaten' => 'simalungun.jpg',
            'longitude' => 'asd',
            'latitude' => 'asd',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Pangururan',
            'nama_kabupaten' => 'Samosir',
            'gambar_kabupaten' => 'samosir.jpg',
            'longitude' => 'asd',
            'latitude' => 'asd',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Berastagi',
            'nama_kabupaten' => 'Karo',
            'gambar_kabupaten' => 'karo.jpg',
            'longitude' => 'asd',
            'latitude' => 'asd',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Dairi',
            'nama_kabupaten' => 'Dairi',
            'gambar_kabupaten' => 'dairi.jpg',
            'longitude' => 'asd',
            'latitude' => 'asd',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
            [
            'alamat' => 'Pakpak Barat',
            'nama_kabupaten' => 'Pakpak Barat',
            'gambar_kabupaten' => 'pakpak_barat.jpg',
            'longitude' => 'asd',
            'latitude' => 'asd',
            'created_at' => Carbon::now('Asia/Jakarta'),
            'updated_at' => Carbon::now('Asia/Jakarta')
            ],
        ]);
    }
}
