<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
