<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Video extends Model
{
    use HasFactory;

    protected $fillable = ['title','description','thumbnail','file_path','module_id'];

    public function module(): BelongsTo {
        return $this->belongsTo(Module::class);
    }
}
