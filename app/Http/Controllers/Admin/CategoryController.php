<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('parent')->with('children')->get();
        return view('roles.admin-dashboard.categories.index',compact('categories'));
    }

    public function store(Request $request)
    {
        $category = $request->validate(['name'=>'required|string|unique:categories,name',
                                        'parent'=>'sometimes|exists:categories,id']);
        Category::create($category);
        // return back();
    }
}
