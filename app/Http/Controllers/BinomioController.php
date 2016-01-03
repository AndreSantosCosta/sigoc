<?php namespace App\Http\Controllers;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Binomio;
use App\Unidade;
use App\VertenteBinomio;
use Illuminate\Http\Request;
 
class BinomioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function index()
	{
		$binomios = Binomio::orderBy('id', 'desc')->paginate(10);

		return view('binomios.index', compact('binomios'));
	}
 
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$binomio = new Binomio();
		$listaVertente = VertenteBinomio::all('descricao', 'id');
		$listaUnidades = Unidade::all('descricao', 'id');
		
		return view('binomios.create', compact('binomio', 'listaVertente','listaUnidades'));
	} 

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$a = new Binomio();

		$a->data_inicio = $request->input("data_inicio");
        $a->militar_id = $request->input("militar_id");
        $a->cao_id = $request->input("cao_id");
        $a->vertente = $request->input("vertente");
        $a->inativo = $request->input("NomeInativo");
        $a->data_inativo = $request->input("data_inativo");
        $a->motivo_inativo = $request->input("motivo_inativo");
        $a->observacoes = $request->input("observacoes");
		$a->unidade_id = $request->input("unidade_id");

		$a->save();

		return redirect()->route('binomios.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$binomio = Binomio::findOrFail($id);
		$listaVertente = VertenteBinomio::all('descricao', 'id');
		$listaUnidades = Unidade::all('descricao', 'id');
		return view('binomios.show', compact('binomio', 'listaVertente','listaUnidades'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$binomio = Binomio::findOrFail($id);
		$listaVertente = VertenteBinomio::all('descricao', 'id');
		$listaUnidades = Unidade::all('descricao', 'id');
		return view('binomios.edit', compact('binomio', 'listaVertente','listaUnidades'));
	}  

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param Request $request
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$a = Binomio::findOrFail($id);

		$a->data_inicio = $request->input("data_inicio");
        $a->militar_id = $request->input("militar_id");
        $a->cao_id = $request->input("cao_id");
        $a->vertente = $request->input("vertente");

        if($request->input("inativo")==""){
			$a->inativo = false;

		}else{
			$a->inativo = true;
		}
 
        $a->data_inativo = $request->input("data_inativo");
        $a->data_ativo = $request->input("data_ativo");
        $a->motivo_inativo = $request->input("motivo_inativo");
        $a->observacoes = $request->input("observacoes");

		$a->save();

		return redirect()->route('binomios.index')->with('message', 'Item updated successfully.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$a = Binomio::findOrFail($id);
		$a->delete();

		return redirect()->route('binomios.index')->with('message', 'Item deleted successfully.');
	}

}
