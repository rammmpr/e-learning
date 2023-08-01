<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVideo extends Model
{
    use HasFactory;

    protected $table = 'user_videos';

    protected $fillable = [
        'user_id',
        'video_id',
    ];
}