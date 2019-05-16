<?php

namespace App\Http\Controllers;

use App\Celular;
use Illuminate\Http\Request;

class CelularController extends Controller
{


    public function index(){
    	
    	$celulares = Celular::all();
    	return view ('Celulares.index', ['celulares' => $celulares]);

    }
    public function create(){

    	return view('Celulares.create');
    }
    public function store(Request $request){

    	$request->validate([
    		'marca' => 'required|min:6|max:20',
    		'color' => 'required|min:6|max:20',
    		'precio' => 'required|numeric|min:4|max:8',
    		'descripcion' => 'required|min:6|max:200'

    	]);

    	$celular = new Celular();
    	$celular->fill($request->all());
    	$celular->save();

    	return redirect()->route('celulares.index'); 
    }

    public function show(Celular $celular){

    	return view('Celulares.show', ['celular' => $celular]);

    }

    public function edit(Celular $celular){

    	return view('Celulares.edit', ['celular' => $celular]);

    }

    public function update(Request $request, Celular $celular){

    	$request->validate([
    		'marca' => 'required|min:6|max:20',
    		'color' => 'required|min:6|max:20',
    		'precio' => 'required|numeric|min:4|max:8',
    		'descripcion' => 'required|min:6|max:200'

    	]);

    	$celular->update($request->all());
    	return redirect()->route('celulares.show', $celular);

    }

    public function destroy(Celular $celular){

    	$celular->delete();

    	return redirect()->route('celulares.index');
    }

}
