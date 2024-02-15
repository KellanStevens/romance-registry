<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['date_night_id', 'path'];

    public function dateNight()
    {
        return $this->belongsTo(DateNight::class);
    }
}
