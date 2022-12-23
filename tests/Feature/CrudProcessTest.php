<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CrudProcessTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_feature()
    {
        $response = $this->post('/login', [
            'email' => 'admin@gmail.com',
            'password' => 'agrofarm'
        ]);
        $response->assertStatus(302);
        $response->assertRedirect('/dashboard');
        // create process
        $response = $this->post('/adminfeature', [
            'image' => 'image.jpg',
            'nama' => 'Testing',
            'deskripsi' => 'Testing',
        ]);

        $response->assertStatus(302);
        $response->assertRedirect('/adminfeature');
    }
}
