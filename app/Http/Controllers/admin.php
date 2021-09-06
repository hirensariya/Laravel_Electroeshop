<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\register;

class admin extends Controller
{
     public function register(Request $request)
    {
        
        $Register = new register();
        $Register->frist_name = $request->frist_name;
        $Register->last_name = $request->last_name;
        $Register->email = $request->email;
        $Register->phone = $request->phone;
        $Register->password = $request->password;
        $Register->address = $request->address;
        $Register->address2 = $request->address2;
        $Register->city = $request->city;
        $Register->district = $request->district;
        $Register->zip = $request->zip;
        $res = $Register->save();
        if ($res) {
            // return redirect('/')->with('Success', 'you have register successfly');
            return back()->with('Success', 'you have register successfly');
        } else {
            return back()->with('Fail', 'Somethong goes wrong');
        }
    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        // error_log($email);
        $res = register::where('email', $email)->where('password', $password)->get();
        if ($res->isEmpty()) {
            return back()->with('FailLogin', 'Email or Password is not correct...');
        } else {
            foreach ($res as $s) {
                $res = $s;
            }
            $request->session()->put('logid', $res->id);
            return redirect('/')->with('Login', 'You have login successfly');
        }
    }
    public function logout(Request $request)
    {
        $request->Session()->forget('logid');
        return redirect('/')->with('logout', 'Logout successfly....');
    }
}
