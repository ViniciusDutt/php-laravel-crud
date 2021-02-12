@extends('templates.template')

@section('content')
    <div class="mt-5 d-flex justify-content-center">
        <form class="bg-light p-5 d-flex flex-column justify-content-center" name="formEdit" id="formEdit" method="post" action="{{url("client/$client->id")}}">
            @csrf
            @method('PUT')
            <input type="hidden" name="id">
            <div class="d-flex mb-2">
                <input class="form-control me-1" type="text" name="nome" placeholder="nome" value="{{$client->nome}}">
                <select class="form-select ms-1" name="genero" id="" value="{{$client->genero}}">
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>
            <div class="d-flex mb-2">
                <input class="form-control me-1" type="number" name="idade" placeholder="idade" value="{{$client->idade}}">
                <input class="form-control ms-1" type="text" name="telefone" placeholder="tel" value="{{$client->telefone}}">
            </div>
            <div class="d-flex mb-2">
                <input class="form-control type="text" name="endereco" placeholder="endereço" value="{{$client->endereco}}">
            </div>
            <div class="d-flex mb-2">
                <input class="form-control me-1" type="text" name="cep" placeholder="cep" value="{{$client->cep}}">
                <input class="form-control ms-1" type="text" name="cidade" placeholder="cidade" value="{{$client->cidade}}">
            </div>
            
            <div class="d-flex mb-2">
                <input class="form-control me-1" type="text" name="estado" value="{{$client->estado}}">
                <input class="form-control me-1" type="text" name="sigla" value="{{$client->sigla}}">
                <input class="form-control" type="text" name="pais" value="{{$client->pais}}">
            </div>
            <div class="d-flex mb-2">
                <input class="form-control" type="text" name="cartao" value="{{$client->cartao}}">
            </div>
            <div class="d-flex mb-2">
                <input class="form-control" type="email" name="email" value="{{$client->email}}">
            </div>
            <input class="btn btn-dark" type="submit" value="Atualizar">
        </form>
    </div>
@endsection