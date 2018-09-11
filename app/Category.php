<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Category extends Model
{
    protected $fillable = ['category_name','category_description','publication_status'];

    public static function saveCategoryInfo($request) {
//        return $request->all();

//    DB::table('categories')->insert([
//        'category_name'         => $request->category_name,
//        'category_description'  => $request->category_description,
//        'publication_status'    => $request->publication_status
//
//    ]);

//        $category = new Category();
//        $category->category_name        = $request->category_name;
//        $category->category_description = $request->category_description;
//        $category->publication_status   = $request->publication_status;
//        $category->save();


        Category::create($request->all());
    }

    public static function deleteCategory($request) {
        //
    }
}


//$user = User::find(1);
//$user->delete();