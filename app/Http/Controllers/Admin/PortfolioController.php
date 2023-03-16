<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Portfolio;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::latest() -> get();
       $categories = Category::latest() -> get();
        return view('admin.pages.portfolio.index', [
            'form_type'     => 'create',
            'portfolios'    => $portfolios,
            'categories'    =>  $categories
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
              
        // validation 
        // $this -> validate($request, [
        //     'name'      => ['required'],
        //     'cat'      => ['required'],
        //     'photo'      => ['required'],
        // ]);

        // image management 

        $portfolio =new portfolio;
        $img =$request -> photo;
        $file_name =time().'.'. $img->getClientOriginalExtension();

        $request -> photo -> move('img', $file_name);

        //$doctor->photo =$img_name;

        // store 
        $portfolio = Portfolio::create([
            'title'         => $request -> title,
            'slug'          => Str::slug($request -> title),
            'featured'      => $file_name,
           
        ]);

        $portfolio -> category() -> attach($request -> cat);


        // return back 
        return back() -> with('success' , 'Portfolio Added successful');
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
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
