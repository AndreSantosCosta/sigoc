<?php namespace App\Http\Controllers;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\OrigemCao;
use App\Cao;
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
		$cao = new Cao();
		$listaOrigem = array(' '=>' ', 'Procriação'=>'Procriação', 'Doacção'=>'Doacção', 'Remonta'=>'Remonta');
		$listaOrigem = OrigemCao::all('descricao', 'id');
		$listaMotivos = array(' '=>' ','Incapacidade Técnica'=>'Incapacidade Técnica', 'Incapacidade Veterinária'=>'Incapacidade Veterinária','Morte'=>'Morte');
		$listaSexo = array(' '=>' ', 'Fêmea'=>'Fêmea', 'Macho'=>'Macho');
		return view('caos.create', compact('cao', 'listaMotivos', 'listaSexo', 'listaOrigem'));
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 * @return Response
	 */
	public function store(Request $request)
	{
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
        if(!trim($request->input("motivo_inativo")=="")){
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
		$listaOrigem = array(' '=>' ', 'Procriação'=>'Procriação', 'Doacção'=>'Doacção', 'Remonta'=>'Remonta');
		$listaMotivos = array(' '=>' ','Incapacidade Técnica'=>'Incapacidade Técnica', 'Incapacidade Veterinária'=>'Incapacidade Veterinária','Morte'=>'Morte');
		$listaSexo = array(' '=>' ', 'Fêmea'=>'Fêmea', 'Macho'=>'Macho');
		
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
		$cao = Cao::findOrFail($id);
		$listaOrigem = array(' '=>' ', 'Procriação'=>'Procriação', 'Doacção'=>'Doacção', 'Remonta'=>'Remonta');
		$listaMotivos = array(' '=>' ','Incapacidade Técnica'=>'Incapacidade Técnica', 'Incapacidade Veterinária'=>'Incapacidade Veterinária','Morte'=>'Morte');
		$listaSexo = array(' '=>' ', 'Fêmea'=>'Fêmea', 'Macho'=>'Macho');
		
		return view('caos.edit', compact('cao', 'listaOrigem', 'listaMotivos', 'listaSexo'));
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
        $a->inativo = $request->input("inativo");
        $a->data_inativo = $request->input("data_inativo");
        $a->motivo_inativo = $request->input("motivo_inativo");
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
		$a = Cao::findOrFail($id);
		$a->delete();
		return redirect()->route('caos.index')->with('message', 'Item deleted successfully.');
	}
}