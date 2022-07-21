<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory;
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
            'blogs.name' => 10,
            'blogs.notes' => 10,
        ],
    ];

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
