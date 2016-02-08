<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Militar;
use App\Enumeraveis;
use Illuminate\Http\Request;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::orderBy('name', 'asc')->paginate(10);

		return view('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$user = new User();
		$listaTipoMilitar =  Enumeraveis::getTiposMilitarList();
		$listaNomeProprioMilitar = Militar::all('nomeProprio', 'id');
		//$listaApelidoMilitar = Militar::all('apelido', 'id');
		return view('users.create', compact('user', 'listaTipoMilitar'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$a = new User();
		$a->name = $request->input("name");
		$a->email = $request->input("email");
		$a->password = $request->input("password");
        $a->tipo = $request->input("tipo");
        $a->inativo = $request->input("NomeInativo");
		$a->save();
		return redirect()->route('users.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::findOrFail($id);
		$listaTipoMilitar =  Enumeraveis::getTiposMilitarList();
		$listaNomeProprioMilitar = Militar::all('nomeProprio', 'id');
		return view('users.show', compact('user', 'listaTipoMilitar', 'listaNomeProprioMilitar'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		$listaTipoMilitar =  Enumeraveis::getTiposMilitarList();
		//$listaNomeProprioMilitar = Militar::all('nomeProprio', 'id');
		//$listaApelidoMilitar = Militar::all('apelido', 'id');
		return view('users.edit', compact('user', 'listaTipoMilitar'));
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
		$a = User::findOrFail($id);
		$a->name = $request->input("name");
		$a->email = $request->input("email");
		$a->password = $request->input("password");
        $a->tipo = $request->input("tipo");
		if($request->input("inativo")==""){
			$a->inativo = false;

		}else{
			$a->inativo = true;
		}
		$a->save();
		return redirect()->route('users.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$user = User::findOrFail($id);
		$user->delete();
		return redirect()->route('users.index')->with('message', 'Item deleted successfully.');
	}
}