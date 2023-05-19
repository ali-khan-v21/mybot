<?php

use App\Config;
use Illuminate\Database\Seeder;

class configSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Config::create([
            'user_id'=>1,
        'ref_id'=>1,
        "name"=>'admin',
        'UUID'=>"6193f2cd-cbfd-40d0-fec8-beb67dd5d8e6",
        "link"=>"vmess://ewogICJ2IjogIjIiLAogICJwcyI6ICJDTElFTlQtYWRtaW4iLAogICJhZGQiOiAidTIubXlza3ljbG91ZC5zcGFjZSIsCiAgInBvcnQiOiA4NDQzLAogICJpZCI6ICJlNTU1ZDFkYi1lNzlmLTQzNTctYTJjYy1kNTdhM2UwNDY0YjAiLAogICJhaWQiOiAwLAogICJuZXQiOiAid3MiLAogICJ0eXBlIjogIm5vbmUiLAogICJ0bHMiOiAidGxzIiwKICAicGF0aCI6ICIvc2t5IiwKICAic25pIjogInUyLm15c2t5Y2xvdWQuc3BhY2UiLAogICJhbHBuIjogImgyLGh0dHAvMS4xIgp9",
        'worker_id'=>1,
        'configable_type'=>'App/MonthlyConfig',
        'configable_id'=>1,

            
        ]);
    }
}
