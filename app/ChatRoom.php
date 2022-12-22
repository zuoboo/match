<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    protected $table = 'chat_rooms';

    public function chatRoomUsers()
    {
        return $this->hasMany('App\ChatRoomUser');
    }

    public function chatMessages()
    {
        return $this->hasMany('App\ChatMessage');
    }

}

