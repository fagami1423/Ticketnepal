<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{
    protected $redirectTo = '/admin';
    
    public function __construct(){
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('backend.users.login');
    }

    public function loginAdmin(Request $request)
    {
        
        //to validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        

        if (Auth::guard('admin')->attempt(['email'=>$request->email,'password' => $request->password], $request->remember)){
            return redirect()->intended(route('admin.dashboard'))->with('message','Successfully Logged in');
        }
        else {
            return redirect()->back()->withInput($request->only('email','remember'))->withErrors(['The credentials do not match']);
        }
        
    }
}
