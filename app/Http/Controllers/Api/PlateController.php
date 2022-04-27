<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePlateRequest;
use App\Models\Plate;
use Illuminate\Http\Request;

class PlateController extends Controller
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
     * @param StorePlateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlateRequest $request)
    {
        $plate = Plate::create($request->all());

        return response()->json([
            'status'    => true,
            'message'   => 'Cliente cadastrado com sucesso',
            'cliente'   => $plate
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plate = Plate::find($id);

        return response()->json([
            'status'    => true,
            'message'   => 'Cliente localizado com sucesso',
            'plate'     => $plate
        ], 200);
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
    public function update(StorePlateRequest $request, $id)
    {
        $plate = Plate::find($id);

        $plate->update($request->all());

        return response()->json([
            'status'    => true,
            'message'   => 'Cliente atualizado com sucesso',
            'plate'     => $plate
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plate = Plate::find($id);

        $plate->delete();

        return response()->json([
        'status'    => true,
        'message'   => 'Cliente deletado com sucesso'
        ], 200);
    }

    public function getFinalPlaca($number)
    {
        $plate = Plate::where('placa', 'LIKE', '%'.$number)->get();

        return response()->json([
            'status'    => true,
            'message'   => 'Cliente(s) localizados',
            'cliente'   => $plate
    ], 200);
    }
}
