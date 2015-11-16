<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Binomio;
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
		$listaVertente = array(' '=>' ','Uso da Força'=>'Uso da Força', 'Intervenção Tática'=>'Intervenção Tática', 'Deteção de Odor'=>'Deteção de Odor', 'Humano'=>'Humano', 'Deteção de Explosivos'=>'Deteção de Explosivos', 'Deteção de Droga/Papel Moeda'=>'Deteção de Droga/Papel Moeda', 'Outras Deteções'=>'Outras Deteções','Formação e Desenvolvimento de Cachorros'=>'Formação e Desenvolvimento de Cachorros');
		return view('binomios.create', compact('listaVertente'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$binomio = new Binomio();

		$binomio->data_inicio = $request->input("data_inicio");
        $binomio->militar_id = $request->input("militar_id");
        $binomio->cao_id = $request->input("cao_id");
        $binomio->vertente = $request->input("vertente");
        $binomio->inativo = $request->input("inativo");
        $binomio->data_inativo = $request->input("data_inativo");
        $binomio->motivo_inativo = $request->input("motivo_inativo");

		$binomio->save();

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
		$listaVertente = array(' '=>' ','Uso da Força'=>'Uso da Força', 'Intervenção Tática'=>'Intervenção Tática', 'Deteção de Odor'=>'Deteção de Odor', 'Humano'=>'Humano', 'Deteção de Explosivos'=>'Deteção de Explosivos', 'Deteção de Droga/Papel Moeda'=>'Deteção de Droga/Papel Moeda', 'Outras Deteções'=>'Outras Deteções','Formação e Desenvolvimento de Cachorros'=>'Formação e Desenvolvimento de Cachorros');
		
		return view('binomios.show', compact('binomio', 'listaVertente'));
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
		$listaVertente = array(' '=>' ','Uso da Força'=>'Uso da Força', 'Intervenção Tática'=>'Intervenção Tática', 'Deteção de Odor'=>'Deteção de Odor', 'Humano'=>'Humano', 'Deteção de Explosivos'=>'Deteção de Explosivos', 'Deteção de Droga/Papel Moeda'=>'Deteção de Droga/Papel Moeda', 'Outras Deteções'=>'Outras Deteções','Formação e Desenvolvimento de Cachorros'=>'Formação e Desenvolvimento de Cachorros');
		//$militar = Militar::findOrFail($id);
		return view('binomios.edit', compact('binomio', 'listaVertente'));
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
		$binomio = Binomio::findOrFail($id);

		$binomio->data_inicio = $request->input("data_inicio");
        $binomio->militar_id = $request->input("militar_id");
        $binomio->cao_id = $request->input("cao_id");
        $binomio->vertente = $request->input("vertente");
        $binomio->inativo = $request->input("inativo");
        $binomio->data_inativo = $request->input("data_inativo");
        $binomio->motivo_inativo = $request->input("motivo_inativo");

		$binomio->save();

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
		$binomio = Binomio::findOrFail($id);
		$binomio->delete();

		return redirect()->route('binomios.index')->with('message', 'Item deleted successfully.');
	}

}
