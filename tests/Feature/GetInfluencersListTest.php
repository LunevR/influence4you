<?php

namespace Tests\Feature;

use App\User;
use App\Influencer;
use Tests\TestCase;

class GetInfluencersListTest extends TestCase
{
    /** @test */
    public function user_can_get_empty_list_of_influencers()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get(route('influencers.index'))
            ->assertStatus(200)
            ->assertSee('<th>Name</th>')
            ->assertSee('<td colspan="4">No influencer has been found</td>');
    }

    /** @test */
    public function user_can_get_not_empty_list_of_influencers()
    {
        factory(Influencer::class, 20)->create();

        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get(route('influencers.index'))
            ->assertStatus(200)
            ->assertSee('<th>Name</th>')
            ->assertDontSee('<td colspan="4">No influencer has been found</td>');
    }

    /** @test */
    public function guest_can_not_get_list_of_influencers()
    {
        $this->get(route('influencers.index'))
            ->assertStatus(302)
            ->assertRedirect(route('login'));
    }
}
