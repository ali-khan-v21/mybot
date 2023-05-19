<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Purchased extends Model
{
    protected $fillable=[
        'ref_id','user_id','config_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function seller(){
        return $this->belongsTo(Seller::class);
    }
    public function config(){
        return $this->belongsTo(Config::class);
    }
}
