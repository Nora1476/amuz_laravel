<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'msg_recivenum',
        'msg_sendnum',
        'msg_title',
        'msg_text',
        'msg_sendoption',
        // 이미지 파일 업로드를 위한 필드 추가
        'image1',
        'image2',
        'image3',
    ];
}
