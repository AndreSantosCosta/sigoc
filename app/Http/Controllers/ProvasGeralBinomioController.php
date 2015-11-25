<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProvasGeralBinomio;
use Illuminate\Http\Request;

class ProvasGeralBinomioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$provas_geral_binomios = ProvasGeralBinomio::orderBy('id', 'desc')->paginate(10);

		return view('provas_geral_binomios.index', compact('provas_geral_binomios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('provas_geral_binomios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$provas_geral_binomio = new ProvasGeralBinomio();

		$provas_geral_binomio->IdProvaBinomio = $request->input("IdProvaBinomio");
        $provas_geral_binomio->data_nascim = $request->input("data_nascim");
        $provas_geral_binomio->avaliador1 = $request->input("avaliador1");
        $provas_geral_binomio->avaliador2 = $request->input("avaliador2");
        $provas_geral_binomio->avaliador3 = $request->input("avaliador3");
        $provas_geral_binomio->local = $request->input("local");
        $provas_geral_binomio->ambito = $request->input("ambito");
        $provas_geral_binomio->nota = $request->input("nota");
        $provas_geral_binomio->situacao = $request->input("situacao");
        $provas_geral_binomio->observacoes = $request->input("observacoes");
        $provas_geral_binomio->arquivo = $request->input("arquivo");

		$provas_geral_binomio->save();

		return redirect()->route('provas_geral_binomios.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$provas_geral_binomio = ProvasGeralBinomio::findOrFail($id);

		return view('provas_geral_binomios.show', compact('provas_geral_binomio'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$provas_geral_binomio = ProvasGeralBinomio::findOrFail($id);

		return view('provas_geral_binomios.edit', compact('provas_geral_binomio'));
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
		$provas_geral_binomio = ProvasGeralBinomio::findOrFail($id);

		$provas_geral_binomio->IdProvaBinomio = $request->input("IdProvaBinomio");
        $provas_geral_binomio->data_nascim = $request->input("data_nascim");
        $provas_geral_binomio->avaliador1 = $request->input("avaliador1");
        $provas_geral_binomio->avaliador2 = $request->input("avaliador2");
        $provas_geral_binomio->avaliador3 = $request->input("avaliador3");
        $provas_geral_binomio->local = $request->input("local");
        $provas_geral_binomio->ambito = $request->input("ambito");
        $provas_geral_binomio->nota = $request->input("nota");
        $provas_geral_binomio->situacao = $request->input("situacao");
        $provas_geral_binomio->observacoes = $request->input("observacoes");
        $provas_geral_binomio->arquivo = $request->input("arquivo");

		$provas_geral_binomio->save();

		return redirect()->route('provas_geral_binomios.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$provas_geral_binomio = ProvasGeralBinomio::findOrFail($id);
		$provas_geral_binomio->delete();

		return redirect()->route('provas_geral_binomios.index')->with('message', 'Item deleted successfully.');
	}

}
