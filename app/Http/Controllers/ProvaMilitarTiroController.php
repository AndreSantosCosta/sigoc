<?php namespace App\Http\Controllers;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProvaMilitarTiro;
use Illuminate\Http\Request;

class ProvaMilitarTiroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prova_militar_tiros = ProvaMilitarTiro::orderBy('id', 'desc')->paginate(10);

		return view('prova_militar_tiros.index', compact('prova_militar_tiros'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$prova_militar_tiros = new ProvaMilitarTiro();
		return view('prova_militar_tiros.create', compact("prova_militar_tiros"));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$a = new ProvaMilitarTiro();
		$a->dataProva = $request->input("dataProva");
        $a->local = $request->input("local");
        $a->tipo = $request->input("tipo");
        $a->notaFinal = $request->input("notaFinal");
        $a->arquivo = $request->input("arquivo");
        $a->observacoes = $request->input("observacoes");

		$a->save();

		return redirect()->route('prova_militar_tiros.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prova_militar_tiro = ProvaMilitarTiro::findOrFail($id);

		return view('prova_militar_tiros.show', compact('prova_militar_tiro'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prova_militar_tiro = ProvaMilitarTiro::findOrFail($id);

		return view('prova_militar_tiros.edit', compact('prova_militar_tiro'));
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
		$a = ProvaMilitarTiro::findOrFail($id);
		$a->dataProva = $request->input("dataProva");
        $a->local = $request->input("local");
        $a->tipo = $request->input("tipo");
        $a->notaFinal = $request->input("notaFinal");
        $a->arquivo = $request->input("arquivo");
        $a->observacoes = $request->input("observacoes");

		$a->save();

		return redirect()->route('prova_militar_tiros.index')->with('message', 'Item updated successfully.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$a = ProvaMilitarTiro::findOrFail($id);
		$a->delete();

		return redirect()->route('prova_militar_tiros.index')->with('message', 'Item deleted successfully.');
	}

	

}
