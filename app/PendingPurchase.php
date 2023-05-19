<?php

namespace App;

use App\User;
use App\Seller;
use Illuminate\Database\Eloquent\Model;

class PendingPurchase extends Model
{
    protected $fillable = [
        'user_id',

        'ref_id',

        'pendingable_type',
        'pendingable_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function seller(){
        return $this->belongsTo(Seller::class);
    }
    public function pendinable(){
        return $this->morphTo();
    }
}
