<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\URL;
use Illuminate\Routing\UrlGenerator;
use App\Http\Controllers\Auth;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

use App\Models\Shipping;
use App\Models\Transaksi;


class checkoutController extends Controller
{
    public function information() {
        return view("checkout.information", [
            "page" => "Information",
            "komiks" => session("cart")
        ]);
    }

    public function shipping(Request $request) {
        // dd(session('cart'));
        return view("checkout.shipping", [
            "page" => "Shipping",
            "request" => $request,
            "ekspedisis" => Shipping::all(),
            "alamat" =>  `{$request->alamat} ,  {$request->kecamatan} ,  {$request->kota} ,  {$request->provinsi} ,  {$request->country}` ,
            "komiks" => session("cart")
        ]);
    }

    public function payment(Request $request) {
        
        return view("checkout.payment", [
            "page" => "Payment",
            "komiks" => session("cart"),
            "shipping" => Shipping::find(session("checkout")["shipping"]),
            "request" => $request,
        ]);
    }
    public function proses(Request $request){
        dd($request->session()->get("checkout"));
        Transaksi::create([
            
        ]);
        return view("checkout.endcheckout");
    }
    
    public function storage(Request $request) {
        $checkout = session("checkout");

        $page = url()->previous();
        switch ($page) {
            case url("/checkout/information"):
                $checkout = [
                    "email" => $request->email,
                    "fname" => $request->fname,
                    "lname" => $request->lname,
                    "alamat" => $request->alamat,
                    "kota" => $request->kota,
                    "provinsi" => $request->provinsi
                ];
                session(["checkout" => $checkout]);
                return redirect("/checkout/shipping");

            case url("/checkout/shipping"):
                $ship = ["shipping" => $request->shipping];
                $checkout = array_merge($checkout, $ship);
                session(["checkout" => $checkout]);
                return redirect("/checkout/payment");
            default :
                $card = ["number" => $request->cardnum, "expdate" => $request->expdate];
                $checkout = array_merge($checkout, $card);
                $produk = [];
                foreach (session("cart") as $id => $prod) {
                    $singleProd = [$id, $prod["qty"]];
                    array_push($produk, $singleProd);
                    // $produk[$id] = $prod;
                }
                // $produk = session("cart");
                $produk = ["produk" => $produk];
                $checkout = array_merge($checkout, $produk);
                session(["checkout" => $checkout]);
                return redirect("/checkout/proses");
        }
    }

    
}
