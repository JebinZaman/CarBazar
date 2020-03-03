<?php

namespace App\Http\Controllers;

use App\Page;
use App\Brand;
use App\car_model;
use App\color;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $color = Color::all();
        $brand = Brand::all();
        $car_model = Car_model::all();
        return view('index',compact('color', 'brand', 'car_model'));
      //  return view('index');
    }



    
    public function about()
    {
        return view('about');
    }

     public function stock()
    {
        return view('stock');
    }

     public function newColl()
    {
        return view('new collection');
    }

     public function service()
    {
        return view('service');
    }

     public function recondition()
    {
        return view('recondition');
    }

    public function contact()
    {
        return view('contact');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

       public function profile()
    {
        return view('admin.dashboard');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
