<?php

use Illuminate\Database\Seeder;

class KabupatenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kabupaten::create([
        	'alamat' => 'Dolok sanggul',
        	'nama_kabupaten' => 'Humbang Hasundutan',
        	'gambar_kabupaten' => 'asd',
        	'longitude' => 'asd',
        	'latitude' => 'asd'
        ]);
    }
}
