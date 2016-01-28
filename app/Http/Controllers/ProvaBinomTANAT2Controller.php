<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ProvaBinomTANAT2;
use Illuminate\Http\Request;

class ProvaBinomTANAT2Controller extends Controller {
 
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prova_binom_t_a_n_a_t2s = ProvaBinomTANAT2::orderBy('id', 'desc')->paginate(10);

		return view('prova_binom_t_a_n_a_t2s.index', compact('prova_binom_t_a_n_a_t2s'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$prova_binom_t_a_n_a_t2s = new ProvaBinomTANAT2();
		return view('prova_binom_t_a_n_a_t2s.create', compact("prova_binom_t_a_n_a_t2s"));
	}
 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$a = new ProvaBinomTANAT2();

		$a->dataProva = $request->input("dataProva");
        $a->avaliador = $request->input("avaliador");
        $a->local = $request->input("local");
        $a->atitute = $request->input("atitute");
        $a->memoriaMuscular = $request->input("memoriaMuscular");
        $a->agilidadeConfianca = $request->input("agilidadeConfianca");
        $a->rPisosSons = $request->input("rPisosSons");
        $a->rAproxVulto = $request->input("rAproxVulto");
        $a->rDisparos = $request->input("rDisparos");
        $a->instPresaPerist = $request->input("instPresaPerist");
        $a->intsBusca = $request->input("intsBusca");
        $a->marcPessoasObj = $request->input("marcPessoasObj");
        $a->inicPistas = $request->input("inicPistas");
        $a->ladrido = $request->input("ladrido");
        $a->instDefesa = $request->input("instDefesa");
        $a->tecnMordida = $request->input("tecnMordida");
        $a->qualidMordida = $request->input("qualidMordida");
        $a->CombatLuta = $request->input("CombatLuta");
        $a->notaFinal = $request->input("notaFinal");
        $a->observacoes = $request->input("observacoes");
        $a->arquivo = $request->input("arquivo");

		$a->save();

		return redirect()->route('prova_binom_t_a_n_a_t2s.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prova_binom_t_a_n_a_t2 = ProvaBinomTANAT2::findOrFail($id);

		return view('prova_binom_t_a_n_a_t2s.show', compact('prova_binom_t_a_n_a_t2'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prova_binom_t_a_n_a_t2 = ProvaBinomTANAT2::findOrFail($id);

		return view('prova_binom_t_a_n_a_t2s.edit', compact('prova_binom_t_a_n_a_t2'));
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
		$a = ProvaBinomTANAT2::findOrFail($id);
		
		$a->dataProva = $request->input("dataProva");
        $a->avaliador = $request->input("avaliador");
        $a->local = $request->input("local");
        $a->atitute = $request->input("atitute");
        $a->memoriaMuscular = $request->input("memoriaMuscular");
        $a->agilidadeConfianca = $request->input("agilidadeConfianca");
        $a->rPisosSons = $request->input("rPisosSons");
        $a->rAproxVulto = $request->input("rAproxVulto");
        $a->rDisparos = $request->input("rDisparos");
        $a->instPresaPerist = $request->input("instPresaPerist");
        $a->intsBusca = $request->input("intsBusca");
        $a->marcPessoasObj = $request->input("marcPessoasObj");
        $a->inicPistas = $request->input("inicPistas");
        $a->ladrido = $request->input("ladrido");
        $a->instDefesa = $request->input("instDefesa");
        $a->tecnMordida = $request->input("tecnMordida");
        $a->qualidMordida = $request->input("qualidMordida");
        $a->CombatLuta = $request->input("CombatLuta");
        $a->notaFinal = $request->input("notaFinal");
        $a->observacoes = $request->input("observacoes");
        $a->arquivo = $request->input("arquivo");

		$a->save();

		return redirect()->route('prova_binom_t_a_n_a_t2s.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$a = ProvaBinomTANAT2::findOrFail($id);
		$a->delete();

		return redirect()->route('prova_binom_t_a_n_a_t2s.index')->with('message', 'Item deleted successfully.');
	}

}
