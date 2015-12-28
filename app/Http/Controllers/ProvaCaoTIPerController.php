<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProvaCaoTIPer;
use Illuminate\Http\Request;

class ProvaCaoTIPerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prova_cao_t_i_pers = ProvaCaoTIPer::orderBy('id', 'desc')->paginate(10);

		return view('prova_cao_t_i_pers.index', compact('prova_cao_t_i_pers'));
	} 

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$prova_cao_t_i_pers = new ProvaCaoTIPer();
		return view('prova_cao_t_i_pers.create', compact('prova_cao_t_i_pers'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$a = new ProvaCaoTIPer();

        $a->avaliador = $request->input("avaliador");
        $a->executante = $request->input("executante");
        $a->local = $request->input("local");
        $a->seguimento = $request->input("seguimento");
        $a->levantar = $request->input("levantar");
        $a->submissao = $request->input("submissao");
        $a->chamada = $request->input("chamada");
        $a->buscaObj = $request->input("buscaObj");
        $a->jornal = $request->input("jornal");
        $a->chapeu = $request->input("chapeu");
        $a->mesa = $request->input("mesa");
        $a->dor = $request->input("dor");
        $a->notaFinal = $request->input("notaFinal");
        $a->observacoes = $request->input("observacoes");
        $a->arquivo = $request->input("arquivo");

		$a->save();

		return redirect()->route('prova_cao_t_i_pers.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prova_cao_t_i_per = ProvaCaoTIPer::findOrFail($id);

		return view('prova_cao_t_i_pers.show', compact('prova_cao_t_i_per'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prova_cao_t_i_per = ProvaCaoTIPer::findOrFail($id);

		return view('prova_cao_t_i_pers.edit', compact('prova_cao_t_i_per'));
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
		$prova_cao_t_i_per = ProvaCaoTIPer::findOrFail($id);

		$a->avaliador = $request->input("avaliador");
        $a->executante = $request->input("executante");
        $a->local = $request->input("local");
        $a->seguimento = $request->input("seguimento");
        $a->levantar = $request->input("levantar");
        $a->submissao = $request->input("submissao");
        $a->chamada = $request->input("chamada");
        $a->buscaObj = $request->input("buscaObj");
        $a->jornal = $request->input("jornal");
        $a->chapeu = $request->input("chapeu");
        $a->mesa = $request->input("mesa");
        $a->dor = $request->input("dor");
        $a->notaFinal = $request->input("notaFinal");
        $a->observacoes = $request->input("observacoes");
        $a->arquivo = $request->input("arquivo");

		$a->save();

		return redirect()->route('prova_cao_t_i_pers.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$a = ProvaCaoTIPer::findOrFail($id);
		$a->delete();

		return redirect()->route('prova_cao_t_i_pers.index')->with('message', 'Item deleted successfully.');
	}

}
