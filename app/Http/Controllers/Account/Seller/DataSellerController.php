<?php

namespace App\Http\Controllers\Account\seller;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class DataSellerController extends Controller
{
    public function index()
    {
        $data = User::where('role', 'seller')->get();
        return view('admin.content.account pages.seller', compact('data'));
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $validateData =['name' => $validateData['name'],'email' => $validateData['email'],'role' =>'seller'];
        $validateData['password'] = bcrypt($request['password']);
        $data = User::create($validateData);
        $data->assignRole('seller');
        return redirect()->route('data.seller')->with('status', 'Successfully Create Reseller Account');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('data.seller')->with('status', 'Successfully Delete Reseller Account');
    }
}
