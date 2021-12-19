<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginConfig;
class LoginConfigController extends Controller
{
    public function GetLoginConfigFromID(Request $request){
      $LoginConfig=LoginConfig::all();
      return $LoginConfig;
    }

}
