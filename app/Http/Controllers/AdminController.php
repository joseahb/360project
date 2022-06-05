<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function initialize()
    {
        Http::get(url('api/branches'));
        Http::get(url('api/branch'));
        return Http::get(url('api/properties'));
    }

    public function register(Request $request)
    {
        $registration = new Registration();
        $registration->name = $request->input('full_name');
        $registration->email = $request->input('email');
        $registration->phone = $request->input('phone');
        $registration->type = $request->input('type');
        $registration->area = $request->input('area');

        if ($request->input('company') != null && $request->input('type') == 'developer') {
            $registration->company = $request->input('company');
        }
        $registration->save();
        // $this->send($registration);
        Session::flash('message', 'Registration has been sent to us');
        return view('register');
    }
    public function send($registration)
    {
        $data = array('name'=>$registration->name, 'email'=> $registration->email,'area' => $registration->area, 'phone'=> $registration->phone,'type'=> $registration->type);

        Mail::send(['text'=>'mail'], $data, function ($message) {
            $message->to('biwottjoseah@gmail.com', '360 Project')->subject('Welcome to 360Project');
            $message->from(env('MAIL_FROM_ADDRESS'), '360Project');
        });
    }
}
