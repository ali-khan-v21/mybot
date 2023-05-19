<?php

namespace App;

use App\Config;
use App\Seller;
use App\Purchased;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'user_id',
        'ref_id',
        'firstname',
        'lastname',
        'username',
        'status',
        'test_requests',
        'test_request_time',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function seller()
    {
        return $this->belongsTo(Seller::class,'ref_id','ref_code');
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
