<?php

namespace App;

use App\Config;
use Illuminate\Database\Eloquent\Model;

class MonthlyConfig extends Model
{
    protected $fillable = [
        'name',
        'price',
        'ip_limit',
        'gb_limit',
        'payment_link',

    ];
    public function configs(){
        return $this->morphMany(Config::class,'configable');
    }

}
