<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Carreras;

class AlumnosController extends Controller
{
   
    public function index()
    {
        $alumnos= Alumno::all();
        $carreras= Carreras::all();
        return view('alumnos', compact('alumnos','carreras'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $alumnos= new Alumno($request->input());
        $alumnos-> saveOrFail();
        return redirect('alumnos');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
