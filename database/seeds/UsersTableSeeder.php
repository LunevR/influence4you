<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    private const USER_COUNT = 10;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name'  => 'test user',
            'email' => 'test@test.com',
        ]);

        factory(User::class, self::USER_COUNT)->create();
    }
}
