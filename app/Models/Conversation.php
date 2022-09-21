<?php

namespace App\Models;

use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conversation extends Model
{
    use HasFactory;
    protected $fillable=['user_one','user_two' ,'conversation_subject' ,'send_time' ,'is_read' ,'is_closed','service'];
    protected $date=['created_at','updated_at'];
    
    public function message()
    {
        return $this->hasMany(Message::class);
    }
}
