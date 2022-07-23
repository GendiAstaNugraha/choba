<?php

namespace App\Http\Controllers\Account\Customer;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Courier;
use App\Models\Province;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class CartController extends Controller
{
    public function index()
    {
        $data = User::where('role', 'customer')->get();
        $provinces = Province::pluck('title', 'province_id');
        $couriers = Courier::pluck('title', 'code');
        return view('customer.content.cart', compact('data', 'provinces', 'couriers'));
    }

    public function getCities($id)
    {
        $city = City::where('province_id', $id)->pluck('title', 'city_id');
        return json_encode($city);
    }

    public function getOngkir(Request $request)
    {
        $cost = RajaOngkir::ongkosKirim([
            'origin'        => 489,     // ID kota/kabupaten asal
            'destination'   => $request->city,      // ID kota/kabupaten tujuan
            'weight'        => 1000,    // berat barang dalam gram
            'courier'       => $request->courier    // kode kurir pengiriman: ['jne', 'tiki', 'pos'] untuk starter
        ])->get();
        // dd($cost[0]['costs']);
        return view('customer.content.ongkir', compact('cost'));
    }


}
