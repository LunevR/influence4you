<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /** @test */
    public function guest_can_login()
    {
        $user = factory(User::class)->create([
            'email' => 'test@user.com',
        ]);

        $this->get(route('login'))
            ->assertStatus(200);

        $this->post(route('login'), [
                'email'    => 'test@user.com',
                'password' => 'password',
            ])
        ->assertStatus(302)
        ->assertRedirect(route('influencers.index'));
    }

    /** @test */
    public function user_can_not_visit_login_page()
    {
        $user = factory(User::class)->create([
            'email' => 'test@user.com',
        ]);

        $this->actingAs($user)
            ->get(route('login'))
            ->assertStatus(302)
            ->assertRedirect(route('home'));
    }
}
