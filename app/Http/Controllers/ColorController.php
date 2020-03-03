<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Color;

class ColorController extends Controller
{
   
        public function add_color()
    {
        return view('admin.color.add_color');
    }

     public function store(Request $request)
    {
    	Color::create([

    		'color'=> $request->get('color'),

    	]);
       return redirect()->to('/color');
    }

     public function index(){
        $colors = Color::get();
        return view('admin.color.index',compact('colors'));
    }

    public function edit($id){

        $color = Color::findOrFail($id);
        
        return view('admin.color.edit',compact('color'));
    }

    public function update($id){
        $color = Color::findOrFail($id);
        $color->color = request('color');
        $color->save();
        return redirect()->to('/color');
    }

    public function destroy($id){
        $color = Color::findOrFail($id);
        $color->delete();
        return redirect()->to('/color');
    }
    


}
