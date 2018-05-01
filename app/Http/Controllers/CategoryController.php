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
        return view('category');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'categoryId' => 'required'
        ]);
        $category = new Category;
        $category->category_name = $request->input('categoryId');
        $category->save();
        return redirect('/category')->with('response', 'Kategória hozzáadva');
    }
}
