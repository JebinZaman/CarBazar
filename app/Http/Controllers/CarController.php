<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Car_model;
use App\Color;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $cars = Car::get();
        return view('admin.car.index',compact('cars'));
    }

      public function add_car()
    {
        $color = Color::all();
        $brand = Brand::all();
        $car_model = Car_model::all();
        return view('admin.car.add_car',compact('color', 'brand', 'car_model'));
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

        $image = $request->file('img');
        if($image != '') {
            $imagecar = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imagecar);
            Car::create([

            'brand'=> $request->get('brand'),
            'car_model'=> $request->get('car_model'),
            'color'=> $request->get('color'),
            'description'=> $request->get('description'),
            'img'=> $imagecar,
            'price'=> $request->get('price'),

       ]);
        
        return redirect()->to('/car');
    }
}
  
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
       // return $car;
        $brand = Brand::all();
        $car_model = Car_model::all();
        $color = Color::all();
        //return 1;
        return view('admin.car.edit',compact('car', 'brand','car_model','color'));
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $image_hidden = $request->hidden_img;
        $image = $request->file('img');
            if($image != '') {
          $imagecar = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME) . '-' . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imagecar);

        $car->brand = request('brand');
        $car->car_model = request('car_model');
        $car->color = request('color');
        $car->description = request('description');
        $car->img = $imagecar;
        $car->price = request('price');
      //  $car->save();
    }else {
        $car->brand = request('brand');
        $car->car_model = request('car_model');
        $car->color = request('color');
        $car->description = request('description');
        $car->img = $image_hidden;
        $car->price = request('price');
    }
    $car->update();
    return redirect()->to('/car');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return redirect()->to('/car');
    }
}