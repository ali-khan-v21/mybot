<?php

use App\Seller;
use Illuminate\Database\Seeder;

class sellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seller::create([
            'ref_code'=>1,
            'percentage'=>100,
            "user_id"=>1111,
            'firstname'=>'ali',
            'lastname'=>'ghanbari',
            'username'=>'aligh2021',
            'balance'=>100,
            'total'=>100,
            'bank_number'=>0000000000000000,
        ]);
    }
}
