<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Quote extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = [
        'name',
        'notes',
        'title_1',
    ];

    protected $fillable = [
        'name',
        'notes',
        'icon_1',
        'title_1',
        'number',
    ];
}
