<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lecture extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subject() : BelongsTo
    {
        return $this->belongsTo(\App\Models\Subject::class);
    }

    public function lecture_exams() : HasMany
    {
        return $this->hasMany(\App\Models\LectureExam::class);
    }
}
