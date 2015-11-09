<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Prova;
use Illuminate\Http\Request;

class ProvaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$provas = Prova::orderBy('id', 'desc')->paginate(10);

		return view('provas.index', compact('provas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('provas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$prova = new Prova();

		$prova->tipo_prova = $request->input("tipo_prova");
        $prova->data_prova = $request->input("data_prova");
        $prova->militar_id = $request->input("militar_id");
        $prova->cao_id = $request->input("cao_id");
        $prova->binomio_id = $request->input("binomio_id");

		$prova->save();

		return redirect()->route('provas.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prova = Prova::findOrFail($id);

		return view('provas.show', compact('prova'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prova = Prova::findOrFail($id);

		return view('provas.edit', compact('prova'));
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
		$prova = Prova::findOrFail($id);

		$prova->tipo_prova = $request->input("tipo_prova");
        $prova->data_prova = $request->input("data_prova");
        $prova->militar_id = $request->input("militar_id");
        $prova->cao_id = $request->input("cao_id");
        $prova->binomio_id = $request->input("binomio_id");

		$prova->save();

		return redirect()->route('provas.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$prova = Prova::findOrFail($id);
		$prova->delete();

		return redirect()->route('provas.index')->with('message', 'Item deleted successfully.');
	}

}
