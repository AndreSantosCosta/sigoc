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
		return view('prova_binom_t_a_n_a_t2s.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$prova_binom_t_a_n_a_t2 = new ProvaBinomTANAT2();

		$prova_binom_t_a_n_a_t2->IdProvaBinomio = $request->input("IdProvaBinomio");
        $prova_binom_t_a_n_a_t2->data_nascim = $request->input("data_nascim");
        $prova_binom_t_a_n_a_t2->avaliador = $request->input("avaliador");
        $prova_binom_t_a_n_a_t2->local = $request->input("local");
        $prova_binom_t_a_n_a_t2->atitute = $request->input("atitute");
        $prova_binom_t_a_n_a_t2->memoriaMuscular = $request->input("memoriaMuscular");
        $prova_binom_t_a_n_a_t2->agilidadeConfianca = $request->input("agilidadeConfianca");
        $prova_binom_t_a_n_a_t2->rPisosSons = $request->input("rPisosSons");
        $prova_binom_t_a_n_a_t2->rAproxVulto = $request->input("rAproxVulto");
        $prova_binom_t_a_n_a_t2->rDisparos = $request->input("rDisparos");
        $prova_binom_t_a_n_a_t2->instPresaPerist = $request->input("instPresaPerist");
        $prova_binom_t_a_n_a_t2->intsBusca = $request->input("intsBusca");
        $prova_binom_t_a_n_a_t2->marcPessoasObj = $request->input("marcPessoasObj");
        $prova_binom_t_a_n_a_t2->inicPistas = $request->input("inicPistas");
        $prova_binom_t_a_n_a_t2->ladrido = $request->input("ladrido");
        $prova_binom_t_a_n_a_t2->instDefesa = $request->input("instDefesa");
        $prova_binom_t_a_n_a_t2->tecnMordida = $request->input("tecnMordida");
        $prova_binom_t_a_n_a_t2->qualidMordida = $request->input("qualidMordida");
        $prova_binom_t_a_n_a_t2->CombatLuta = $request->input("CombatLuta");
        $prova_binom_t_a_n_a_t2->notaFinal = $request->input("notaFinal");
        $prova_binom_t_a_n_a_t2->observacoes = $request->input("observacoes");
        $prova_binom_t_a_n_a_t2->arquivo = $request->input("arquivo");

		$prova_binom_t_a_n_a_t2->save();

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
		$prova_binom_t_a_n_a_t2 = ProvaBinomTANAT2::findOrFail($id);

		$prova_binom_t_a_n_a_t2->IdProvaBinomio = $request->input("IdProvaBinomio");
        $prova_binom_t_a_n_a_t2->data_nascim = $request->input("data_nascim");
        $prova_binom_t_a_n_a_t2->avaliador = $request->input("avaliador");
        $prova_binom_t_a_n_a_t2->local = $request->input("local");
        $prova_binom_t_a_n_a_t2->atitute = $request->input("atitute");
        $prova_binom_t_a_n_a_t2->memoriaMuscular = $request->input("memoriaMuscular");
        $prova_binom_t_a_n_a_t2->agilidadeConfianca = $request->input("agilidadeConfianca");
        $prova_binom_t_a_n_a_t2->rPisosSons = $request->input("rPisosSons");
        $prova_binom_t_a_n_a_t2->rAproxVulto = $request->input("rAproxVulto");
        $prova_binom_t_a_n_a_t2->rDisparos = $request->input("rDisparos");
        $prova_binom_t_a_n_a_t2->instPresaPerist = $request->input("instPresaPerist");
        $prova_binom_t_a_n_a_t2->intsBusca = $request->input("intsBusca");
        $prova_binom_t_a_n_a_t2->marcPessoasObj = $request->input("marcPessoasObj");
        $prova_binom_t_a_n_a_t2->inicPistas = $request->input("inicPistas");
        $prova_binom_t_a_n_a_t2->ladrido = $request->input("ladrido");
        $prova_binom_t_a_n_a_t2->instDefesa = $request->input("instDefesa");
        $prova_binom_t_a_n_a_t2->tecnMordida = $request->input("tecnMordida");
        $prova_binom_t_a_n_a_t2->qualidMordida = $request->input("qualidMordida");
        $prova_binom_t_a_n_a_t2->CombatLuta = $request->input("CombatLuta");
        $prova_binom_t_a_n_a_t2->notaFinal = $request->input("notaFinal");
        $prova_binom_t_a_n_a_t2->observacoes = $request->input("observacoes");
        $prova_binom_t_a_n_a_t2->arquivo = $request->input("arquivo");

		$prova_binom_t_a_n_a_t2->save();

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
		$prova_binom_t_a_n_a_t2 = ProvaBinomTANAT2::findOrFail($id);
		$prova_binom_t_a_n_a_t2->delete();

		return redirect()->route('prova_binom_t_a_n_a_t2s.index')->with('message', 'Item deleted successfully.');
	}

}
