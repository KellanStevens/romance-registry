<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = ['date_id', 'amount'];

    public function date()
    {
        return $this->belongsTo(Date::class);
    }
}
