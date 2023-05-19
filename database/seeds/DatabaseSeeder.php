<?php

// use monthlySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            sellerSeeder::class,
            userSeeder::class,
            monthlySeeder::class,
            workerSeeder::class,
            configSeeder::class,
    ]);
    }
}
