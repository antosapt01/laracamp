<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\camp;

class PricingController extends Controller
{
    public function pricings()
    {
        return view('/pricing', ['data' => camp::get()]);
    }
}
