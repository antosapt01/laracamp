<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\checkout;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $checkout = checkout::with('camp')->simplepaginate(10);
        return view('admin.dashboard', [
            'data' => $checkout
        ]);
    }
}
