<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzakController extends Controller
{
    public function Fooldal() {
        $data = Pizza::all() -> where('akcios', 1);
        return view('welcome', [
            "data" => $data
        ]);
    }
    public function Osszes() {
        $data = Pizza::all();
        return view('osszes', [
            "data" => $data
        ]);
    }

    public function Adatlap($id) {
        $data = Pizza::find($id);

        if (isset($data)) {
            return view('adatlap', [
                "data" => $data
            ]);
        }
    }

    public function Ajanlat($p) {
        if ($p == "abc") {
            $data = Pizza::orderBy('nev') -> get();
            return view('osszes', [
                "data" => $data
            ]);

        }
        else if ($p == "cba") {
            $data = Pizza::orderBy('nev', 'DESC') -> get();
            return view('osszes', [
                "data" => $data
            ]);
        }
        else if ($p == "123") {
            $data = Pizza::orderBy('ar') -> get();
            return view('osszes', [
                "data" => $data
            ]);
        }
        else if ($p == )
    }
}
