<?php

namespace App\Http\Controllers;


use App\Models\Student;
use Illuminate\Http\Request;
class StudentiController extends Controller
{
    public function index()
    {
        return Student::all();
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->ime = $request->ime;
        $student->prezime = $request->prezime;
        $student->email = $request->email;
        $student->lozinka = $request->lozinka;
        $student->save();

        return 'Dodano';
    }

    public function edit(Request $request) {
        $student = Student::find($request->id);
        $student->ime = $request->ime;
        $student->prezime = $request->prezime;
        $student->email = $request->email;
        $student->lozinka = $request->lozinka;
        $student->save();

        return 'Uređeno';
    }

    public function destroy($id) {
        Student::find($id)->delete();

        return 'Izbrisano';
    }


}
