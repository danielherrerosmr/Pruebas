<?php

namespace App\Http\Controllers;

use App\Plataforma;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PlataformaController extends Controller
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
        return view('plataforma.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plataforma = request()->except('_token');


          Plataforma::insert($plataforma);

             return view('game.List', ['plataformas' => DB::table('plataformas')->paginate(100), 'games' => DB::table('games')->paginate(100)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function show(Plataforma $plataforma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function edit(Plataforma $plataforma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plataforma $plataforma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plataforma  $plataforma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plataforma $plataforma)
    {
        //
    }
}
