<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\store;
use App\Models\camp;
use App\Models\checkout;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkout(store $request, camp $camp)
    {

        // return $request->all();
        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['camp_id'] = $camp->id;


        $user = User::find(Auth::id());
        $user->email = $data['email'];
        $user->name = $data['name'];
        $user->occupation = $data['occupation'];
        $user->save();



        checkout::create($data);
        return redirect('checkout_success');
    }
    public function checkout_success()
    {
        return view('checkout_success');
    }

    public function index()
    {
        $checkout = checkout::with('camp')->where('user_id', Auth::id())->get();
        return view('/dashboard', ['data' => $checkout]);
    }
}
