<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetails extends Model
{
    use HasFactory;

    protected $table = 'transaction_details';

    protected $fillable = [
        'video_id',
        'transaction_id',
    ];
}