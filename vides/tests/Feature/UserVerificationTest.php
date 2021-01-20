<?php

namespace Tests\Feature;

use App\Models\User;
use Carbon\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserVerificationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     /** @test */
    public function it_shows_the_users_list()
    {    
        // Registro Existentne  
        $this->assertDatabaseHas('users', [
            'email' => 'andreacabrera@gmail.com',
            'rol' => 'Admin'
        ]);

        // Registro no existente
        $this->assertDatabaseMissing('users', [
            'name' => 'mariaangela@gmail.com',
            'rol' => 'Admin'
        ]);
        

    }

    public function testApplication()
    {
        $response = $this->call('POST', 'login',[
            'email' => 'fideo@gmail.com',
            'password' =>'pipo1234',
            '_token' =>csrf_token()
            ]);
            $response->assertStatus(302);
            $response->assertRedirect('/dashboard');
            
    }
}
