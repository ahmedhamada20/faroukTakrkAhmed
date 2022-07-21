<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class OutFeatures extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable = [
        'name',
        'icon_1',
        'title_1',
        'notes_1',
        'icon_2',
        'title_2',
        'notes_2',
        'icon_3',
        'title_3',
        'notes_3',
    ];

    public $translatable = [
        'name',
        'title_1',
        'notes_1',
        'title_2',
        'notes_2',
        'title_3',
        'notes_3',
    ];

    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
