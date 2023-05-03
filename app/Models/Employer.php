<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
