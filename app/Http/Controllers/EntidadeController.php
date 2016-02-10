<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Entidade;
use App\Militar;
use App\Cao;
use App\Binomio;
use Illuminate\Http\Request;

class EntidadeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$entidades = Entidade::orderBy('id', 'desc')->paginate(10);

		return view('entidades.index', compact('entidades'));
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
		return view('entidades.create');
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
		$entidade = new Entidade();
		$entidade->tipoEntidade = $request->input("tipoEntidade");
        $entidade->nome = $request->input("nome");
        $entidade->inativo = $request->input("inativo");
        $entidade->data_inativo = $request->input("data_inativo");
        $entidade->data_ativo = $request->input("data_ativo");
        $entidade->fotografia = $request->input("fotografia");
        $entidade->tamanhoImagem = $request->input("tamanhoImagem");
        $entidade->tipoImagem = $request->input("tipoImagem");
        $entidade->observacoes = $request->input("observacoes");
        $entidade->numero = $request->input("numero");

		$entidade->save();

		return redirect()->route('entidades.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$entidade = Entidade::findOrFail($id);

		return view('entidades.show', compact('entidade'));
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
		$entidade = Entidade::findOrFail($id);

		return view('entidades.edit', compact('entidade'));
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
		$entidade = Entidade::findOrFail($id);
		$entidade->tipoEntidade = $request->input("tipoEntidade");
        $entidade->nome = $request->input("nome");
        $entidade->inativo = $request->input("inativo");
        $entidade->data_inativo = $request->input("data_inativo");
        $entidade->data_ativo = $request->input("data_ativo");
        $entidade->fotografia = $request->input("fotografia");
        $entidade->tamanhoImagem = $request->input("tamanhoImagem");
        $entidade->tipoImagem = $request->input("tipoImagem");
        $entidade->observacoes = $request->input("observacoes");
        $entidade->numero = $request->input("numero");

		$entidade->save();

		return redirect()->route('entidades.index')->with('message', 'Item updated successfully.');
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
		$entidade = Entidade::findOrFail($id);
		$entidade->delete();

		return redirect()->route('entidades.index')->with('message', 'Item deleted successfully.');
	}


	public function goEntidade($id){
		$entidade = Entidade::findOrFail($id);
		$tipoEntidades = $entidade ->tipoEntidade;

		switch ($tipoEntidades) {
			case 'M':
				$militar = Militar::findOrFail($id);
				return view('militars.show', compact('militar'));
				break;
			case 'C': 
				$cao = Cao::findOrFail($id);
				return view('caos.show', compact('cao'));
				break;
			case 'B': 
				$binomio = Binomio::findOrFail($id);
				return view('binomios.show', compact('binomio'));
				break;
			default:
				echo "Tipo de Entidade não Existe!";
				break;
		}
	}
}
