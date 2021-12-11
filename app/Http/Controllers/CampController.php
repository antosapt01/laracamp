<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\camp;

class CampController extends Controller
{
    public function index()
    {
        $data = camp::get();

        return view('/index', ['data' => $data]);
    }
    public function checkout(camp $camp, Request $request)
    {   
        // return $camp->register;
        if ($camp->register) {
            $request->session()->flash('error', "You are registered on {$camp->title} camp");
            return redirect('/dashboard');
        } 
            return view('/checkout', ['data' => $camp]);
        
    }
}
