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
        return redirect('tutores/create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formulario')
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
            $nuevoTutor->documentType = $request['documentType'];
            $nuevoTutor->documentNumber = $request['documentNumber'];
            $nuevoTutor->nom = $request['nom'];
            $nuevoTutor->llinatge1 = $request['llinatge1'];
            $nuevoTutor->llinatge2 = $request['llinatge2'];
            $nuevoTutor->pais_documento = $request['pais_documento'];
            $nuevoTutor->provincia = $request['provincia'];
            $nuevoTutor->municipio = $request['municipio'];
            $nuevoTutor->status = $request['status'];
            $nuevoTutor->telefono = $request['telefono'];
            $nuevoTutor->correo = $request['correo'];
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