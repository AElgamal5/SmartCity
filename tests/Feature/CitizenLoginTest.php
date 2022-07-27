<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CitizenLoginTest extends TestCase
{
    public function test_login_form()
    {
        $response = $this->get(route('citizen.login'));

        $response->assertStatus(200);
    }

    public function test_login_succeeded()
    {
        $response = $this->post(route('citizen.login.save'), [
            'id' => '1',
            'password' => '1234578',
        ]);
        $response->assertStatus(302)
            ->assertRedirect(route('citizen'));
        $response->assertSessionHasNoErrors();
    }

    public function test_login_faild()
    {
        $response = $this->post(route('citizen.login.save'), [
            'id' => '1',
            'password' => 'abcd1234',
        ]);
        $response->assertStatus(302)
            ->assertRedirect(route('citizen.login'))
            ->assertSessionHas(["error" => "Wrong input data"]);
    }

    public function test_login_with_no_id()
    {
        $response = $this->post(route('citizen.login.save'), [
            'id' => '',
            'password' => 'abcd1234',
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors('id');
    }

    public function test_login_with_no_password()
    {
        $response = $this->post(route('citizen.login.save'), [
            'id' => '1',
            'password' => '',
        ]);
        $response->assertStatus(302);
        $response->assertSessionHasErrors('password');
    }
}
