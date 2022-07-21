<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
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
        'status',
        'notes',
        'url',
        'pdf',
    ];

//    public function sluggable(): array
//    {
//        return [
//            'slug' => [
//                'products' => 'slug'
//            ]
//        ];
//    }

    public function Status()
    {
        return $this->status ? "Active" : 'In Active';
    }

    public function scopeStatus($query)
    {
        return $query->whereStatus(true);
    }

    protected $searchable = [
        'columns' => [
            'agencies.name' => 10,
            'agencies.notes' => 10,
        ],
    ];

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }

    public function bdf()
    {
        return $this->morphOne(BDF::class, 'bdfable');
    }
}
