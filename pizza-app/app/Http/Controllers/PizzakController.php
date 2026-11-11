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
    public function OsszesP($p) {
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
        else if ($p == "321") {
            $data = Pizza::orderBy('ar', 'DESC') -> get();
            return view('osszes', [
                "data" => $data
            ]);
        }
        else {
            $data = Pizza::all();
            return view('osszes', [
                "data" => $data
            ]);
        }
    }

    public function Adatlap($id) {
        $data = Pizza::find($id);

        if (isset($data)) {
            return view('adatlap', [
                "data" => $data
            ]);
        }
    }

    public function Ajanlat() {
        $data = Pizza::inRandomOrder() -> first();
        return view('adatlap', [
            "data" => $data
        ]);
    }

    # Add
    public function Add( Request $req) {
        $req -> validate([
            # Validálási feltételek
            'nev'       => 'required|min:4|max:25|unique:pizzak,nev',         # vagy between:4,25
            'feltet'    => 'required',
            'ar'        => 'required|numeric|min:2000'
        ], [
            # Magyarítás, csak fullstack-ben
            'required'  => 'Kötelező megadni!',
            'nev.min'   => 'Legalább 4 karakter legyen!',
            'ar.min'    => 'Legalább 2000 Ft legyen!',
            'nev.max'   => 'Maximum 25 karakter lehet!',
            'nev.unique'=> 'A megadott név már lézetik!'
        ]);

        $data = new Pizza;
        $data['nev']    = $req['nev'];
        $data['feltet'] = $req['feltet'];
        $data['ar']     = $req['ar'];
        if ($req -> has('akcios')) {
            $data['akcios'] = 1;
        } else {
            $data['akcios'] = 0;
        }
        $data -> save();                                                        # adatbázisba mentés
        return view('success', [
            'msg' => "Sikeresen hozzáadtad a(z): ".$req['nev']." pizzát!"
        ]);
    }

    # mod
    public function ModForm($id) {
        $data = Pizza::find($id);
        if (isset($data)) {
            return view('mod', [
                'data' => $data
            ]);
        } else {
            return view('error');
        }
    }

    public function ModBTN(Request $req, $id) {
            # id vagy URL-ből, vgagy hidden inputként szerezhető meg (majd API-nál)
            $req -> validate([
            # Validálási feltételek
            'nev'       => 'required|min:4|max:25|unique:pizzak,nev,'.$id,         # vagy between:4,25
            'feltet'    => 'required',
            'ar'        => 'required|numeric|min:2000'
        ], [
            # Magyarítás, csak fullstack-ben
            'required'  => 'Kötelező megadni!',
            'nev.min'   => 'Legalább 4 karakter legyen!',
            'ar.min'    => 'Legalább 2000 Ft legyen!',
            'nev.max'   => 'Maximum 25 karakter lehet!',
            'nev.unique'=> 'A megadott név már lézetik!'
        ]);

        $data = Pizza::find($id);
        # $data['id'] = $id;     b opció (rosszabb)
        $data['nev']    = $req['nev'];
        $data['feltet'] = $req['feltet'];
        $data['ar']     = $req['ar'];
        if ($req -> has('akcios')) {
            $data['akcios'] = 1;
        } else {
            $data['akcios'] = 0;
        }
        $data -> save();

        return redirect('/osszes') -> with([
            # egyszer használatos session() készítése
            "msg" => "Sikeresen módosította a pizzát!"
        ]);
        # ezzel azonnal törldik a request
    }

    # delete
    public function Alert($id) {
        $data = Pizza::find($id);
        if (isset($data)) {
            return view('alert', [
                'data' => $data
            ]);
        } else {
            return view('error');
        }
    }

    public function Del($id) {
        $data = Pizza::find($id);
        $data -> delete();
        return redirect('/osszes') -> with([
            'msg' => "Sikeres törlés!"
        ]);
    }
}
