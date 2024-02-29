<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['msg_recivenum', 'msg_sendnum', 'msg_title', 'msg_text', 'msg_sendoption'];

    public function images()
    {
        return $this->hasMany(MessageImage::class);
    }
}
