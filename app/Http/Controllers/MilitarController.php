<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Militar;
use App\Posto;
use App\Unidade;
use Illuminate\Http\Request;

class MilitarController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$militars = Militar::orderBy('id', 'desc')->paginate(10);

		return view('militars.index', compact('militars'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$listaPostos = Posto::lists('descricao', 'id');
		$listaUnidades = Unidade::lists('descricao', 'id');
		$gruposSang= array('A+','A-','B+','B-','O+','O-','AB+','AB-');
		$listaMotivos = array('Afasto da Especialidade porIncapacidade Técnica', 'Reforma','Transferido','Morte');
		$listaSexo = array('F'=>'Feminino', 'M'=>'Masculino');
		$listaSexo = array('Feminino', 'Masculino');
		return view('militars.create', compact('listaPostos','listaUnidades','gruposSang','listaSexo','listaMotivos'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		$militar = new Militar();

		$militar->num_mecanografico = $request->input("num_mecanografico");
		$militar->user_id = $request->input("user_id");
		$militar->posto_id = $request->input("posto_id");
		$militar->apelido = $request->input("apelido");
		$militar->nome = $request->input("nome");
		$militar->data_nascim = $request->input("data_nascim");
		$militar->grupo_sang = $request->input("grupo_sang");
		$militar->sexo = $request->input("sexo");
		$militar->unidade_id = $request->input("unidade_id");
		$militar->inativo = $request->input("inativo");
		$militar->data_inativo = $request->input("data_inativo");
		$militar->motivo_inativo = $request->input("motivo_inativo");

		$militar->save();

		return redirect()->route('militars.index')->with('message', 'Item created successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$militar = Militar::findOrFail($id);

		return view('militars.show', compact('militar'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$militar = Militar::findOrFail($id);
	
		$listaPostos = Posto::lists('descricao', 'id');

		$listaUnidades = Unidade::lists('descricao', 'id');
		
		$gruposSang= array('A+','A-','B+','B-','O+','O-','AB+','AB-');

		$listaMotivos = array('Afasto da Especialidade por Incapacidade Técnica', 'Reforma','Transferido','Morte');

		$listaSexo = array('Feminino', 'Masculino');

		return view('militars.edit', compact('militar', 'listaPostos','gruposSang', 'listaUnidades', 'listaSexo','listaMotivos'));
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
		$militar = Militar::findOrFail($id);

		$militar->num_mecanografico = $request->input("num_mecanografico");
		$militar->user_id = $request->input("user_id");
		$militar->posto_id = $request->input("posto_id");
		$militar->apelido = $request->input("apelido");
		$militar->nome = $request->input("nome");
		$militar->data_nascim = $request->input("data_nascim");
		$militar->grupo_sang = $request->input("grupo_sang");
		$militar->sexo = $request->input("sexo");
		$militar->unidade_id = $request->input("unidade_id");
		$militar->inativo = $request->input("inativo");
		$militar->data_inativo = $request->input("data_inativo");
		$militar->motivo_inativo = $request->input("motivo_inativo");

		$militar->save();

		return redirect()->route('militars.index')->with('message', 'Item updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$militar = Militar::findOrFail($id);
		$militar->delete();

		return redirect()->route('militars.index')->with('message', 'Item deleted successfully.');
	}

}
