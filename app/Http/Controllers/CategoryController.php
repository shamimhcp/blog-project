<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory() {
        return view('admin.category.add-category');
    }

    public function newCategory(Request $request) {

        Category::saveCategoryInfo($request);

        return redirect('/Category/add-category')->with('message', 'Category Info Save Success!');

    }

    public function manageCategory() {

//        $categories = Category::all();
        return view('admin.category.manage-category', [
//            'categories' => $categories
            'categories' => Category::all()
        ]);
    }

    public function editCategory() {
        return view('admin.category.edit-category');
    }

    public static function deleteCategory(Request $request) {

        Category::deleteCategory($request);

        return redirect('/Category/manage-category')->with('message', 'Category deleted & cant be restored ! ');
    }


}
