<?php

namespace App\Http\Controllers\Account\Customer;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function index()
    {
        $data = User::where('role', 'customer')->get();
        return view('customer.content.cart', compact('data'));
    }
}
