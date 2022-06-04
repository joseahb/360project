<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use App\Models\User;
use App\Models\UserLog;
use Hash;
use Auth;
use Exception;

class RegisterController extends Controller
{
    public function registration(Request $request)
    {
        if(Auth::check()){
            return redirect()->route('home');
        }
        try {
            $user = User::where('email', $request->email)->first();
            if (!empty($user)) {
                User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'password' => Hash::make( $request->input('password')),
                ]);
            }
        } catch (\Exception $e) {

        }
        return view('index');
    }
}
