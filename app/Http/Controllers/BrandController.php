<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = [
            [
                'id'=>'1',
                'name'=>'redmi',
                'logo'=>''
            ],
            [
                'id'=>'2',
                'name'=>'LG',
                'logo'=>''
            ]
        ];
       return view('admin.brands.index',['brands'=>$brands]);   //'index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brands.create');   //'create';
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // POST method
    {
        //dd($request->all());
       $request->validate([
                                'brand_name'=>'required|unique:brands',
                                'brand_logo' => 'mimes:jpg,jpeg,png|max:1024',// 1024kb = 1mb
                                'seo_meta_title'=>'',
                                'seo_meta_desc'=>'',
                            ]); //PHP Associative Array
        //How you can recieve the incomming data
        //With $request object
        //dd($request->all());

        //Store into brands table

        //Eleqouent 
        $data = $request->only('brand_name','brand_logo','seo_meta_title','seo_meta_desc');
        //dd($data);
        Brand::create($data);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
