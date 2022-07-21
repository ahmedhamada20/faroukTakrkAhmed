<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutUs extends Model
{
    use HasFactory;
    use HasTranslations;
    protected $fillable =[
        'name',
        'notes',
        'icon_1',
        'title_1',
        'notes_1',
        'icon_2',
        'title_2',
        'notes_2',
    ];
    public $translatable = [
        'name',
        'notes',
        'title_1',
        'notes_1',
        'title_2',
        'notes_2',
    ];


    public function photo()
    {
        return $this->morphOne(Photo::class, 'photoable');
    }
}
