<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Section extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function teacher() : BelongsTo
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}