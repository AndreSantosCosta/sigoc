<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProvaCao;
use Illuminate\Http\Request;

class ProvaCaoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prova_caos = ProvaCao::orderBy('id', 'desc')->paginate(10);

		return view('prova_caos.index', compact('prova_caos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('prova_caos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$prova_cao = new ProvaCao();

		$prova_cao->prova_id = $request->input("prova_id");
        $prova_cao->cao_id = $request->input("cao_id");
        $prova_cao->tipoProva = $request->input("tipoProva");
        $prova_cao->dataProva = $request->input("dataProva");

		$prova_cao->save();

		return redirect()->route('prova_caos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prova_cao = ProvaCao::findOrFail($id);

		return view('prova_caos.show', compact('prova_cao'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prova_cao = ProvaCao::findOrFail($id);

		return view('prova_caos.edit', compact('prova_cao'));
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
		$prova_cao = ProvaCao::findOrFail($id);

		$prova_cao->prova_id = $request->input("prova_id");
        $prova_cao->cao_id = $request->input("cao_id");
        $prova_cao->tipoProva = $request->input("tipoProva");
        $prova_cao->dataProva = $request->input("dataProva");

		$prova_cao->save();

		return redirect()->route('prova_caos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$prova_cao = ProvaCao::findOrFail($id);
		$prova_cao->delete();

		return redirect()->route('prova_caos.index')->with('message', 'Item deleted successfully.');
	}

}
