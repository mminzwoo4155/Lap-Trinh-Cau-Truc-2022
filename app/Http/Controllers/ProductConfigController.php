<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductConfig;
class ProductConfigController extends Controller
{
    public function GetProductConfigFromID(Request $request){
      $productConfig=ProductConfig::all();
      return $productConfig;
    }

}