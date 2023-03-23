<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estudiantes = Estudiantes::all();
        if(is_object($estudiantes)){
            $codigo=200;
            if(count($estudiantes) > 0){
                $array=
                    array
                    (
                        'estado'=>'ok',
                        'data' => $estudiantes,
                        'codigo'=>$codigo,
                    ); 
                return response()->json( $array,$codigo);
            }else{
                $array=
                    array
                    (
                        'estado'=>'ok',
                        'data' => 'sin registros',
                        'codigo'=>$codigo,
                    ); 
                return response()->json( $array,$codigo);
            }

        }else{
            $codigo = 400;
            $array=
                array
                (
                    'estado'=>'error',
                    'data' => 'Se ha presentado un error al obtener informacion',
                    'codigo'=>$codigo,
                ); 
            return response()->json( $array,$codigo);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $array=array
                (
                    array
                    (
                        'estado'=>'Unauthorized',
                        'mensaje'=>'No autorizado',
                        'codigo'=>$codigo,
                    )
                ); 
        return response()->json( $array,$codigo); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $array=array
                (
                    array
                    (
                        'estado'=>'Unauthorized',
                        'mensaje'=>'No autorizado',
                        'codigo'=>$codigo,
                    )
                ); 
        return response()->json( $array,$codigo); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiantes $estudiantes)
    {
        //
        $array=array
                (
                    array
                    (
                        'estado'=>'Unauthorized',
                        'mensaje'=>'No autorizado',
                        'codigo'=>$codigo,
                    )
                ); 
        return response()->json( $array,$codigo); 
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function carrera($carrera)
    {
        $estudiantes = Estudiantes::where('carrera',$carrera)->get();
        if(is_object($estudiantes)){
            $codigo=200;
            if(count($estudiantes) > 0){
                $array=
                    array
                    (
                        'estado'=>'ok',
                        'data' => $estudiantes,
                        'codigo'=>$codigo,
                    ); 
                return response()->json( $array,$codigo);
            }else{
                $array=
                    array
                    (
                        'estado'=>'ok',
                        'data' => 'sin registros',
                        'codigo'=>$codigo,
                    ); 
                return response()->json( $array,$codigo);
            }

        }else{
            $codigo = 400;
            $array=
                array
                (
                    'estado'=>'error',
                    'data' => 'Se ha presentado un error al obtener informacion',
                    'codigo'=>$codigo,
                ); 
            return response()->json( $array,$codigo);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudiantes $estudiantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudiantes $estudiantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiantes $estudiantes)
    {
        //
    }
}
