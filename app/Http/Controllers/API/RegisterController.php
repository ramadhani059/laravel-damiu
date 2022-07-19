<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register_customer(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'customer_name' => 'required',
        ]);

        $user = new User;
        $customer = new Customer;

        $password = Hash::make($request->password);

        $user->username = $request->username;
        $user->password = $password;
        $user->user_category = 4;
        $user->save();

        $customer->username = $request->username;
        $customer->customer_name = $request->customer_name;
        $customer->customer_address = '-';
        $customer->customer_city = '-';
        $customer->customer_province = '-';
        $customer->customer_phone = '085815554xxx';
        $customer->customer_email = $request->customer_email;
        $customer->customer_location = '-';
        $customer->customer_image_original = '-';
        $customer->customer_image_encrypted = '-';
        $customer->save();

        return response()->json([
            'message'       => 'Data Customer Berhasil Ditambahkan',
            'data_customer' => $customer,
        ], 200);
    }
}
