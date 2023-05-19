<?php

namespace App;

use App\User;
use App\Config;
use App\Purchased;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable=[
        'ref_code',
            'percentage',
            "user_id",
            'firstname',
            'lastname',
            'username',
            'balance',
            'total',
            'bank_number',
    ];
    public function users(){
        return $this->hasMany(User::class,'ref_id',"ref_code");
    }
    public function configs(){
        return $this->hasMany(Config::class);
    }
    public function pendingPurchases(){
        return $this->hasMany(PendingPurchase::class);
    }
    public function purchaseds(){
        return $this->hasMany(Purchased::class);
    }
}
