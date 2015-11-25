<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProvaMilitarTeorica;
use Illuminate\Http\Request;

class ProvaMilitarTeoricaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prova_militar_teoricas = ProvaMilitarTeorica::orderBy('id', 'desc')->paginate(10);

		return view('prova_militar_teoricas.index', compact('prova_militar_teoricas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('prova_militar_teoricas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$prova_militar_teorica = new ProvaMilitarTeorica();

		$prova_militar_teorica->IdProvaMilitar = $request->input("IdProvaMilitar");
        $prova_militar_teorica->ambito = $request->input("ambito");
        $prova_militar_teorica->materias = $request->input("materias");
        $prova_militar_teorica->notaFinal = $request->input("notaFinal");
        $prova_militar_teorica->arquivo = $request->input("arquivo");

		$prova_militar_teorica->save();

		return redirect()->route('prova_militar_teoricas.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prova_militar_teorica = ProvaMilitarTeorica::findOrFail($id);

		return view('prova_militar_teoricas.show', compact('prova_militar_teorica'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prova_militar_teorica = ProvaMilitarTeorica::findOrFail($id);

		return view('prova_militar_teoricas.edit', compact('prova_militar_teorica'));
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
		$prova_militar_teorica = ProvaMilitarTeorica::findOrFail($id);

		$prova_militar_teorica->IdProvaMilitar = $request->input("IdProvaMilitar");
        $prova_militar_teorica->ambito = $request->input("ambito");
        $prova_militar_teorica->materias = $request->input("materias");
        $prova_militar_teorica->notaFinal = $request->input("notaFinal");
        $prova_militar_teorica->arquivo = $request->input("arquivo");

		$prova_militar_teorica->save();

		return redirect()->route('prova_militar_teoricas.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$prova_militar_teorica = ProvaMilitarTeorica::findOrFail($id);
		$prova_militar_teorica->delete();

		return redirect()->route('prova_militar_teoricas.index')->with('message', 'Item deleted successfully.');
	}

}
