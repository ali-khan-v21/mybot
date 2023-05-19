<?php

use App\MonthlyConfig;
use Illuminate\Database\Seeder;

class monthlySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MonthlyConfig::create([
            'name'=>'ماهانه تک کاربر 1 گیگابایت حجم 	',
            'price'=>15,
            'ip_limit'=>1,
            'gb_limit'=>1,
            'payment_link'=>'https://zarinp.al/493938',

        ]);
        MonthlyConfig::create([
            'name'=>'ماهانه تک کاربر 2 گیگابایت حجم',
            'price'=>19,
            'ip_limit'=>1,
            'gb_limit'=>2,
            'payment_link'=>'https://zarinp.al/493940',

        ]);
        MonthlyConfig::create([
            'name'=>'ماهانه تک کاربر 3 گیگابایت حجم',
            'price'=>24,
            'ip_limit'=>1,
            'gb_limit'=>3,
            'payment_link'=>'https://zarinp.al/493941',

        ]);
        MonthlyConfig::create([
            'name'=>'ماهانه تک کاربر 5 گیگابایت حجم',
            'price'=>27,
            'ip_limit'=>1,
            'gb_limit'=>5,
            'payment_link'=>'https://zarinp.al/493942',

        ]);
        MonthlyConfig::create([
            'name'=>'ماهانه تک کاربر 8 گیگابایت حجم',
            'price'=>32,
            'ip_limit'=>1,
            'gb_limit'=>8,
            'payment_link'=>'https://zarinp.al/493943',

        ]);
        MonthlyConfig::create([
            'name'=>'ماهانه تک کاربر 15 گیگابایت حجم',
            'price'=>50,
            'ip_limit'=>1,
            'gb_limit'=>15,
            'payment_link'=>'https://zarinp.al/493944',

        ]);
        MonthlyConfig::create([
            'name'=>'ماهانه تک کاربر 30 گیگابایت حجم',
            'price'=>65,
            'ip_limit'=>1,
            'gb_limit'=>30,
            'payment_link'=>'https://zarinp.al/493946',

        ]);
        MonthlyConfig::create([
            'name'=>'ماهانه تک کاربر 60 گیگابایت حجم',
            'price'=>95,
            'ip_limit'=>1,
            'gb_limit'=>60,
            'payment_link'=>'https://zarinp.al/493948',

        ]);
    }
}
