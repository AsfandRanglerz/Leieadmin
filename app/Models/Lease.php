<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function property(){
        return $this->belongsTo('App\Models\Property','property_id');
    }
    public function tenant(){
        return $this->hasOne('App\Models\Tenant','lease_id','id');
    }
    public function rentalObject(){
        return $this->belongsTo('App\Models\RentalObject','rental_object_id');
    }
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function account(){
        return $this->belongsTo('App\Models\Account','account_id');
    }
}
