<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Translatable\HasTranslations;

class Silder extends Model
{
    use HasFactory;
    use HasTranslations;
    use SearchableTrait;

    protected $fillable = [
        'name',
        'notes',
        'status',

    ];

    public $translatable = [
        'name',
        'notes',
    ];

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
            'silders.name' => 10,
            'silders.notes' => 10,
        ],
    ];

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
