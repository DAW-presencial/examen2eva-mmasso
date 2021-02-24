<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tutores;
use Illuminate\Support\Facades\DB;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'companyName' => 'required|min:3|max:50',
            'documentType' => 'required|min:3|max:20',
            'documentNumber' => 'required|email|email:rfc',
            'nom' => 'required|min:5|max:40',
            'llinatge1'=>'required|min:3|max:20',
            'llinatge2' => 'nullable|min:3|max:20',
            'pais_documento' => 'required|min:3|max:20',
            'provincia' => 'required|min:3|max:30',
            'municipio' => 'required|min:3|max:50',
            'status' => 'required|in:activo,inactivo',
            'telefono' => 'required|min:3|max:15',
            'correo' => 'nullable|email|email:rfc'
         ]);

        DB::beginTransaction();
        try {
            $nuevoTutor = new tutores();
            $nuevoTutor->nombre_empresa = $request['companyName'];
            $nuevoTutor->nombre_empresa = $request['documentType'];
            $nuevoTutor->nombre_empresa = $request['documentNumber'];
            $nuevoTutor->nombre_empresa = $request['nom'];
            $nuevoTutor->nombre_empresa = $request['llinatge1'];
            $nuevoTutor->nombre_empresa = $request['llinatge2'];
            $nuevoTutor->nombre_empresa = $request['pais_documento'];
            $nuevoTutor->nombre_empresa = $request['provincia'];
            $nuevoTutor->nombre_empresa = $request['municipio'];
            $nuevoTutor->nombre_empresa = $request['status'];
            $nuevoTutor->nombre_empresa = $request['telefono'];
            $nuevoTutor->nombre_empresa = $request['correo'];
            $nuevoTutor->save();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
            return back()->with('success', 'Se ha registrado su empresa');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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