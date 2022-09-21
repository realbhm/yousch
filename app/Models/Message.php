<?php

namespace App\Models;

use App\Models\Conversation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Carbon\Carbon;

class Message extends Model
{
    use HasFactory;
    protected $fillable=['user_id','conversation_id','message_body' ,'me_send_time'];
    protected $date=['created_at','updated_at'];

    public function conversation()
    {
        return $this->belongsToMany(Conversation::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
