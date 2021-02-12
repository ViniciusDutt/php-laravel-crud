<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use App\Models\ModelClient;

class clientController extends Controller
{

    private $objClient;

    public function __construct()
    {
        $this->objClient = new ModelClient();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = $this->objClient->paginate(10);
        return view('index',compact('client'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
    {
        $cad=$this->objClient->create([
            'nome'=>$request->nome,
            'genero'=>$request->genero,
            'idade'=>$request->idade,
            'email'=>$request->email,
            'telefone'=>$request->telefone,
            'cep'=>$request->cep,
            'endereco'=>$request->endereco,
            'cidade'=>$request->cidade,
            'estado'=>$request->estado,
            'sigla'=>$request->sigla,
            'pais'=>$request->pais,
            'cartao'=>$request->cartao
        ]);
        if($cad){
            return redirect('client');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client=$this->objClient->find($id);
        return view('edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objClient->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'genero'=>$request->genero,
            'idade'=>$request->idade,
            'email'=>$request->email,
            'telefone'=>$request->telefone,
            'cep'=>$request->cep,
            'endereco'=>$request->endereco,
            'cidade'=>$request->cidade,
            'estado'=>$request->estado,
            'sigla'=>$request->sigla,
            'pais'=>$request->pais,
            'cartao'=>$request->cartao
        ]);
        return redirect('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=$this->objClient->destroy($id);
        return redirect('client');
    }

    public function search(Request $request)
    {
        $search_text = $_GET['query'];
        $client = $this->objClient->where('id', 'like', '%' .$search_text. '%')->orWhere('nome', 'like', '%' .$search_text. '%')->orWhere('email', 'like', '%' .$search_text. '%')->paginate(10);
        return view('search', compact('client'));
    }
}
