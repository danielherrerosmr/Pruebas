<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;
use Redirect;
use PDF;
use DB;

use Illuminate\Support\Facades\Storage;



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
        $games = $data['games'];
        $plataformas = DB::table('plataformas')->paginate(100);

        return view('game.ListNo', compact('games', 'plataformas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game.Create',['plataformas' => DB::table('plataformas')->paginate(100), 'generos' => DB::table('generos')->paginate(100) ]);
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
            'foto' => 'required'
        ]);

        //Game::create($request->all());
        $games = request()->except('_token');

            
            if($request->hasFile('foto')){
                $games['foto']=$request->file('foto')->store('uploads', 'public');
            }

          Game::insert($games);

           return Redirect::to('games');
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
        $game_info = Game::where($where)->first();

        $plataformas = DB::table('plataformas')->paginate(100);
        $generos = DB::table('generos')->paginate(100);

        return view('game.Edit', compact('game_info', 'plataformas', 'generos'));

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

        $games = $request->except(['_token','_method']);

        if($request->hasFile('foto')){
            $game = Game::findOrFail($id);

            Storage::delete('public/' . $game->foto);
            
            $games['foto']=$request->file('foto')->store('uploads', 'public');
        }

        Game::where('id','=',$id)->update($games);
        return Redirect::to('games');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $game = Game::findOrFail($id);

        if(Storage::delete('public/' . $game->foto)){

            Game::where('id',$id)->delete();

        }

        return Redirect::to('games');
    }

    //filtrar por plataforma
    public function FiltrarPlataforma(){

        $plataforma = request('plataforma') ;
        $games = DB::table('games')->where('plataforma', '=', $plataforma)->paginate(100);
        return view('game.ListNo', ['games'=>$games , 'plataformas' => DB::table('plataformas')->paginate(100)]);
    }

    //filtrar por Titulo
    public function FiltrarTitulo(){

        $titulo ="%" . request('titulo') . "%" ;
        $games = DB::table('games')->where('titulo', 'like', $titulo)->paginate(100);
        return view('game.ListNo', ['games'=>$games, 'plataformas' => DB::table('plataformas')->paginate(100),]);

    }

}
