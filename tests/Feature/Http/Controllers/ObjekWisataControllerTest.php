<?php

namespace Tests\Feature\Http\Controllers;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\ObjekWisata;

class ObjekWisataControllerTest extends TestCase
{
    use WithFaker;
    

    public function testStore(){
        $objekWisata = factory(ObjekWisata::class)->create();

        $response = $this->actingAs($objekWisata)->post(route('admin.testStore'), [
            'nama_objek_wisata' =>"asd",
            'lokasi' => "Balige",
            'longitude' => "9.0123",
            'latitude' => "123123",
            'category_id' => 1,
            'kabupaten_id' => 1,
            'deskripsi' => "ini adalah deskripsi",
            'cbt_id' => 1,
            'foto' => "sa.jpg",
        ]);

        $response->assertStatus(302);
    }
}
