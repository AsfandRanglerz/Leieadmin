<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function sender()
    {
        return $this->belongsTo('App\Models\User','sender_id','id');
    }
    public function receiver()
    {
        return $this->belongsTo('App\Models\User','receiver_id','id');
    }
}
