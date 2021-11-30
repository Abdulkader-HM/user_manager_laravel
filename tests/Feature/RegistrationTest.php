<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Contracts\Auth\Authenticatable;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    // use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function testRegisterationPage()
    // {
    //     $response = $this->get('/register');
    //     $response->assertStatus(200);
    // }
    // public function testRegistration()
    // {
    //     $response = $this->post('/register', [
    //         'name' => 'abd',
    //         'email' => 'abd@hotmail.com',
    //         'password' => '123123',
    //         'password_confirmation' => '123123'
    //     ]);
    //     $response->assertRedirect('/home');
    // }
    // public function testLogin()
    // {
    //     $response = $this->post('/login', [
    //         'email' => 'user@user.com',
    //         'password' => '00000000',
    //     ]);
    //     $response->assertRedirect('/home');
    // }
}
