<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\camp;

class CampController extends Controller
{
    public function index(){
        $data = camp::get();
       
        return view('/index', ['data' => $data]);
    }
    public function checkout(camp $camp){       
        return view('/checkout', ['data' => $camp]);
    }
}
