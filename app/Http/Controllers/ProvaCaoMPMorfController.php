<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\ProvaCaoMPMorf;
use Illuminate\Http\Request;

class ProvaCaoMPMorfController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prova_cao_m_p_morves = ProvaCaoMPMorf::orderBy('id', 'desc')->paginate(10);

		return view('prova_cao_m_p_morves.index', compact('prova_cao_m_p_morves'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if (User::tipoUserLogado()=='U'){
			echo abort(403, 'Acesso não autorizado');
		}
		return view('prova_cao_m_p_morves.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		if (User::tipoUserLogado()=='U'){
			echo abort(403, 'Acesso não autorizado');
		}
		$prova_cao_m_p_morf = new ProvaCaoMPMorf();
		$prova_cao_m_p_morf->IdProvaCao = $request->input("IdProvaCao");
        $prova_cao_m_p_morf->data_nascim = $request->input("data_nascim");
        $prova_cao_m_p_morf->peso = $request->input("peso");
        $prova_cao_m_p_morf->comprimento = $request->input("comprimento");
        $prova_cao_m_p_morf->altGarrote = $request->input("altGarrote");
        $prova_cao_m_p_morf->altGarupa = $request->input("altGarupa");
        $prova_cao_m_p_morf->pelagem = $request->input("pelagem");
        $prova_cao_m_p_morf->perimetro = $request->input("perimetro");
        $prova_cao_m_p_morf->orelhas = $request->input("orelhas");
        $prova_cao_m_p_morf->distOlhos = $request->input("distOlhos");
        $prova_cao_m_p_morf->distOccipTrufa = $request->input("distOccipTrufa");
        $prova_cao_m_p_morf->compChanfro = $request->input("compChanfro");
        $prova_cao_m_p_morf->diamChanfro = $request->input("diamChanfro");
        $prova_cao_m_p_morf->observacoes = $request->input("observacoes");
        $prova_cao_m_p_morf->arquivo = $request->input("arquivo");

		$prova_cao_m_p_morf->save();

		return redirect()->route('prova_cao_m_p_morves.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prova_cao_m_p_morf = ProvaCaoMPMorf::findOrFail($id);

		return view('prova_cao_m_p_morves.show', compact('prova_cao_m_p_morf'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		if (User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U'){
			echo abort(403, 'Acesso não autorizado');
		}
		$prova_cao_m_p_morf = ProvaCaoMPMorf::findOrFail($id);

		return view('prova_cao_m_p_morves.edit', compact('prova_cao_m_p_morf'));
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
		if (User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U'){
			echo abort(403, 'Acesso não autorizado');
		}
		$prova_cao_m_p_morf = ProvaCaoMPMorf::findOrFail($id);
		$prova_cao_m_p_morf->IdProvaCao = $request->input("IdProvaCao");
        $prova_cao_m_p_morf->data_nascim = $request->input("data_nascim");
        $prova_cao_m_p_morf->peso = $request->input("peso");
        $prova_cao_m_p_morf->comprimento = $request->input("comprimento");
        $prova_cao_m_p_morf->altGarrote = $request->input("altGarrote");
        $prova_cao_m_p_morf->altGarupa = $request->input("altGarupa");
        $prova_cao_m_p_morf->pelagem = $request->input("pelagem");
        $prova_cao_m_p_morf->perimetro = $request->input("perimetro");
        $prova_cao_m_p_morf->orelhas = $request->input("orelhas");
        $prova_cao_m_p_morf->distOlhos = $request->input("distOlhos");
        $prova_cao_m_p_morf->distOccipTrufa = $request->input("distOccipTrufa");
        $prova_cao_m_p_morf->compChanfro = $request->input("compChanfro");
        $prova_cao_m_p_morf->diamChanfro = $request->input("diamChanfro");
        $prova_cao_m_p_morf->observacoes = $request->input("observacoes");
        $prova_cao_m_p_morf->arquivo = $request->input("arquivo");

		$prova_cao_m_p_morf->save();

		return redirect()->route('prova_cao_m_p_morves.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		if (User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U'){
			echo abort(403, 'Acesso não autorizado');
		}
		$prova_cao_m_p_morf = ProvaCaoMPMorf::findOrFail($id);
		$prova_cao_m_p_morf->delete();

		return redirect()->route('prova_cao_m_p_morves.index')->with('message', 'Item deleted successfully.');
	}

}
