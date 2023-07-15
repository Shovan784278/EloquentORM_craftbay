<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    
    public function DemoAction(Request $request){

      return Brand::create($request->input());

    }

    public function BrandUpdate(Request $request){

      return Brand::where('id',$request->id)
        ->update($request->input());

    }

    public function UpdateOrCreate(Request $request){

      Brand::updateOrCreate(
        ['brandName'=> $request->brandName],
        $request->input()
      );

    }

    public function delete(Request $request){

      return Brand::where('id', $request->id)
        ->delete();

    }

    public function IncrementDecrement(){

    //return Product::where('id', 1)->increment('price', 1000);

    //return Product::where('id', 1)->increment('price'); //If we dont mention how much price i want to increse then it's increse 1

    //return Product::where('id', 2)->decrement('price',200); //This is for decrement

    return Product::where('id', 1)->decrement('price'); //If we dont mention how much price i want to decrese then it will decrese by 1 by 1.


    }

}
