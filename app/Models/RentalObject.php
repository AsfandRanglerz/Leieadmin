<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalObject extends Model
{
    use HasFactory;
    protected $guarded=[];
    public  function property(){
        return $this->belongsTo('App\Models\Property','property_id');
    }
    public  function lease(){
        return $this->belongsTo('App\Models\Lease','id','rental_object_id');
    }
}
