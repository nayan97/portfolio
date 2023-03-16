<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $categories = Category::latest() -> get();
            return view('admin.pages.portfolio.category', [
                'form_type' => 'create',
                'categories'    => $categories
            ]);
               
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // validate
         $this -> validate($request, [
            'name'      => 'required|unique:categories'
        ]); 

        // store 
        Category::create([
            'name'      => $request -> name,
            'slug'      => Str::slug($request -> name)
        ]);
        // return 
        return back() -> with('success' , 'Category Added successful');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
            
            $data = Category::latest() -> get();
        $single = Category::findOrFail($id);
          return view('admin.pages.portfolio.category', [ 
        'edit_data'    => $single,
        'all_data'    => $data,
        'form_type'   => 'edit'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete_data = Category::findOrFail($id);
      $delete_data -> delete();
      return back() ->with('success', 'Category deleted successfuly');
    }
}
