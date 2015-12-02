<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Entidade;
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
		$entidade = Entidade::findOrFail($id);
		$entidade->delete();

		return redirect()->route('entidades.index')->with('message', 'Item deleted successfully.');
	}

}
