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
		return view('prova_militar_tiros.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$prova_militar_tiro = new ProvaMilitarTiro();

		$prova_militar_tiro->IdProvaMilitar = $request->input("IdProvaMilitar");
        $prova_militar_tiro->local = $request->input("local");
        $prova_militar_tiro->tipo = $request->input("tipo");
        $prova_militar_tiro->notaFinal = $request->input("notaFinal");
        $prova_militar_tiro->arquivo = $request->input("arquivo");

		$prova_militar_tiro->save();

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
		$prova_militar_tiro = ProvaMilitarTiro::findOrFail($id);

		$prova_militar_tiro->IdProvaMilitar = $request->input("IdProvaMilitar");
        $prova_militar_tiro->local = $request->input("local");
        $prova_militar_tiro->tipo = $request->input("tipo");
        $prova_militar_tiro->notaFinal = $request->input("notaFinal");
        $prova_militar_tiro->arquivo = $request->input("arquivo");

		$prova_militar_tiro->save();

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
		$prova_militar_tiro = ProvaMilitarTiro::findOrFail($id);
		$prova_militar_tiro->delete();

		return redirect()->route('prova_militar_tiros.index')->with('message', 'Item deleted successfully.');
	}

}
