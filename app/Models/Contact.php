<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'service_id',
        'notes',
        'status',
    ];

    public function services()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
}
