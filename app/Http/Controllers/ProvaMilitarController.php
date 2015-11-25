<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProvaMilitar;
use Illuminate\Http\Request;

class ProvaMilitarController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prova_militars = ProvaMilitar::orderBy('id', 'desc')->paginate(10);

		return view('prova_militars.index', compact('prova_militars'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('prova_militars.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$prova_militar = new ProvaMilitar();

		$prova_militar->prova_id = $request->input("prova_id");
        $prova_militar->militar_id = $request->input("militar_id");
        $prova_militar->tipoProva = $request->input("tipoProva");
        $prova_militar->dataProva = $request->input("dataProva");

		$prova_militar->save();

		return redirect()->route('prova_militars.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prova_militar = ProvaMilitar::findOrFail($id);

		return view('prova_militars.show', compact('prova_militar'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prova_militar = ProvaMilitar::findOrFail($id);

		return view('prova_militars.edit', compact('prova_militar'));
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
		$prova_militar = ProvaMilitar::findOrFail($id);

		$prova_militar->prova_id = $request->input("prova_id");
        $prova_militar->militar_id = $request->input("militar_id");
        $prova_militar->tipoProva = $request->input("tipoProva");
        $prova_militar->dataProva = $request->input("dataProva");

		$prova_militar->save();

		return redirect()->route('prova_militars.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$prova_militar = ProvaMilitar::findOrFail($id);
		$prova_militar->delete();

		return redirect()->route('prova_militars.index')->with('message', 'Item deleted successfully.');
	}

}
