<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    public static function index(){
        $customers = CustomerModel::get();
        return view('pages.customers.index')->with(['customers' => $customers]);
    }

    public static function store(Request $request){
        // validate the request
        $request->validate([
            'inp_ln' => 'required|string|max:255',
            'inp_fn' => 'required|string|max:255',
            'inp_email' => 'required|email|unique:t_customers,cus_email',
            'inp_phone' => 'nullable|string|max:20',
            'inp_address' => 'nullable|string|max:255',
            'inp_city' => 'nullable|string|max:255',
            'inp_state' => 'nullable|string|max:255',
            'inp_postal ' => 'nullable|string|max:20',
            'inp_country' => 'nullable|string|max:255',
        ]);

        // save customer record
        CustomerModel::create([
            'cus_first_name' => $request->inp_fn,
            'cus_last_name' => $request->inp_ln,
            'cus_email' => $request->inp_email,
            'cus_phone_number' => $request->inp_phone,
            'cus_address' => $request->inp_address,
            'cus_city' => $request->inp_city,
            'cus_state' => $request->inp_state,
            'cus_postal_code' => $request->inp_postal,
            'cus_country' => $request->inp_country,
        ]);

        // redirect back with success message
        return redirect()->back()->with('success', 'Customer addedd successfuly!');
    }
}
