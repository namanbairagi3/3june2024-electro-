<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::all();// AOO Array of Objects
        
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
        // dd($request->all());
       $request->validate([
                                'brand_name'=>'required|unique:brands',
                                'brand_logo' => 'required|mimes:jpg,jpeg,png|max:2024|dimensions:width=120,height=80',// 2024kb = 1mb
                                'seo_meta_title'=>'required',
                                'seo_meta_desc'=>'required|',
                            ]); //PHP Associative Array

        //File uploading logic
        $file = $request->file('brand_logo');
        $dst='';
        if($file){
            $path = $file->store('public/brand_images');
            //The file is comming
             // Extract the filename from the path
            $filename = basename($path);    
            $dst='/storage/brand_images/'.$filename;
            //dd( );
        }                  

        //Eleqouent 
        $data = $request->only('brand_name','brand_logo','seo_meta_title','seo_meta_desc');
        //dd($data);
        $data['brand_logo']=$dst;
        Brand::create($data);
        return back()->with('success','Brand created successfully');
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
        {
            //Brand::
            // $dst='/storage/brand_images/'.$filename;
            //$brand->brand_logo contain the url
            // Get the filename from the brand's logo URL
            $filename = basename($brand->brand_logo);
    
            // Define the storage path for the logo
            $storagePath = 'public/brand_images/' . $filename;
            //dd($storagePath);
    
            // Check if the file exists and delete it
            if (Storage::exists($storagePath)) {
                Storage::delete($storagePath);
            }
            $brand->delete();
    
            return back();//
    }
}
}