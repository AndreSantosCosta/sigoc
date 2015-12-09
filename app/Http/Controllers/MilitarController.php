<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Militar;
use App\Posto;
use App\Unidade;
use App\MotivoInativoMilitar;
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
		$militar = new Militar();
		$listaPostos = Posto::lists('descricao', 'id');
		$listaUnidades = Unidade::lists('descricao', 'id');
		$listaSexo = array(' '=>' ', 'Feminino'=>'Feminino', 'Masculino'=>'Masculino');
		//$listaMotivos = MotivoInativoMilitar::lists('descricao', 'id');
		$listaMotivos = array('Afasto da Especialidade por Incapacidade Técnica'=>'Afasto da Especialidade por Incapacidade Técnica', 'Reforma'=>'Reforma','Transferido'=>'Transferido','Morte'=>'Morte');
		$gruposSang= array(' '=>' ', 'A Positivo'=>'A Positivo','A Negativo'=>'A Negativo','B Positivo'=>'B Positivo','B Negativo'=>'B Negativo','O Positivo'=>'O Positivo','O Negativo'=>'O Negativo','AB Positivo'=>'AB Positivo','AB Negativo'=>'AB Negativo');
		$formToCreate = true;

		return view('militars.create', compact('militar','listaPostos','listaUnidades','gruposSang','listaSexo','listaMotivos','formToCreate'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
		
		$a = new Militar();
		$a->num_mecanografico = $request->input("num_mecanografico");
		$a->posto_id = $request->input("posto_id");
		$a->apelido = $request->input("apelido");
		$a->nomeProprio = $request->input("nomeProprio");
		$a->data_nascim = $request->input("data_nascim");
		$a->grupo_sang = $request->input("grupo_sang");
		$a->sexo = $request->input("sexo");
		$a->inativo = $request->input("inativo");
		$a->observacoes = $request->input("observacoes");
		$a->unidade_id = $request->input("unidade_id");

		$a->save();

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
		$listaSexo = array(' '=>' ', 'Feminino'=>'Feminino', 'Masculino'=>'Masculino');
		$gruposSang= array(' '=>' ', 'A Positivo'=>'A Positivo','A Negativo'=>'A Negativo','B Positivo'=>'B Positivo','B Negativo'=>'B Negativo','O Positivo'=>'O Positivo','O Negativo'=>'O Negativo','AB Positivo'=>'AB Positivo','AB Negativo'=>'AB Negativo');
		
		return view('militars.show', compact('militar', 'listaSexo', 'gruposSang'));
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
		$listaSexo = array(' '=>' ', 'Feminino'=>'Feminino', 'Masculino'=>'Masculino');
		//$listaMotivos = MotivoInativoMilitar::lists('descricao','id');
		$listaMotivos = array('Afasto da Especialidade por Incapacidade Técnica'=>'Afasto da Especialidade por Incapacidade Técnica', 'Reforma'=>'Reforma','Transferido'=>'Transferido','Morte'=>'Morte');
		$gruposSang= array(' '=>' ', 'A Positivo'=>'A Positivo','A Negativo'=>'A Negativo','B Positivo'=>'B Positivo','B Negativo'=>'B Negativo','O Positivo'=>'O Positivo','O Negativo'=>'O Negativo','AB Positivo'=>'AB Positivo','AB Negativo'=>'AB Negativo');
		
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
		$a = Militar::findOrFail($id);

		$a->num_mecanografico = $request->input("num_mecanografico");
		$a->posto_id = $request->input("posto_id");
		$a->apelido = $request->input("apelido");
		$a->nomeProprio = $request->input("nomeProprio");
		$a->data_nascim = $request->input("data_nascim");
		$a->grupo_sang = $request->input("grupo_sang");
		$a->sexo = $request->input("sexo");
		$a->unidade_id = $request->input("unidade_id");
		$a->inativo = $request->input("inativo");
		$a->data_inativo = $request->input("data_inativo");
		$a->data_ativo = $request->input("data_ativo");
		$a->motivo_inativo = $request->input("motivo_inativo");
		$a->observacoes = $request->input("observacoes");

		$a->save();

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
		$a = Militar::findOrFail($id);
		$a->delete();

		return redirect()->route('militars.index')->with('message', 'Item deleted successfully.');
	}

}
