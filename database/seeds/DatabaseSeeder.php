<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(CategoryWisataTableSeeder::class);
    	$this->call(CategoryAkomodasiTableSeeder::class);
        $this->call(KabupatenTableSeeder::class);
        $this->call(CbtTableSeeder::class);
        $this->call(AkomodasiTableSeeder::class);
        $this->call(BudayaTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(KulinerTableSeeder::class);
        $this->call(ObjekWisataTableSeeder::class);
        $this->call(TransportasiTableSeeder::class);
    }
}
