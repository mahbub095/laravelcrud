<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Gate;

class CategoryController extends Controller
{

    public function index()
    {
        $categories =Category::all();
        return view('category.index',compact('categories'));
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        //return $request->all();
          Category::create($request->all());
          return back();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($request->category_id);
        $category->update($request->all());
        return back();
    }

    public function destroy($id)
    {
        //
    }
}
