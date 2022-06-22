<?php

namespace App\Models;

use App\Models\Option;
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
        'options',
        
    ];


        /**
     * Get all of the options for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->belongsToMany(Option::class);
    }

    /**
     * Get all of the car photos for the Car
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    /**
     * Get the directory which contains cars photos
     *
     * @return string
     */
    public function getImageDir()
    {
        return '/img/cars/';
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($instance) {
            $dir = public_path() . $instance->getImageDir();
            if (file_exists(public_path() . $instance->getImageDir() . $instance->id . '_thumb.jpg')) {
                unlink($dir . $instance->id . '_thumb.jpg');
            }
            if (file_exists(public_path() . $instance->getImageDir() . $instance->id . '_large.jpg')) {
                unlink($dir . $instance->id . '_large.jpg');
            }
        });
    }

    public function setImageAttribute($images)
    {
        foreach ($images as $key => $image) {
            if (is_object($image) && $image->isValid()) {
                static::saved(function ($instance) use ($key, $image) {
                    $dir = public_path() . $this->getImageDir();
                    $file_name = $image->hashName();
                    Image::make($image)->fit(1080, 768)->save($dir . '/' . $file_name, 60);
                    Photo::create([
                        'file_path' => $file_name,
                        'car_id' => $instance->id,
                    ]);
                });
            }
        };
    }

    public function getCreationDateAttribute()
    {
        return date_format($this->created_at, 'd-m-Y à h:i');
    }

}
