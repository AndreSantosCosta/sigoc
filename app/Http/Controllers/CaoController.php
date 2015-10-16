<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Cao;
use Illuminate\Http\Request;

class CaoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$caos = Cao::orderBy('id', 'desc')->paginate(10);

		return view('caos.index', compact('caos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('caos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$cao = new Cao();

		$cao->num_matricula = $request->input("num_matricula");
        $cao->num_chip = $request->input("num_chip");
        $cao->nome = $request->input("nome");
        $cao->raca = $request->input("raca");
        $cao->sexo = $request->input("sexo");
        $cao->origem = $request->input("origem");
        $cao->data_nascim = $request->input("data_nascim");
        $cao->mae = $request->input("mae");
        $cao->pai = $request->input("pai");
        $cao->ninhada = $request->input("ninhada");
        $cao->inativo = $request->input("inativo");
        $cao->data_inativo = $request->input("data_inativo");
        $cao->motivo_inativo = $request->input("motivo_inativo");
        $cao->observacoes = $request->input("observacoes");

		$cao->save();

		return redirect()->route('caos.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cao = Cao::findOrFail($id);

		return view('caos.show', compact('cao'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cao = Cao::findOrFail($id);

		return view('caos.edit', compact('cao'));
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
		$cao = Cao::findOrFail($id);

		$cao->num_matricula = $request->input("num_matricula");
        $cao->num_chip = $request->input("num_chip");
        $cao->nome = $request->input("nome");
        $cao->raca = $request->input("raca");
        $cao->sexo = $request->input("sexo");
        $cao->origem = $request->input("origem");
        $cao->data_nascim = $request->input("data_nascim");
        $cao->mae = $request->input("mae");
        $cao->pai = $request->input("pai");
        $cao->ninhada = $request->input("ninhada");
        $cao->inativo = $request->input("inativo");
        $cao->data_inativo = $request->input("data_inativo");
        $cao->motivo_inativo = $request->input("motivo_inativo");
        $cao->observacoes = $request->input("observacoes");

		$cao->save();

		return redirect()->route('caos.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$cao = Cao::findOrFail($id);
		$cao->delete();

		return redirect()->route('caos.index')->with('message', 'Item deleted successfully.');
	}

}
