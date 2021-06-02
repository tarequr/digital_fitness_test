<?php

use Illuminate\Database\Seeder;
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
        // $this->call(UserSeeder::class);
        //factory(User::class, 1)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
    }
}
