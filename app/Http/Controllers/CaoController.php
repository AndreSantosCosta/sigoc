<?php namespace App\Http\Controllers;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\OrigemCao;
use App\Cao;
use App\Unidade;
use App\Enumeraveis;
use App\MotivoInativoCao;
use Illuminate\Http\Request;
 
class CaoController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$caos = Cao::orderBy('id', 'desc')->paginate(10);
		return view('caos.index', compact('caos'));
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
		$cao = new Cao();
		$listaOrigem = OrigemCao::all('descricao', 'id');
		$listaUnidades = Unidade::all('descricao', 'id');
		$listaMotivos = MotivoInativoCao::all('descricao', 'id');
		$listaSexo = Enumeraveis::getSexoCaoList();
		return view('caos.create', compact('cao', 'listaMotivos', 'listaSexo', 'listaOrigem', 'listaUnidades'));
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
		$a = new Cao();
		$a->num_matricula = $request->input("num_matricula");
		$a->nomeCao = $request->input("nomeCao");
        $a->num_chip = $request->input("num_chip");
        $a->nome = $request->input("nome");
        $a->raca = $request->input("raca");
        $a->sexo = $request->input("sexo");
        $a->origem = $request->input("origem");
        $a->data_nascim = $request->input("data_nascim");
        $a->mae = $request->input("mae");
        $a->pai = $request->input("pai");
        $a->ninhada = $request->input("ninhada");
        $a->unidade_id = $request->input("unidade_id");
        $a->inativo = $request->input("inativo");
        $a->data_inativo = $request->input("data_inativo");
        if(!trim($request->input("motivo_inativo")==" ")){
        	 $a->motivo_inativo = $request->input("motivo_inativo");
        }
        $a->observacoes = $request->input("observacoes");
		$a->save();
		return redirect()->route('caos.index')->with('message', 'Item created successfully.');
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cao = Cao::findOrFail($id);
		$listaOrigem = OrigemCao::all('descricao', 'id');
		$listaMotivos = MotivoInativoCao::all('descricao', 'id');
		$listaSexo = Enumeraveis::getSexoCaoList();
		
		return view('caos.show', compact('cao', 'listaOrigem', 'listaMotivos', 'listaSexo'));
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
		$cao = Cao::findOrFail($id);
		$listaOrigem = OrigemCao::all('descricao', 'id');
		$listaUnidades = Unidade::all('descricao', 'id');
		$listaMotivos = MotivoInativoCao::all('descricao', 'id');
		$listaSexo = Enumeraveis::getSexoCaoList();
		
		return view('caos.edit', compact('cao', 'listaOrigem', 'listaMotivos', 'listaUnidades', 'listaSexo'));
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
		$a = Cao::findOrFail($id);
		$a->num_matricula = $request->input("num_matricula");
		$a->nomeCao = $request->input("nomeCao");
        $a->num_chip = $request->input("num_chip");
        $a->nome = $request->input("nome");
        $a->raca = $request->input("raca");
        $a->sexo = $request->input("sexo");
        $a->origem = $request->input("origem");
        $a->data_nascim = $request->input("data_nascim");
        $a->mae = $request->input("mae");
        $a->pai = $request->input("pai");
        $a->ninhada = $request->input("ninhada");
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
		return redirect()->route('caos.index')->with('message', 'Item updated successfully.');
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
		$a = Cao::findOrFail($id);
		$a->delete();
		return redirect()->route('caos.index')->with('message', 'Item deleted successfully.');
	}
}