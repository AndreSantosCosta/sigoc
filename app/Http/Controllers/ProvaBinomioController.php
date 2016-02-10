<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\ProvaBinomio;
use Illuminate\Http\Request;

class ProvaBinomioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prova_binomios = ProvaBinomio::orderBy('id', 'desc')->paginate(10);

		return view('prova_binomios.index', compact('prova_binomios'));
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
		return view('prova_binomios.create');
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
		$prova_binomio = new ProvaBinomio();
		$prova_binomio->prova_id = $request->input("prova_id");
        $prova_binomio->binomio_id = $request->input("binomio_id");
        $prova_binomio->tipoProva = $request->input("tipoProva");
        $prova_binomio->dataProva = $request->input("dataProva");

		$prova_binomio->save();

		return redirect()->route('prova_binomios.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$prova_binomio = ProvaBinomio::findOrFail($id);

		return view('prova_binomios.show', compact('prova_binomio'));
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
		$prova_binomio = ProvaBinomio::findOrFail($id);

		return view('prova_binomios.edit', compact('prova_binomio'));
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
		$prova_binomio = ProvaBinomio::findOrFail($id);
		$prova_binomio->prova_id = $request->input("prova_id");
        $prova_binomio->binomio_id = $request->input("binomio_id");
        $prova_binomio->tipoProva = $request->input("tipoProva");
        $prova_binomio->dataProva = $request->input("dataProva");

		$prova_binomio->save();

		return redirect()->route('prova_binomios.index')->with('message', 'Item updated successfully.');
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
		$prova_binomio = ProvaBinomio::findOrFail($id);
		$prova_binomio->delete();
		return redirect()->route('prova_binomios.index')->with('message', 'Item deleted successfully.');
	}

}
