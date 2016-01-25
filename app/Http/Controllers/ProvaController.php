<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Prova;
use App\Enumeraveis;
use App\Entidade;
use App\ProvaMilitarTiro;
use App\ProvaCaoTIPer;
use App\ProvaBinomTANAT2;
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
		$prova = new Prova();
		$listaEntidade = Enumeraveis::getEntidadeList();
		$listaTipoProva = Enumeraveis::getTiposProvasList();
		return view('provas.create', compact("prova", "listaEntidade", "listaTipoProva"));
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
		$prova->tipoEntidade = $request->input("tipoEntidade");
		$prova->tipoProva = $request->input("tipoProva");
        $prova->dataProva = $request->input("dataProva");
        $prova->entidade_id = $request->input("entidade_id");
        $prova->arquivo = $request->input("arquivo");
        $prova->observacoes = $request->input("observacoes");

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
		$entidadeProva = $prova ->entidade_id;
		$entidade = Entidade::findOrFail($entidadeProva);
	
		return view('provas.edit', compact('prova', 'entidade'));
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

		$prova->tipoEntidade = $request->input("tipoEntidade");
		$prova->tipoProva = $request->input("tipoProva");
        $prova->dataProva = $request->input("dataProva");
        $prova->entidade_id = $request->input("entidade_id");
        $prova->arquivo = $request->input("arquivo");
        $prova->observacoes = $request->input("observacoes");

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

	public function provasEntidade($tipoEntidade, $entidade_id){
		$provas = Prova::whereRaw('tipoEntidade = ? and entidade_id = ?', array($tipoEntidade, $entidade_id))->paginate(10);
		$entidade = Entidade::findOrFail($entidade_id);

		$descricaoEntidade = '[' . $entidade -> nome . ' : ' . $entidade -> numero . ']'; //ir buscar à BD info sobre a pessoa que esta a ver provas
		return view('provas.index', compact('provas', 'descricaoEntidade'));
	}

	public function prova ($id){
		$prova = Prova::findOrFail($id);
		$tipoProva = $prova ->tipoProva;

		switch ($tipoProva) {
			case 'Tiro':
				$prova = ProvaMilitarTiro::findOrFail($id);
				return view('prova_militar_tiros.show', compact('prova'));
				break;
			case 'TIP': 
				$prova = ProvaCaoTIPer::findOrFail($id);
				return view('prova_cao_t_i_pers.show', compact('prova'));
				break;
			case 'TANAT2': 
				$prova = ProvaBinomTANAT2::findOrFail($id);
				return view('prova_binom_t_a_n_a_t2s.show', compact('prova'));
				break;
			default:
				echo "Tipo de Prova não Existe!"; //meter uma view aqui 
				break;
		}
		
	}

	public function criarProva ($tipoProva){

		switch ($tipoProva) {
			case 'Tiro':
				$prova = new ProvaMilitarTiro();
				return view('prova_militar_tiros.create', compact('prova'));
				break;
			case 'TIP': 
				$prova = new ProvaCaoTIPer();
				return view('prova_cao_t_i_pers.create', compact('prova'));
				break;
			case 'TANAT2': 
				$prova = new ProvaBinomTANAT2();
				return view('prova_binom_t_a_n_a_t2s.create', compact('prova'));
				break;
			default:
				echo "Tipo de Prova não Existe!"; //meter uma view aqui 
				break;
		}
		
	}

	public function editarProva ($id){
		$prova = Prova::findOrFail($id);
		$tipoProva = $prova ->tipoProva;
		switch ($tipoProva) {
			case 'Tiro':
				$prova = ProvaMilitarTiro::findOrFail($id);
				return view('prova_militar_tiros.edit', compact('prova'));
				break;
			case 'TIP': 
				$prova = ProvaCaoTIPer::findOrFail($id);
				return view('prova_cao_t_i_pers.edit', compact('prova'));
				break;
			case 'TANAT2': 
				$prova = ProvaBinomTANAT2::findOrFail($id);
				return view('prova_binom_t_a_n_a_t2s.edit', compact('prova'));
				break;
			default:
				echo "Tipo de Prova não Existe!"; //meter uma view aqui 
				break;
		}
		
	}

}
