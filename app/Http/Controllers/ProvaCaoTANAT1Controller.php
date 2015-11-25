<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProvaCaoTANAT1;
use Illuminate\Http\Request;

class ProvaCaoTANAT1Controller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prova_cao_t_a_n_a_t1s = ProvaCaoTANAT1::orderBy('id', 'desc')->paginate(10);

		return view('prova_cao_t_a_n_a_t1s.index', compact('prova_cao_t_a_n_a_t1s'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('prova_cao_t_a_n_a_t1s.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$prova_cao_t_a_n_a_t1 = new ProvaCaoTANAT1();

		$prova_cao_t_a_n_a_t1->IdProvaCao = $request->input("IdProvaCao");
        $prova_cao_t_a_n_a_t1->data_nascim = $request->input("data_nascim");
        $prova_cao_t_a_n_a_t1->avaliador = $request->input("avaliador");
        $prova_cao_t_a_n_a_t1->local = $request->input("local");
        $prova_cao_t_a_n_a_t1->atitute = $request->input("atitute");
        $prova_cao_t_a_n_a_t1->agilidadeConfianca = $request->input("agilidadeConfianca");
        $prova_cao_t_a_n_a_t1->rPisosSons = $request->input("rPisosSons");
        $prova_cao_t_a_n_a_t1->rAproxVulto = $request->input("rAproxVulto");
        $prova_cao_t_a_n_a_t1->rDisparos = $request->input("rDisparos");
        $prova_cao_t_a_n_a_t1->instPresaPerist = $request->input("instPresaPerist");
        $prova_cao_t_a_n_a_t1->intsBusca = $request->input("intsBusca");
        $prova_cao_t_a_n_a_t1->ladrido = $request->input("ladrido");
        $prova_cao_t_a_n_a_t1->instDefesa = $request->input("instDefesa");
        $prova_cao_t_a_n_a_t1->tecnMordida = $request->input("tecnMordida");
        $prova_cao_t_a_n_a_t1->qualidMordida = $request->input("qualidMordida");
        $prova_cao_t_a_n_a_t1->CombatLuta = $request->input("CombatLuta");
        $prova_cao_t_a_n_a_t1->notaFinal = $request->input("notaFinal");
        $prova_cao_t_a_n_a_t1->observacoes = $request->input("observacoes");
        $prova_cao_t_a_n_a_t1->arquivo = $request->input("arquivo");

		$prova_cao_t_a_n_a_t1->save();

		return redirect()->route('prova_cao_t_a_n_a_t1s.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prova_cao_t_a_n_a_t1 = ProvaCaoTANAT1::findOrFail($id);

		return view('prova_cao_t_a_n_a_t1s.show', compact('prova_cao_t_a_n_a_t1'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prova_cao_t_a_n_a_t1 = ProvaCaoTANAT1::findOrFail($id);

		return view('prova_cao_t_a_n_a_t1s.edit', compact('prova_cao_t_a_n_a_t1'));
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
		$prova_cao_t_a_n_a_t1 = ProvaCaoTANAT1::findOrFail($id);

		$prova_cao_t_a_n_a_t1->IdProvaCao = $request->input("IdProvaCao");
        $prova_cao_t_a_n_a_t1->data_nascim = $request->input("data_nascim");
        $prova_cao_t_a_n_a_t1->avaliador = $request->input("avaliador");
        $prova_cao_t_a_n_a_t1->local = $request->input("local");
        $prova_cao_t_a_n_a_t1->atitute = $request->input("atitute");
        $prova_cao_t_a_n_a_t1->agilidadeConfianca = $request->input("agilidadeConfianca");
        $prova_cao_t_a_n_a_t1->rPisosSons = $request->input("rPisosSons");
        $prova_cao_t_a_n_a_t1->rAproxVulto = $request->input("rAproxVulto");
        $prova_cao_t_a_n_a_t1->rDisparos = $request->input("rDisparos");
        $prova_cao_t_a_n_a_t1->instPresaPerist = $request->input("instPresaPerist");
        $prova_cao_t_a_n_a_t1->intsBusca = $request->input("intsBusca");
        $prova_cao_t_a_n_a_t1->ladrido = $request->input("ladrido");
        $prova_cao_t_a_n_a_t1->instDefesa = $request->input("instDefesa");
        $prova_cao_t_a_n_a_t1->tecnMordida = $request->input("tecnMordida");
        $prova_cao_t_a_n_a_t1->qualidMordida = $request->input("qualidMordida");
        $prova_cao_t_a_n_a_t1->CombatLuta = $request->input("CombatLuta");
        $prova_cao_t_a_n_a_t1->notaFinal = $request->input("notaFinal");
        $prova_cao_t_a_n_a_t1->observacoes = $request->input("observacoes");
        $prova_cao_t_a_n_a_t1->arquivo = $request->input("arquivo");

		$prova_cao_t_a_n_a_t1->save();

		return redirect()->route('prova_cao_t_a_n_a_t1s.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$prova_cao_t_a_n_a_t1 = ProvaCaoTANAT1::findOrFail($id);
		$prova_cao_t_a_n_a_t1->delete();

		return redirect()->route('prova_cao_t_a_n_a_t1s.index')->with('message', 'Item deleted successfully.');
	}

}
