<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AskMessage extends Model
{
    use HasFactory;

    public $fillable = [
        'askname',
        'askemail',
        'askphone',
        'askmessage',
    ];
}
