<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{ 
    public function create(){
    return view('game.create');
    // Game = nome cartella e Create = file
    }
    public function store(Request $request){
        // Metodo Save
        // $game = new Game();
        // $game->title = $request->title;
        // $game->producer = $request->producer;
        // $game->description = $request->description;
        // $game->save();

        
        // Protected Mass Assignment (metodo Giusto) assegnazione di massa protetta
        $game = Game::create([
            'title' => $request->title,
            'producer' => $request->producer,
            'description' => $request->description,
        ]);
        return redirect(route('homepage'))->with('gameCreated','Hai inserito un gioco');
    }
    public function index(){
        $games = Game::all();
        // dd($games);
        return view('game.index', compact('games'));
    }

}
