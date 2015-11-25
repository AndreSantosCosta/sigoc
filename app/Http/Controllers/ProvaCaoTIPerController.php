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
		return view('prova_cao_t_i_pers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$prova_cao_t_i_per = new ProvaCaoTIPer();

		$prova_cao_t_i_per->IdProvaCao = $request->input("IdProvaCao");
        $prova_cao_t_i_per->data_nascim = $request->input("data_nascim");
        $prova_cao_t_i_per->avaliador = $request->input("avaliador");
        $prova_cao_t_i_per->executante = $request->input("executante");
        $prova_cao_t_i_per->local = $request->input("local");
        $prova_cao_t_i_per->seguimento = $request->input("seguimento");
        $prova_cao_t_i_per->levantar = $request->input("levantar");
        $prova_cao_t_i_per->submissao = $request->input("submissao");
        $prova_cao_t_i_per->chamada = $request->input("chamada");
        $prova_cao_t_i_per->buscaObj = $request->input("buscaObj");
        $prova_cao_t_i_per->jornal = $request->input("jornal");
        $prova_cao_t_i_per->chapeu = $request->input("chapeu");
        $prova_cao_t_i_per->mesa = $request->input("mesa");
        $prova_cao_t_i_per->dor = $request->input("dor");
        $prova_cao_t_i_per->notaFinal = $request->input("notaFinal");
        $prova_cao_t_i_per->observacoes = $request->input("observacoes");
        $prova_cao_t_i_per->arquivo = $request->input("arquivo");

		$prova_cao_t_i_per->save();

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

		$prova_cao_t_i_per->IdProvaCao = $request->input("IdProvaCao");
        $prova_cao_t_i_per->data_nascim = $request->input("data_nascim");
        $prova_cao_t_i_per->avaliador = $request->input("avaliador");
        $prova_cao_t_i_per->executante = $request->input("executante");
        $prova_cao_t_i_per->local = $request->input("local");
        $prova_cao_t_i_per->seguimento = $request->input("seguimento");
        $prova_cao_t_i_per->levantar = $request->input("levantar");
        $prova_cao_t_i_per->submissao = $request->input("submissao");
        $prova_cao_t_i_per->chamada = $request->input("chamada");
        $prova_cao_t_i_per->buscaObj = $request->input("buscaObj");
        $prova_cao_t_i_per->jornal = $request->input("jornal");
        $prova_cao_t_i_per->chapeu = $request->input("chapeu");
        $prova_cao_t_i_per->mesa = $request->input("mesa");
        $prova_cao_t_i_per->dor = $request->input("dor");
        $prova_cao_t_i_per->notaFinal = $request->input("notaFinal");
        $prova_cao_t_i_per->observacoes = $request->input("observacoes");
        $prova_cao_t_i_per->arquivo = $request->input("arquivo");

		$prova_cao_t_i_per->save();

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
		$prova_cao_t_i_per = ProvaCaoTIPer::findOrFail($id);
		$prova_cao_t_i_per->delete();

		return redirect()->route('prova_cao_t_i_pers.index')->with('message', 'Item deleted successfully.');
	}

}
