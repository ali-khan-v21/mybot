<?php

use App\Worker;
use Illuminate\Database\Seeder;

class workerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Worker::create([
            'url'=>'https://w.myskycloud.space/sub?config='
        ]);
    }
}
