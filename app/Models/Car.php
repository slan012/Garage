<?php

namespace App\Models;

use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    public $fillable = [
        'image',
        'brand',
        'model',
        'registration',
        'year',
        'energy',
        'mileage',
        'color',
        'power',
        'engine',
        'state',
        'user_id',
        'price',
        'description',
    ];

    public function getImageDir()
    {
        return '/img/cars/';
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($instance) {
            $dir = public_path() . $instance->getImageDir();
            unlink($dir . $instance->id . '_thumb.jpg');
            unlink($dir . $instance->id . '_large.jpg');
        });
    }

    public function setImageAttribute($image)
    {
        if (is_object($image) && $image->isValid()) {
            static::saved(function ($instance) use ($image) {
                $dir = public_path() . $this->getImageDir();
                Image::make($image)->fit(1080, 768)->save($dir . '/' . $instance->id . '_large.jpg', 60);
                Image::make($image)->fit(250, 150)->save($dir . '/' . $instance->id . '_thumb.jpg', 60);
            });
        };
    }

    public function image($size)
    {
        if (file_exists(public_path() . $this->getImageDir() . $this->id . '_thumb.jpg')) {
            return $this->getImageDir() . $this->id . '_' . $size . '.jpg';
        }
        return false;
    }

    public function getCreationDateAttribute()
    {
        return date_format($this->created_at, 'd-m-Y à h:i');
    }
}
