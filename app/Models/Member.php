<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;
use Spatie\Translatable\HasTranslations;

class Member extends Model
{
    use HasFactory;
    use HasTranslations;
    use SearchableTrait;

    protected $fillable = [
        'name',
        'notes',
        'status',
        'facebook',
        'twitter',
        'instagram',
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
            'members.name' => 10,
            'members.notes' => 10,
        ],
    ];

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
