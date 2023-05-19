<?php

namespace App;
use App\User;
use App\Seller;
use App\Worker;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $fillable = [
        'user_id',
        'ref_id',
        "name",
        'UUID',
        "link",
        'worker_id',
        'configable_type',
        'configable_id'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function seller(){
        return $this->belongsTo(Seller::class);
    }
    
    public function worker(){
        return $this->belongsTo(Worker::class);
    }
    public function configable(){
        return $this->morphTo();
    }
    public function purchaseds(){
        return $this->hasMany(Purchased::class);
    }
}
