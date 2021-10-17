<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    use HasFactory;

    public $fillable = [
        'validated',
        'beginDay',
        'endDay',
    ];

    public function getBeginDateAttribute()
    {
        $date = date_create($this->beginDay);
        return date_format($date, 'd/m/Y');
    }

    public function getEndDateAttribute()
    {
        $date = date_create($this->endDay);
        return date_format($date, 'd/m/Y');
    }
}
