<?php

namespace App\Http\Controllers;

use App\product;
use App\register;
use App\cart;
use App\wishlist;
use App\ordertable;
use App\temptable;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class admin extends Controller
{
    public function home(Request $request)
    {
        $Product = product::all();
        $value = $request->session()->get('logid');
        $res = register::where('id', $value)->get();
        return view(
            'index',
            [
                'product' => $Product,
            ]
        );
    }
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
            $request->session()->put('logname', $res->frist_name);
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
        $quntity = $request->quntity;
        $color = $request->color;
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
                    $Cart->color = $color;
                    $Cart->qut = $quntity;
                    $Cart->price = $s->price;
                    $Cart->userid = $value;
                    $Cart->save();
                }
                error_log("success ...");
                return ["msg" => "Product is Added into Cart"];
            } else {
                error_log("Product is already in cart.....");
                return ["msg" => "Product is already in cart....."];
            }
        } else {
            error_log("please Login");
            return ["msg" => "Please Login....."];
        }
    }
    public function cart(Request $request)
    {
        $id = $request->session()->get('logid');
        $res = cart::where('userid', $id)->get();
        return view('cart', ['res' => $res]);
    }
    public function uptcart(Request $request)
    {
        $st = 0;
        $stq = 0;
        $userid = $request->session()->get('logid');
        $id = $request->id;
        $qut = $request->quntity;
        if($qut <= 0){
            return ["msg"=>"Minimum 1 quantity required"];
        }else{
        $res = Cart::where('id', $id)->limit(1)->update(['qut' => $qut]);
        if ($res == 1) {
            $newres = cart::where('id', $id)->get();
            error_log($newres);
            foreach ($newres as $s) {
                $st = $st + $st + $s->qut * $s->price;    
            }
            $newres = cart::where('userid', $userid)->get();
            foreach ($newres as $s) {
                $stq = $stq + $s->qut * $s->price;
            }
            return ["price" => $st, "totalprice" => $stq];
        }
    }
    }
    public function checkout(Request $request)
    {
        $stq=0;
        $userid = $request->session()->get('logid');
        if ($userid != "") {
            $res = register::where('id', $userid)->get();
            // $custmproduct = cart::where('userid', $userid)->get();
            foreach ($res as $Res) {
                $s = $Res;
            }
            $newres = cart::where('userid', $userid)->get();
            foreach ($newres as $news) {
                $stq = $stq + $news->qut * $news->price;
            }
            return view('/checkout', ['res' => $s, 'price'=>$stq]);
        } else {
            return redirect('/')->with('checkoutstsuts', 'Please login frist');
        }
    }
    public function placeorder(Request $request)
    {
        $st = 0;
        $name = $request->fname;
        $phone = $request->phone;
        $email = $request->email;
        $Temptable = new temptable();
        $userid = $request->session()->get('logid');
        $newres = cart::where('userid', $userid)->get();
        foreach ($newres as $s) {
            $ordername = $s->productname;
            $st = $st + $s->qut * $s->price;
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
        curl_setopt($ch, CURLOPT_HEADER, FALSE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                "X-Api-Key:test_f4bbc56cf7ed8b53e2b7bf0940e",
                "X-Auth-Token:test_04f795951c48bb0d5cabdf2c2de"
            )
        );
        $payload = array(
            'purpose' => $ordername,
            'amount' => $st,
            'phone' => $phone,
            'buyer_name' => $name,
            'redirect_url' => 'http://localhost:8000/thank',
            'send_email' => true,
            'webhook' => 'http://www.example.com/webhook/',
            'send_sms' => true,
            'email' => $email,
            'allow_repeated_payments' => false
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
        $response = curl_exec($ch);
        curl_close($ch);
        $response = json_decode($response);
        $request->session()->put('payid', $response->payment_request->id);
        $Temptable->userid = $userid;
        $Temptable->oname = $name;
        $Temptable->ophone = $phone;
        $Temptable->oaddress = $request->address;
        $Temptable->oaddress2 = $request->address2;
        $Temptable->ocity = $request->city;
        $Temptable->odistric = $request->dis;
        $Temptable->ozip = $request->zip;
        $Temptable->save();
        header('location:' . $response->payment_request->longurl);
        die();
        echo $response;
    }
    public function thank(Request $request)
    {
        $userid = $request->session()->get('logid');
        $o = temptable::where('userid', $userid)->get(); {
            foreach ($o as $sa) {
                $oname = $sa->oname;
                $ophone = $sa->ophone;
                $oaddress = $sa->oaddress;
                $oaddress2 = $sa->oaddress2;
                $ocity = $sa->ocity;
                $odistric = $sa->odistric;
                $ozip = $sa->ozip;
            }
        }
        $res = cart::where('userid', $userid)->get();
        foreach ($res as $s) {
            $order = new ordertable();
            $order->userid = $userid;
            $order->payid = $request->payment_id;
            $order->pid = $s->proid;
            $order->pname = $s->productname;
            $order->pqty = $s->qut;
            $order->pcolor = $s->color;
            $order->pprice = $s->price;
            $order->oname = $oname;
            $order->ophone = $ophone;
            $order->oaddress = $oaddress;
            $order->oaddress2 = $oaddress2;
            $order->ocity = $ocity;
            $order->odistric = $odistric;
            $order->ozip = $ozip;
            $order->save();
        }
        $res = cart::where('userid', $userid)->delete();
        $res = temptable::where('userid', $userid)->delete();
        return view('/thank');
    }
    public function deletecart(Request $request,$id)
    {
        $newres = cart::where('id', $id)->delete();
        return redirect('/cart')->with('deletecart', 'Item is deleted');
    }
}

