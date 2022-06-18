<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Faq extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer'];

    public function path()
    {
        return route('faq.show', $this);
    }
}
