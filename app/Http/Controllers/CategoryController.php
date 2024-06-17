<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class CategoryController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index');//admin/category/index.blade.php
        // return 'index';//
    }

    /**
     * Show the form for creating a new resource.
     * Show the form for creating a new category.
     */
    public function create()
    {
        return view('admin.category.create');//admin/category/create.blade
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->only('category_name','description');
        // ClassName::method();

        Category::create($data);

        return redirect('/admin/category/create');
        //dd($request->all());

        //I want to store incomming data to categories table

        //1. QueryBUilder
        //2 Eleqoent ORM (Best Way) // 
        // Model file
        return 'store';
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
           //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
