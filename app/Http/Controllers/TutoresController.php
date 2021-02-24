<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;

class TutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tutores");
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombreEmpresa'=>'required',
            'tipoDocumento'=>'required',
            'numeroDocumento'=>'required',
            'nombre'=>'required',
            'primerApellido'=>'required',
            'segundoApellido'=>'required', 
            'estado'=>'required',
            'numeroTelefono'=>'required', 
            'email'=>'required',                       
        ]);

        DB::table('tutors')->insert([
            "nombreEmpresa" => $request->nombreEmpresa,
            "tipoDocumento" => $request->tipoDocumento,
            "numeroDocumento" => $request->numeroDocumento,
            "nombre" => $request->nombre,
            "primerApellido" => $request->primerApellido,
            "segundoApellido" => $request->segundoApellido,
            "paisDocumento" => $request->paisDocumento,
            "provincia" => $request->provincia,
            "municipio" => $request->municipio,
            "estado" => $request->estado,
            "numeroTelefono" => $request->numeroTelefono,
            "email" => $request->email
        ]);

        $tutor1 = new Tutor;
        $tutor1->nombreEmpresa = "Sol SA";
        $tutor1->tipoDocumento = "dni";
        $tutor1->numeroDocumento = "432432432D";
        $tutor1->nombre = "Juan";
        $tutor1->primerApellido = "Martin";
        $tutor1->segundoApellido = "Ruiz";
        $tutor1->paisDocumento = "España";
        $tutor1->provincia = "Baleares";
        $tutor1->municipio = "Palma";
        $tutor1->estado = "Activo";
        $tutor1->numeroTelefono = "653213456";
        $tutor1->email = "jmartin@gmail.com";

        $tutor2 = new Tutor;
        $tutor2->nombreEmpresa = "Sol SA";
        $tutor2->tipoDocumento = "dni";
        $tutor2->numeroDocumento = "432432432D";
        $tutor2->nombre = "Juan";
        $tutor2->primerApellido = "Martin";
        $tutor2->segundoApellido = "Ruiz";
        $tutor2->paisDocumento = "España";
        $tutor2->provincia = "Baleares";
        $tutor2->municipio = "Palma";
        $tutor2->estado = "Activo";
        $tutor2->numeroTelefono = "653213456";
        $tutor2->email = "jmartin@gmail.com";

        $tutor1->save();
        $tutor2->save();

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
