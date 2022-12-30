<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komik;

class homeController extends Controller
{
    function index(Request $request) {
        return view("home", [
            "sort" => $request->sort,
            "komiks" => Komik::all()
        ]);
    }

    function single($slug) {
        return view("singleKomik", [
            "komik" => Komik::find($slug),
            "cart" => session("cart")
        ]);
    }
}
