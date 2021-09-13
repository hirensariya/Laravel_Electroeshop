<?php

namespace App\Http\Controllers;

use App\cart;
use App\product;
use App\register;
use Illuminate\Http\Request;

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
    public function index($cat)
    {
        $Product = product::where('cat', $cat)->get();
        // error_log($Product);
        return view(
            'product',
            [
                'product' => $Product,
                'cat' => $cat,
            ]
        );
    }
    public function product($id)
    {
        $Product = product::where('id', $id)->get();
        $allProduct = product::all();
        foreach ($Product as $s) {
            $Product = $s;
        }
        $newproduct = product::where('cat', 1)->get();
        // error_log($newproduct);
        return view(
            'product-detail',
            [
                'product' => $Product,
                'newproduct' => $newproduct,
            ]
        );
    }
    public function addcart(Request $request)
    {
        $id = $request->id;
        $Cart = new cart();
        $value = $request->session()->get('logid');
        if ($value != "") {
            $res = Cart::where('proid', $id)->where('userid', $value)->get();
            if ($res->isEmpty()) {
                $Product = product::where('id', $id)->get();
                // error_log($Product);
                foreach ($Product as $s) {
                    $Cart->proid = $s->id;
                    foreach ($s->image as $p) {
                        $i = 1;
                        if ($i <= 1) {
                            $Cart->productimage = $p;
                        }}
                    $Cart->productname = $s->name;
                    $Cart->qut = 1;
                    $Cart->price = $s->price;
                    $Cart->userid = $value;
                    $Cart->save();
                }
                error_log("sesscuss ...");
                return ["msg" => "Product is Add into Cart"];
            } else {
                error_log("Product is allready in cart.....");
                return ["msg" => "Product is allready in cart....."];
            }
        } else {
            error_log("please Login");
            return ["msg" => "Please Login....."];
        }
    }
}
