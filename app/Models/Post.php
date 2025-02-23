<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Pest\Laravel\put;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}

