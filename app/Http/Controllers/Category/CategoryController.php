<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Console\View\Components\Alert as ComponentsAlert;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class CategoryController extends Controller
{
    public function addcategoryview(){
        return view('admin.addcategory');
    }

    public function addcategory(Request $request){
         $slug = \Str::slug($request->name);

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->save();
        Alert::success('Success', 'Category Added Successfully');
return back();
    }
}
