<?php

use App\Influencer;
use Illuminate\Database\Seeder;

class InfluencersTableSeeder extends Seeder
{
    private const INFLUENCER_COUNT = 100;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(Influencer::class, self::INFLUENCER_COUNT)->create();
    }
}
