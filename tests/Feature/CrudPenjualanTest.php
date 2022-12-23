<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudPenjualanTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
//         public function test_create_penjualan()
//     {
//         $response = $this->post('/login', [
//             'email' => 'admin@gmail.com',
//             'password' => 'agrofarm'
//         ]);
//         $response->assertStatus(302);
//         $response->assertRedirect('/dashboard');
//         // create penjualan
//         $response = $this->post('/adminpenjualan', [
//             // 'nama_pembeli' => '',
//             // 'pengambilan_id' => '1',
//             // 'lokasi' => 'Test Create',
//             // 'tanggal_jual' => '',
//         ]);
//        $response->assertStatus(302);
//        $response->assertRedirect('/adminpenjualan');
//     }
// }   
 
    // public function test_edit_penjualan()
    // {
    //     $response = $this->post('/login', [
    //         'email' => 'admin@gmail.com',
    //         'password' => 'agrofarm'
    //     ]);
    //     $response->assertStatus(302);
    //     $response->assertRedirect('/dashboard');

    //     $response = $this->put('/adminpenjualan/4/edit', [
            
    //             // 'nama_pembeli' => 'Dina',
    //             // 'pengambilan_id' => '1',
    //             // 'lokasi' => 'Surabaya',
    //             // 'tanggal_jual' => '2022-10-10',
    //     ]);
    //     $response->assertRedirect('/adminpenjualan');
    // }
//}
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
public function test_delete_penjualan()
    {
        $response = $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => 'agrofarm'
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');

        $response = $this->delete('/adminpenjualan/1');
        //$response->assertRedirect('/adminpenjualan');
    }
}
