<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'parent_child_email',
        'parent_statut'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
}