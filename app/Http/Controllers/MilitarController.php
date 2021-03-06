<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Militar;
use App\Posto;
use App\Unidade;
use App\MotivoInativoMilitar;
use App\Enumeraveis;
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
		if (User::tipoUserLogado()=='U'){
			echo abort(403, 'Acesso não autorizado');
		}
		$militar = new Militar();
		$listaMotivos = MotivoInativoMilitar::all('descricao', 'id');
		$listaPostos = Posto::all('descricao', 'id');
		$listaUnidades = Unidade::all('descricao', 'id');
		$listaSexo = Enumeraveis::getSexoList(); 
		$gruposSang= Enumeraveis::getGrupoSangList();
		$formToCreate = true;
		
		return view('militars.create', compact('militar','listaPostos','listaUnidades','gruposSang','listaSexo','listaMotivos', 'formToCreate'));
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
		$a = new Militar();
		$a->num_mecanografico = $request->input("num_mecanografico");
		$a->posto_id = $request->input("posto_id");
		$a->apelido = $request->input("apelido");
		$a->nomeProprio = $request->input("nomeProprio");
		$a->data_nascim = $request->input("data_nascim");
		$a->grupo_sang = $request->input("grupo_sang");
		$a->sexo = $request->input("sexo");
		if($request->input("inativo")==""){
			$a->inativo = false;

		}else{
			$a->inativo = true;
		}
		$a->observacoes = $request->input("observacoes");
		$a->unidade_id = $request->input("unidade_id");
        if(!trim($request->input("motivo_inativo")==" ")){
        	 $a->motivo_inativo = $request->input("motivo_inativo");
        }
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
		$listaSexo = Enumeraveis::getSexoList();
		$gruposSang= Enumeraveis::getGrupoSangList(); 
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
		if (User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U'){
			echo abort(403, 'Acesso não autorizado');
		}
		$militar = Militar::findOrFail($id);
		$listaPostos = Posto::all('descricao', 'id');
		$listaUnidades = Unidade::all('descricao', 'id');
		$listaSexo =  Enumeraveis::getSexoList(); 
		$listaMotivos = MotivoInativoMilitar::all('descricao','id');
		$gruposSang=  Enumeraveis::getGrupoSangList(); 
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
		if (User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U'){
			echo abort(403, 'Acesso não autorizado');
		}
		$a = Militar::findOrFail($id);
		$a->num_mecanografico = $request->input("num_mecanografico");
		$a->posto_id = $request->input("posto_id");
		$a->apelido = $request->input("apelido");
		$a->nomeProprio = $request->input("nomeProprio");
		$a->data_nascim = $request->input("data_nascim");
		$a->grupo_sang = $request->input("grupo_sang");
		$a->sexo = $request->input("sexo");
		$a->unidade_id = $request->input("unidade_id");
		if($request->input("inativo")==""){
			$a->inativo = false;

		}else{
			$a->inativo = true;
		}
		$a->data_inativo = $request->input("data_inativo");
		$a->data_ativo = $request->input("data_ativo");
		if($request->input("motivo_inativo")!="-1"){
        	 $a->motivo_inativo = $request->input("motivo_inativo");
        }
        else{
        	 $a->motivo_inativo = null;
        }
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
		if (User::tipoUserLogado()=='G' || User::tipoUserLogado()=='U'){
			echo abort(403, 'Acesso não autorizado');
		}
		$a = Militar::findOrFail($id);
		$a->delete();
		return redirect()->route('militars.index')->with('message', 'Item deleted successfully.');
	}

}
