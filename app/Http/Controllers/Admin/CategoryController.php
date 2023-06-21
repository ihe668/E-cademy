<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class CategoryController extends Controller
{
    public function addcategoryview()
    {
        $categories = Category::get()->all();
        return view('admin.addcategory', compact('categories'));
    }


    public function addcategory(Request $request)
    {
        $slug = \Str::slug($request->name);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->save();
        Alert::success('Success', 'Category Added Successfully');
        return back();
    }
}
