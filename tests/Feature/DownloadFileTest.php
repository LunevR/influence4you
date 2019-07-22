<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class DownloadFileTest extends TestCase
{
    /** @test */
    public function user_can_download_pdf()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->get(route('influencers.export'))
            ->assertStatus(200);

        $this->assertTrue($response->headers->get('content-type') == 'application/pdf');
    }

    /** @test */
    public function guest_can_not_get_list_of_influencers()
    {
        $this->get(route('influencers.export'))
            ->assertStatus(302)
            ->assertRedirect(route('login'));
    }
}
