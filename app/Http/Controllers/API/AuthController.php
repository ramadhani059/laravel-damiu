<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Owner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'UNAUTHORIZED'
            ], 401);
        }

        if ($user->user_category == 1) {
            $information = Admin::where('username', $user->username)->first();
        } elseif ($user->user_category == 2) {
            $information = Employee::where('username', $user->username)->first();
        } elseif ($user->user_category == 3) {
            $information = Owner::where('username', $user->username)->first();
        } elseif ($user->user_category == 4) {
            $information = Customer::where('username', $user->username)->first();
        }

        $token = $user->createToken('token')->plainTextToken;

        return response()->json([
            'message' => 'success',
            'user' => $user,
            'information' => $information,
            'token' => $token,
        ], 200);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        $user->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Berhasil LogOut'
        ], 200);
    }
}
