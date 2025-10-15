<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'message', 'rating'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Helper buat tampilin nama user
    public function getAuthorNameAttribute()
    {
        return $this->user->name ?? 'Anonymous';
    }
}

