<?php

namespace App\Http\Controllers\Account\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DataAdminController extends Controller
{
    public function index()
    {
        $data = User::where('role', 'admin')->get();
        return view('admin.content.account pages.admin', compact('data'));
    }

    public function add(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $validateData =['name' => $validateData['name'],'email' => $validateData['email'],'role' =>'admin'];
        $validateData['password'] = bcrypt($request['password']);
        $data = User::create($validateData);
        $data->assignRole('admin');
        return redirect()->route('data.admin')->with('status', 'Successfully Create Admin Account');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('data.admin')->with('status', 'Successfully Delete Admin Account');
    }
}
