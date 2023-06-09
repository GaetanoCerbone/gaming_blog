<?php

namespace App\Http\Controllers;

use App\Models\Console;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsoleController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consoles = Console::all();
      return view('console.index', compact('consoles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('console.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $console = Console::create([
            'name' =>$request->name,
            'producer' =>$request->producer,
            'description' =>$request->description,
            'logo' =>$request->file('logo')->store('public/logos'),
            'user_id'=> Auth::user()->id
        ]);
            return redirect(route('console.index'))->with('consoleCreated','Hai inserito la tua console');
    }

    /**
     * Display the specified resource.
     */
    public function show(Console $console)
    {
        // rotta parametrica

        return view('console.show', compact('console'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Console $console)
    {
       return view('console.edit', compact('console'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Console $console)
    {
        // le vado a dire di aggiornarmi sul database i valori che ho dato nel protected mass assignment
        $console->update([
            'name'=> $request->name,
            'producer'=> $request->producer,
            'description'=> $request->description,
            'user_id'=> Auth::user()->id
        ]);
        if($request->logo){
            $console->update([
                'logo'=>$request->file('logo')->store('public/logos')
            ]);
        }
        

        return redirect(route('console.index'))->with('consoleUpdated', 'Hai aggiornato la tua console con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Console $console)
    {
        $console->delete();
        return redirect(route('console.index'))->with('consoleDeleted', 'Hai cancellato la tua console con successo');
    }
}
