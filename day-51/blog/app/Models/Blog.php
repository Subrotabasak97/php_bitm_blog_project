<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;

class Blog extends Model
{
    use HasFactory;

    public static function newBlog($request)
    {
        $authorId = Auth::user()->id;
    }
}
