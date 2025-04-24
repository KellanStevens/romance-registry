<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = ['date_night_id', 'path'];

    public function occasion()
    {
        return $this->belongsTo(Occasion::class);
    }
}
