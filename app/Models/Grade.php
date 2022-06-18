<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'test_name', 'best_grade'];

    public function path()
    {
        return route('grades.index', $this);
    }

    public function course()
    {
        return $this->belongsTo('Course');
    }
}
