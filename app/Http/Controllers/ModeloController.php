<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelo;




class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       
     $modelos = Modelo::latest()->paginate(5);
     

        return view('modelos.index', compact('modelos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
           

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelos.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        Modelo::create($request->all());
   
        return redirect()->route('modelos.index')
                        ->with('success','Produto criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Modelo $modelo)
    {
        return view('modelos.show',compact('modelo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Modelo $modelo)
    {
        return view('modelos.edit',compact('modelo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modelo $modelo)
    {
        $request->validate([
            'SKU' => 'required',
            'Nome'=> 'required',
            'Descrição'=>'required',
            'Preço' => 'required',
        ]);
  
        $modelo->update($request->all());
  
        return redirect()->route('modelos.index')
                        ->with('success','Produto editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modelo $modelo)
    {
         $modelo->delete();
  
        return redirect()->route('modelos.index')
                        ->with('success','Produto deletado com sucesso!');
    }
}
