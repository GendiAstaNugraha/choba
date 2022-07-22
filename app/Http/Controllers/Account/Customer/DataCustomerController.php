<?php

namespace App\Http\Controllers\Account\Customer;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DataCustomerController extends Controller
{

    public function index()
    {
        $data = User::where('role', 'customer')->get();
        return view('admin.content.account pages.customer', compact('data'));
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $validateData =['name' => $validateData['name'],'email' => $validateData['email'],'role' =>'customer'];
        $validateData['password'] = bcrypt($request['password']);
        $data = User::create($validateData);
        $data->assignRole('customer');
        return redirect()->route('data.customer')->with('status', 'Successfully Create Customer Account');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('data.customer')->with('status', 'Successfully Delete Customer Account');
    }
}
