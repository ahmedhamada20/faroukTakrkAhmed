<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory;
//    use Sluggable;
    use HasTranslations;

    public $translatable = [
        'name',
        'notes',
    ];

    protected $fillable = [
        'name',
        'slug',
        'phone',
        'email',
        'notes',
        'address',
        'facebook',
        'twitter',
        'instagram',
        'YouTube',
        'Fax',
        'url',
    ];

//    public function sluggable(): array
//    {
//        return [
//            'slug' => [
//                'settings' => 'name'
//            ]
//        ];
//    }

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
