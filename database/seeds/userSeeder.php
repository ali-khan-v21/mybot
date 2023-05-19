<?php

use App\User;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

            'user_id' => 2222,
            'ref_id' => 1,
            'firstname' => 'ASAL',
            'lastname' => 'gh',
            'username' => 'asal2020',
            'status' => 1,

        ]);
        User::create([

            'user_id' => 3333,
            'ref_id' => 1,
            'firstname' => 'mmd',
            'lastname' => 'taj',
            'username' => 'mutaj',
            'status' => 1,

        ]);
    }
}
