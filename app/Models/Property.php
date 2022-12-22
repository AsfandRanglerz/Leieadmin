<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable=['user_id','street_name','street_number','zip_code','city','commune','usage_number','farm_number','fixed_number','property_name','property_description','status'];
     public function rental_object(){
         return $this->hasMany('App\Models\RentalObject','property_id','id');
}
}
