<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Redirect;
use PDF;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['games'] = Game::orderBy('id','asc')->paginate(10);

        return view('game.List',$data);
    }

    public function list()
    {
        $data['games'] = Game::orderBy('id','asc')->paginate(10);

        return view('game.ListNo',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game.Create');
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
            'titulo' => 'required',
            'genero' => 'required',
            'edicion' => 'required',
            'plataforma' => 'required',
            'precio' => 'required',
        ]);

        Game::create($request->all());

        return Redirect::to('games')
       ->with('success','Greate! Game created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $where = array('id' => $id);
        $data['game_info'] = Game::where($where)->first();

        return view('game.Edit', $data);
    }

    public function comprar($id)
    {
        $where = array('id' => $id);
        $data['game_info'] = Game::where($where)->first();

        return view('game.Show', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'genero',
            'edicion',
            'plataforma',
            'precio',
        ]);

        $update = ['titulo' => $request->titulo, 'genero' => $request->genero, 'edicion' => $request->edicion, 'plataforma' => $request->plataforma, 'precio' => $request->precio];
        Game::where('id',$id)->update($update);

        return Redirect::to('games')
       ->with('success','Great! Game updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Game::where('id',$id)->delete();

        return Redirect::to('games')->with('success','Game deleted successfully');
    }

}
