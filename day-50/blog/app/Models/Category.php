<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    private static $category;
    private static $image;
    private static $imagename;
    private static $imageurl;
    private static $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imagename = self::$image->getClientOriginalName();
        self::$directory='category-images/';
        self::$image->move(self::$directory, self::$imagename);
        return self::$directory.self::$imagename;
    }

    public static function newCategory($request)
    {
        self::$category = new Category();
        self::$category->name =$request->name;
        self::$category->description =$request->description;
        self::$category->image =self::getImageUrl($request);
        self::$category->save;
    }
}
