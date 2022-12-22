<?php

namespace App\Models\Chat;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function Sender(){
      return  $this->belongsTo('App\Models\User','sender_id','id');
    }
    public function Receiver(){
        return $this->belongsTo('App\Models\User','receiver_id','id');
    }
    public static function update_timestamp($chat_id)
    {
        $data['updated_at']=Carbon::now();
        Chat::find($chat_id)->update($data);
    }
}
