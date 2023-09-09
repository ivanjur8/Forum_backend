<?php

namespace App\Http\Controllers;

use App\Models\Predmet;
use Illuminate\Http\Request;
class PredmetiController extends Controller
{
    public function index()
    {
        return Predmet::all();
    }

    public function store(Request $request)
    {
        $pred = new Predmet();
        $pred->naziv = $request->naziv;
        $pred->opis = $request->opis;
        $pred->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $pred = Predmet::find($request->id);
        $pred->naziv = $request->naziv;
        $pred->opis = $request->opis;
        $pred->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Predmet::find($id)->delete();

        return 'Izbrisano';
    }

}
