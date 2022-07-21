<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BDF extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "b_d_f_s";

    protected $fillable = [
        'Filename',
        'bdfable_type',
        'bdfable_id',
    ];

    public function bdfable()
    {
        return $this->morphTo('App\Models\BDF');
    }
}
