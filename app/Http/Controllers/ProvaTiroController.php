<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProvaTiro;
use Illuminate\Http\Request;

class ProvaTiroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prova_tiros = ProvaTiro::orderBy('id', 'desc')->paginate(10);

		return view('prova_tiros.index', compact('prova_tiros'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('prova_tiros.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$prova_tiro = new ProvaTiro();

		$prova_tiro->prova_id = $request->input("prova_id");
        $prova_tiro->data_prova = $request->input("data_prova");
        $prova_tiro->num_mecanografico = $request->input("num_mecanografico");
        $prova_tiro->local = $request->input("local");
        $prova_tiro->tipo = $request->input("tipo");
        $prova_tiro->nota_final = $request->input("nota_final");
        $prova_tiro->arquivo = $request->input("arquivo");

		$prova_tiro->save();

		return redirect()->route('prova_tiros.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prova_tiro = ProvaTiro::findOrFail($id);

		return view('prova_tiros.show', compact('prova_tiro'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prova_tiro = ProvaTiro::findOrFail($id);

		return view('prova_tiros.edit', compact('prova_tiro'));
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
		$prova_tiro = ProvaTiro::findOrFail($id);

		$prova_tiro->prova_id = $request->input("prova_id");
        $prova_tiro->data_prova = $request->input("data_prova");
        $prova_tiro->num_mecanografico = $request->input("num_mecanografico");
        $prova_tiro->local = $request->input("local");
        $prova_tiro->tipo = $request->input("tipo");
        $prova_tiro->nota_final = $request->input("nota_final");
        $prova_tiro->arquivo = $request->input("arquivo");

		$prova_tiro->save();

		return redirect()->route('prova_tiros.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$prova_tiro = ProvaTiro::findOrFail($id);
		$prova_tiro->delete();

		return redirect()->route('prova_tiros.index')->with('message', 'Item deleted successfully.');
	}

}
