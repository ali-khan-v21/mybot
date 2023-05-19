<?php

namespace App;



use App\Config;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable=['url'];

    public function configs(){
        return $this->hasMany(Config::class);
    }

   
    
}
