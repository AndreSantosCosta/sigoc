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
		return view('binomios.create');
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
        $binomio->num_mecanografico_id = $request->input("num_mecanografico_id");
        $binomio->num_matricula_id = $request->input("num_matricula_id");
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

		return view('binomios.show', compact('binomio'));
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

		return view('binomios.edit', compact('binomio'));
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
        $binomio->num_mecanografico_id = $request->input("num_mecanografico_id");
        $binomio->num_matricula_id = $request->input("num_matricula_id");
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
