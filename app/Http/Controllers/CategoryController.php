<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        return view('admin.category');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'categoryId' => 'required',
            'class' => 'min:3|required',
            'image' => 'required',
        ]);
        $category = new Category;
        $category->name = $request->input('categoryId');
        $category->class = $request->input('class');
        $category->image = $request->input('image');
        $category->save();
        return redirect('/category')->with('response', 'Kategória hozzáadva');
    }
}
