<?php

namespace App\Http\Controllers;

use App\Http\Requests\user\store;
use App\Mail\Checkout\AfterCheckout;
use App\Models\camp;
use App\Models\checkout;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function checkout(store $request, camp $camp)
    {

        $data = $request->all();
        $data['user_id'] = Auth::id();
        $data['camp_id'] = $camp->id;
        $data['expired'] = $request->expired.'-01';


        $user = User::find(Auth::id());
        $user->email = $data['email'];
        $user->name = $data['name'];
        $user->occupation = $data['occupation'];
        $user->save();

        $checkout = checkout::create($data);

        Mail::to(Auth::user()->email)->send(new AfterCheckout($checkout));
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

    public function updated_payment(Request $request, checkout $checkout){
        $checkout->is_paid = true;
        $checkout->save();
        $request->Session()->flash('success', "Checkout with ID {$checkout->id} has been updated");;
        return redirect(route('admin.dashboard'));
    }

    public function invoices(checkout $checkout){
        return $checkout;
    }
    
}
