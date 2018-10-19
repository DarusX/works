<?php

use Illuminate\Database\Seeder;
use App\Activity;
use App\Team;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('123456')
        ]);
        factory(Activity::class, 50)->create();
        factory(Team::class, 10)->create();
        factory(User::class, 10)->create();
    }
}
