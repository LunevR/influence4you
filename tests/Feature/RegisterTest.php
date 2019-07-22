<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /** @test */
    public function guest_can_register_with_correct_data()
    {
        $user = [
            'name'                  => 'test user',
            'email'                 => 'test@user.com',
            'password'              => 'Qwerty123',
            'password_confirmation' => 'Qwerty123',
        ];

        $this->post(route('register'), $user)
            ->assertStatus(302)
            ->assertRedirect(route('influencers.index'));

        $this->assertDatabaseHas('users', [
            'email' => 'test@user.com',
            'name'  => 'test user',
        ]);
    }

    /** @test */
    public function guest_can_not_register_with_different_passwords()
    {
        $user = [
            'name'                  => 'test user',
            'email'                 => 'test@user.com',
            'password'              => 'Qwerty123',
            'password_confirmation' => 'Qwerty',
        ];

        $this->post(route('register'), $user)
            ->assertStatus(302)
            ->assertRedirect(route('home'));

        $this->assertDatabaseMissing('users', [
            'email' => 'test@user.com',
            'name'  => 'test user',
        ]);
    }

    /** @test */
    public function guest_can_not_register_with_password_less_than_8_characters()
    {
        $user = [
            'name'                  => 'test user',
            'email'                 => 'test@user.com',
            'password'              => 'test',
            'password_confirmation' => 'test',
        ];

        $this->post(route('register'), $user)
            ->assertStatus(302)
            ->assertRedirect(route('home'));

        $this->assertDatabaseMissing('users', [
            'email' => 'test@user.com',
            'name'  => 'test user',
        ]);
    }

    /** @test */
    public function user_can_not_visit_register_page()
    {
        $user = factory(User::class)->create([
            'email' => 'test@user.com',
        ]);

        $this->actingAs($user)
            ->get(route('register'))
            ->assertStatus(302)
            ->assertRedirect(route('home'));
    }
}
