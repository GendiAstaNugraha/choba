<?php

namespace App\Http\Controllers\Account\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('customer.content.home');
    }
}
