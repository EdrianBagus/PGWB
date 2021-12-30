<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $getCustomer = Customer::all();
        return view('produk.customer',compact('getCustomer'));
    }

    public function destroy($id)
    {
        $getCustomer = Customer::find($id);
        $getCustomer->delete();
        return redirect()->back();
    }
}
