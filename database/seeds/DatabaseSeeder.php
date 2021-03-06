<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CantonsTableSeeder::class);
         $this->call(TypesTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(JobsTableSeeder::class);
    }
}
