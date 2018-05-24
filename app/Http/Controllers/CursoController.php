<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use App\Curso;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = DB::table('cursos')
                            ->join('address', 'cursos.address_id', '=', 'address.id' )
                            ->join('consultant', 'cursos.consultant_id', '=', 'consultant.id' )
                            ->select('cursos.id', 'cursos.title',  'cursos.category',  'cursos.description',  'cursos.price', 'cursos.start', 'cursos.finish',  'cursos.address_id',  'cursos.consultant_id', 'address.street',  'address.city',   'address.number',  'address.neighborhood', 'consultant.avatar', 'consultant.name')
                            ->get();
    
        return view('curso.index',compact('cursos')); 
    }


    public function busca($data){

        $cursos = DB::table('cursos')
                            ->join('address', 'cursos.address_id', '=', 'address.id' )
                            ->join('consultant', 'cursos.consultant_id', '=', 'consultant.id' )
                            ->select('cursos.id', 'cursos.title',  'cursos.category',  'cursos.description',  'cursos.price', 'cursos.start', 'cursos.finish',  'cursos.address_id',  'cursos.consultant_id', 'address.street',  'address.city',   'address.number',  'address.neighborhood', 'consultant.avatar', 'consultant.name')
                            ->where('category','like', '%'.$data.'%')
                            ->orWhere('title','like', '%'.$data.'%')
                            ->orWhere('city','like', '%'.$data.'%')
                            ->get();

        return Response::json($cursos);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso = DB::table('cursos')
        ->join('address', 'cursos.address_id', '=', 'address.id' )
        ->join('consultant', 'cursos.consultant_id', '=', 'consultant.id' )
        ->selectRaw('cursos.id, cursos.title,  cursos.category,  cursos.description,  cursos.price, cursos.start, cursos.finish,  cursos.address_id,  cursos.consultant_id, address.street,  address.city,   address.number,  address.neighborhood, consultant.avatar, consultant.name  ')
        ->where('cursos.id','=',$id)
        ->first();

        $tempo1 = date('H:i:s', strtotime($curso->start)); 
        $tempo2 = date('H:i:s', strtotime($curso->finish));
        $intervalo = "De ". $tempo1. " as ".$tempo2;
        $intervalo .= " - ".gmdate('H:i', abs(strtotime( $tempo1 ) - strtotime( $tempo2 )))."h";
        
        return view('curso.show', compact('curso', 'intervalo')); 
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
