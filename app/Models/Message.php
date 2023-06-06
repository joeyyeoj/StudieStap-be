<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        "channel_id",
        "user_id",
<<<<<<< HEAD
        "response_to_id",
=======
>>>>>>> Daniel
    ];

    public function channel() {
        return $this->belongsTo(Channel::class);
    }   
    public function user() {
        return $this->belongsTo(User::class);
    }

<<<<<<< HEAD
    public function appendix() {
        return $this->hasMany(MessageAppendix::class);
    }
    public function responseTo() {
        return $this->belongsTo(Message::class);
    }
=======
    public function appendix(): HasMany {
        return $this->hasMany(MessageAppendix::class);
    }
>>>>>>> Daniel
}
