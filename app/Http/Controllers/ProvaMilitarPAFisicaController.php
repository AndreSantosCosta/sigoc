<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProvaMilitarPAFisica;
use Illuminate\Http\Request;

class ProvaMilitarPAFisicaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prova_militar_p_a_fisicas = ProvaMilitarPAFisica::orderBy('id', 'desc')->paginate(10);

		return view('prova_militar_p_a_fisicas.index', compact('prova_militar_p_a_fisicas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('prova_militar_p_a_fisicas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$prova_militar_p_a_fisica = new ProvaMilitarPAFisica();

		$prova_militar_p_a_fisica->IdProvaMilitar = $request->input("IdProvaMilitar");
        $prova_militar_p_a_fisica->escalao = $request->input("escalao");
        $prova_militar_p_a_fisica->flexoesTrave = $request->input("flexoesTrave");
        $prova_militar_p_a_fisica->abdominais = $request->input("abdominais");
        $prova_militar_p_a_fisica->extSolo = $request->input("extSolo");
        $prova_militar_p_a_fisica->testCooper = $request->input("testCooper");
        $prova_militar_p_a_fisica->notaFinal = $request->input("notaFinal");
        $prova_militar_p_a_fisica->ambito = $request->input("ambito");
        $prova_militar_p_a_fisica->arquivo = $request->input("arquivo");

		$prova_militar_p_a_fisica->save();

		return redirect()->route('prova_militar_p_a_fisicas.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prova_militar_p_a_fisica = ProvaMilitarPAFisica::findOrFail($id);

		return view('prova_militar_p_a_fisicas.show', compact('prova_militar_p_a_fisica'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prova_militar_p_a_fisica = ProvaMilitarPAFisica::findOrFail($id);

		return view('prova_militar_p_a_fisicas.edit', compact('prova_militar_p_a_fisica'));
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
		$prova_militar_p_a_fisica = ProvaMilitarPAFisica::findOrFail($id);

		$prova_militar_p_a_fisica->IdProvaMilitar = $request->input("IdProvaMilitar");
        $prova_militar_p_a_fisica->escalao = $request->input("escalao");
        $prova_militar_p_a_fisica->flexoesTrave = $request->input("flexoesTrave");
        $prova_militar_p_a_fisica->abdominais = $request->input("abdominais");
        $prova_militar_p_a_fisica->extSolo = $request->input("extSolo");
        $prova_militar_p_a_fisica->testCooper = $request->input("testCooper");
        $prova_militar_p_a_fisica->notaFinal = $request->input("notaFinal");
        $prova_militar_p_a_fisica->ambito = $request->input("ambito");
        $prova_militar_p_a_fisica->arquivo = $request->input("arquivo");

		$prova_militar_p_a_fisica->save();

		return redirect()->route('prova_militar_p_a_fisicas.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$prova_militar_p_a_fisica = ProvaMilitarPAFisica::findOrFail($id);
		$prova_militar_p_a_fisica->delete();

		return redirect()->route('prova_militar_p_a_fisicas.index')->with('message', 'Item deleted successfully.');
	}

}
