<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komik;
use App\Models\Transaksi;
use App\Models\Transaksi_detail;

class cartController extends Controller
{

    public function index() {
        $cart = session("cart");
        return view('cart', [
            "cart" => $cart
        ]);


    }

    public function tambah(Request $request) {
        
        $komik = Komik::find($request->id);
        
        $cart = session("cart");

        if ($cart == null) {
            $cart[$komik->id] = [
                "genreId" => $komik->genreId,
                "judul" => $komik->judul,
                "harga" => $komik->harga,
                "stok" => $komik->stok,
                "img" => $komik->img,
                "qty" => $request->qty
            ];
        } else {
            if (array_key_exists($request->id, $cart)) {
            
                $cart[$komik->id] = [
                    "genreId" => $komik->genreId,
                    "judul" => $komik->judul,
                    "harga" => $komik->harga,
                    "stok" => $komik->stok,
                    "img" => $komik->img,
                    "qty" => $request->qty
                ];
    
            } else {
                $cart[$komik->id] = [
                    "genreId" => $komik->genreId,
                    "judul" => $komik->judul,
                    "harga" => $komik->harga,
                    "stok" => $komik->stok,
                    "img" => $komik->img,
                    "qty" => $request->qty
                ];
            }
        }

        session(["cart" => $cart]);
        return redirect("/cart");

        
    }

    public function hapus($id) {
        $cart = session("cart");
        unset($cart[$id]);
        session(["cart" => $cart]);
        return redirect("/cart");
    }

    public function tambahTransaksi() {
        $cart = session("cart");
        $id_transaksi = Transaksi::tambahTransaksi();
        foreach ($cart as $ct => $val) {
            $id_komik = $ct;
            $jumlah = $val["qty"];
            Transaksi_detail::tambahDetailTransaksi($id_komik, $id_transaksi, $jumlah);
        }

        session()->forget("cart");

        return redirect("/cart");
    }

}
