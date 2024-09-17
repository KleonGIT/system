<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    public static function index()
    {
        $customers = CustomerModel::get();
        return view('pages.customers.index')->with(['customers' => $customers]);
    }

    public static function store(Request $request)
    {
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

    public function edit($id)
    {
        $customers = CustomerModel::findOrFail($id);
        return view('pages.customers.edit', compact('customers'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'cus_first_name' => 'required',
        'cus_last_name' => 'required',
        'cus_email' => 'required|email',
        'cus_phone_number' => 'required',
        'cus_address' => 'required',
        'cus_city' => 'required',
        'cus_state' => 'required',
        'cus_postal_code' => 'required',
        'cus_country' => 'required',
    ]);

    $customers = CustomerModel::findOrFail($id);
    $customers->update([
        'cus_first_name' => $request->cus_first_name,
        'cus_last_name' => $request->cus_last_name,
        'cus_email' => $request->cus_email,
        'cus_phone_number' => $request->cus_phone_number,
        'cus_address' => $request->cus_address,
        'cus_city' => $request->cus_city,
        'cus_state' => $request->cus_state,
        'cus_postal_code' => $request->cus_postal_code,
        'cus_country' => $request->cus_country,
    ]);

    return redirect()->route('pages.customers.index')->with('success', 'Customer updated successfully');
}
}
