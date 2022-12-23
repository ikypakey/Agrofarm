<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudPengambilanTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_create_pengambilan()
    // {
    //     $response = $this->post('/login', [
    //         'email' => 'admin@gmail.com',
    //         'password' => 'agrofarm'
    //     ]);
    //     $response->assertStatus(302);
    //     $response->assertRedirect('/dashboard');
    //     // create grade
    //     $response = $this->post('/adminpengambilan', [
    //         // 'nama_pengambil' => 'Supplier Malang',
    //         // 'category_id' => '1',
    //         // 'jumlah' => '20',
    //         // 'lokasi' => 'Test Create',
    //         // 'tanggal_ambil' => '2022-09-10',
    //         // 'status' => '1',
    //     ]);
    //     $response->assertStatus(302);
    //     $response->assertRedirect('/adminpengambilan');
    // }
//}    
//     public function test_edit_pengambilan()
//     {
//         $response = $this->post('/login', [
//             'email' => 'admin@gmail.com',
//             'password' => 'agrofarm'
//         ]);
//         $response->assertStatus(302);
//         $response->assertRedirect('/dashboard');

//         $response = $this->put('/adminpengambilan/4/edit', [
            
//             // 'nama_pengambil' => 'Supplier Surabaya',
//             // 'category_id' => '1',
//             // 'jumlah' => '20',
//             // 'lokasi' => 'Test Create',
//             // 'tanggal_ambil' => '2022-09-10',
//             // 'status' => '2',
//         ]);
//         $response->assertRedirect('/adminpengambilan');
//     }
// }
//  public function test_show_pengambilan()
//     {
//         $response = $this->post('/login', [
//             'email' => 'admin@gmail.com',
//             'password' => 'agrofarm'
//         ]);
//         $response->assertStatus(302);
//         $response->assertRedirect('/dashboard');

//         $response = $this->get('/adminpengambilan/1');
//         $response->assertStatus(200);
//         $response->assertViewIs('admin.pengambilan.show');
    
//     }
// }
// public function test_delete_pengambilan()
//     {
//         $response = $this->post('/login', [
//             'email' => 'admin@gmail.com',
//             'password' => 'agrofarm'
//         ]);
//         $response->assertStatus(302);
//         $response->assertRedirect('/dashboard');

//         $response = $this->delete('/adminpengambilan/1');
//         $response->assertRedirect('/adminpengambilan');
//     }
}