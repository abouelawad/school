<?php

namespace App\Http\Controllers\Admin;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent')->with('children')->get();
        $allCategories = Category::all();
        confirmDelete('Delete department','confirm Delete');
        return view('roles.admin-dashboard.categories.index',compact('categories','allCategories'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|string|unique:categories,name',
            'parent'=>'sometimes|exists:categories,id'
            ]);

        if ($validator->fails()){
            Alert::warning('Warning', $validator->messages()->all());
            return view('sweetalert::alert');

        }else{
            Category::create($request->all());
            Alert::success('Success Title', 'Success Message');
            return view('sweetalert::alert');
        }
    }

    public function edit(Category $category)
    {
        return view('roles.admin-dashboard.categories.edit',compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        Alert::success('success','data deleted successfully');
        return back();
    }
}
