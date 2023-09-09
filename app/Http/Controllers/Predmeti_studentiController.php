<?php

namespace App\Http\Controllers;


use App\Models\Predmet_student;
use Illuminate\Http\Request;

class Predmeti_studentiController extends Controller
{
    public function index()
    {
        return Predmet_student::all();
    }

    public function store(Request $request)
    {
        $ps = new Predmet_student();
        $ps->ocjena = $request->ocjena;
        $ps->predmet_id = $request->predmet_id;
        $ps->student_id = $request->student_id;
        $ps->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $ps = Predmet_student::find($request->id);
        $ps->ocjena = $request->ocjena;
        $ps->predmet_id = $request->predmet_id;
        $ps->student_id = $request->student_id;
        $ps->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Predmet_student::find($id)->delete();

        return 'Izbrisano';
    }

}
