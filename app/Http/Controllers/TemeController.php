<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;
class TemeController extends Controller
{
    public function index()
    {
        return Tema::all();
    }

    public function store(Request $request)
    {
        $tema = new Tema();
        $tema->naziv = $request->naziv;
        $tema->opis = $request->opis;
        $tema->predmet_id = $request->predmet_id;
        $tema->student_id = $request->student_id;
        $tema->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $tema = Tema::find($request->id);
        $tema->naziv = $request->naziv;
        $tema->opis = $request->opis;
        $tema->predmet_id = $request->predmet_id;
        $tema->student_id = $request->student_id;
        $tema->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Tema::find($id)->delete();

        return 'Izbrisano';
    }
}
