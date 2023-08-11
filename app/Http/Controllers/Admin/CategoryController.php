<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
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

    function editcategory(Category $category)
    {
        return view('admin.editcategory', compact('category'));
    }

    function update(Request $request, Category $category)
    {
        $category->name = $request->name;
        $category->update();
        Alert::success('Success', 'Changed Successfully');
        return redirect()->route('admin.addcategory.view');
    }

    function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        Alert::success('Success', 'Deleted Successfully');
        return back();
    }

    public function search(Request $request)
    {

        $searchTerm = $request->input('q');
        $categories = Category::where('name', 'like', '%' . $searchTerm . '%')
            ->latest()
            ->paginate(4);
        return view('admin.addcategory', compact('categories'));
    }

    function view()
    {
        $courses = Course::get()->all();
        return view('admin.appcourseview', compact('courses'));
    }

}
