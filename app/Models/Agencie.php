<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Translatable\HasTranslations;

class Agencie extends Model
{
    use HasFactory;
    use HasTranslations;
    use SearchableTrait;

    protected $fillable = [
        'name',
        'notes',
        'status',
        'url',
        'slug',
        'pdf',
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
