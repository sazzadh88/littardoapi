<?php

namespace App\Http\Controllers;

use App\BusinessSetting;
use App\Customer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if($user){
            return response()->json(['code' => 401, 'message' => 'Email exists']);
        }
        $user = User::create([
            'name' => $request->name,
            'email' =>$request->email,
            'password' => Hash::make($request->password),
        ]);

        $customer = new Customer();
        $customer->user_id = $user->id;
        $customer->save();

        if(BusinessSetting::where('type', 'email_verification')->first()->value != 1){
            $user->email_verified_at = date('Y-m-d H:m:s');
            $user->save();
           return response()->json(['code' => 200, 'message' => 'Registration successful']);
        }
        else {
            return response()->json(['code' => 200, 'message' => 'Registration successful. Please verify your email.']);
        }
    }
}
