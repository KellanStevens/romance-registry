<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miscellaneous extends Model
{
    use HasFactory;

    protected $table = 'miscellaneous';

    protected $fillable = [
        'item_name',
        'item_value',
    ];

    protected $casts = [
        'id' => 'integer',
        'item_name' => 'string',
        'item_value' => 'string',
    ];
}
