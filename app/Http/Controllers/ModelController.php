<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car_model;
class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add_model(){

        return view('admin.car_model.add_model');

    }


     public function store(Request $request)
    {
        Car_model::create([

            'car_model'=> $request->get('car_model'),

        ]);
        return redirect()->to('/model');
    }

     public function index(){
        $car_models = Car_model::get();
        return view('admin.car_model.index',compact('car_models'));
    }

    public function edit($id){

        $car_model = Car_model::findOrFail($id);
        
        return view('admin.car_model.edit',compact('car_model'));
    }

    public function update($id){
        $car_model = Car_model::findOrFail($id);
        $car_model->car_model = request('car_model');
        $car_model->save();
        return redirect()->to('/model');
    }

    public function destroy($id){
        $car_model = Car_model::findOrFail($id);
        $car_model->delete();
        return redirect()->to('/model');
    }
}
