<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use DB;
use App\Car;

class BrandController extends Controller
{

    public function index(){
        $brands = Brand::get();
        return view('admin.brand.index',compact('brands'));
    }




       public function add_brand()
    {
        return view('admin.brand.add_brand');
    }

    public function store(Request $request)
    {
    	Brand::create([

    		'brand'=> $request->get('brand'),

    	]);
    	return redirect()->to('/brand');
    }

    public function edit($id){

        $brand = Brand::findOrFail($id);
        //return 1;
        return view('admin.brand.edit',compact('brand'));
    }

    public function update($id){
        $brand = Brand::findOrFail($id);
        $brand->brand = request('brand');
        $brand->save();
        return redirect()->to('/brand');
    }

    public function destroy($id){
        $brand = Brand::findOrFail($id);
        $brand->delete();
        return redirect()->to('/brand');
    }


public function searchBrand(Request $data){

    $brand = $data->brand;
    $model = $data->car_model;
    $color = $data->color;
    // return $brand;
    if ($brand=='' or $model=='' or $color=='') {
        return redirect()->to('/');
    }

    else{

    $search_brand  = Car::all()->where('brand',$brand)->where('car_model',$model)->where('color',$color);

    // dd($search_brand);
     return view('search_car_brand',compact('search_brand'));
   // return $search_brand->car->brand;


    // if(!empty($search_brand)){
    //     return "data found";
    // }else{
    //     return "data not found";
    // }

    // return $search_brand;

    // foreach ($newData as $search_brand) {
    //     foreach ($n as $newData) {
    //          return $n->price;
    //     }
       
    // }

      }  

    // $search_brand = $user = DB::table('brands')->where('brand', $brand)->first();
    // $search_car_model = $user = DB::table('car_models')->where('car_model', $model)->first();
    // $search_color = $user = DB::table('colors')->where('color', $color)->first();

    // if( $search_brand == true && $search_car_model==true && $search_color==true){
    //     return " do something! ";
    // }


      // return view('index',compact($search_brand));

}


}
