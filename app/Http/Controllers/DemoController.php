<?php

namespace App\Http\Controllers;

use App\Models\Brand;
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

}
