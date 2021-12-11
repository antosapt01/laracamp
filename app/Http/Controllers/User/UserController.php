<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    

class UserController extends Controller
{
    public function index()
    {
        $checkout = checkout::with('camp')->where('user_id', Auth::id())->get();
        return view('user.dashboard', [
            'data' => $checkout
        ]);
    }   
}
