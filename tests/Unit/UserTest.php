<?php

namespace Tests\Unit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;
class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
    public function testUserByEmail(){
        
        $response = $this->withHeaders([
            'Content-Type' => 'application/json',
            'Accept'      =>  'application/json'  
        ])->json('POST','/api/auth/login',['email'=> 'timy.shark@outlook.com','password' => 'secret']);


        $response->dump();
        $response
          ->assertStatus(200);
    }

    public function testInvalidUserPassword(){
        $response = $this->postJson('/api/auth/login', ['email' => 'timy.shark@outlook.com','password' => 'notsecret']);

        $response
            ->assertStatus(400)
            ->assertJson([
                'message' => true,
            ]); 
    }

    public function testInvalidUserEmail(){
        $response = $this->postJson('/api/auth/login', ['email' => '<timy.invalid.shark@outlook.com','password' => 'notsecret']);
        $response->dump();
       $this->assertTrue($response['message']);
       $response
            ->assertStatus(400)
            ->assertJson([
                'message' => true,
            ]); 
    }
}
