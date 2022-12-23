<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudContacttTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_message()
    {
        // input messsage
        $response = $this->post('/adminmessage', [
            // 'nama' => 'Rizki',
            // //'email' => 'aaa@gmail.com',
            // 'subject' => 'Test Input',
            // 'pesan' => 'Test Input',
        ]);
       $response->assertStatus(302);
       $response->assertRedirect('/contact');
    }
}
