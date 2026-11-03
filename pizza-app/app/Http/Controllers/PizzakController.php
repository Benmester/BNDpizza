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
}
