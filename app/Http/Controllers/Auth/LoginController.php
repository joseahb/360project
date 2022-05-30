<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Validator;
use App\Models\User;
use App\Models\UserLog;
use Hash;
use Auth;
use Exception;

class LoginController extends Controller
{
    public function index()
    {
    	try
    	{
	    	if(Auth::check())
	    	{
		        return redirect()->route('admin.dashboard.index');
		    }

	    	return view('admin.auth.login');
	    }
        catch (Exception $e)
        {
            return redirect()->back()->with(['message' => $e->getMessage()]);
        }
    }

    public function login(Request $request)
	{
		try
		{
			$validator = Validator::make($request->all(),[
				'password' => 'required|string',
				'email' => 'required|string',
				'provider_code' => 'required'
			]);

			if($validator->fails())
			{
				Session::flash('error','Please check the form and try again');
				return redirect()
						->back()
						->withInput($request->all())
	                    ->withErrors($validator->errors());
			}
			$email = $request->email;
			$checkUser = User::query()
						->where(function($query) use($email){
							$query->where('email',$email);
						})
                        ->first();
			if($checkUser)
			{
				$credentials =  array('email' => $checkUser->email, 'password' => $request->password);

            	if (Auth::attempt($credentials))
            	{
            		// Storing User activity on database
            		$userLog = new UserLog();
					$userLog->subject = 'LOGIN';
					$userLog->url = request()->fullUrl();
					$userLog->method = request()->method();
					$userLog->ip = request()->ip();
					$userLog->agent = request()->header('user-agent');
					$userLog->user_id = auth()->check() ? Auth::User()->id : null;
					$userLog->save();

            		Session::flash('success','Login Succesfull.');
                	return redirect()->route('admin.dashboard.index');
            	}
				else
				{
					Session::flash('error','The provided password is incorrect.');
					return redirect()
						->back()
						->withInput($request->all());
				}
			}
			else
			{
				Session::flash('error','The provided email is not registred.');
					return redirect()
						->back()
						->withInput($request->all());
			}

		}
		catch (Exception $e)
		{
			Session::flash('error',$e->getMessage());
				return redirect()
						->back()
						->withInput($request->all());
		}
	}

	public function logout(Request $request)
	{
		try
		{
			Auth::logout();
        	$request->session()->invalidate();
            return redirect()->route('home');

		}
		catch (Exception $e)
		{
			Session::flash('error',$e->getMessage());
				return redirect()->back();
		}
	}
}
