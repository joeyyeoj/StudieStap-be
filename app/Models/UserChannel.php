<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChannel extends Model
{
    use HasFactory;

    public function channel() {
        return $this->belongsTo(channel::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function message() {
        return $this->hasMany(message::class);
    }
}
