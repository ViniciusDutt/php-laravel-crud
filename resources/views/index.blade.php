@extends('templates.template')

@section('content')
    <div class="d-flex justify-content-end mb-2 px-0 mt-5">
        <div class="col-4 d-flex justify-content-end">
            <a class="d-flex btn btn-light align-middle me-2" href="{{url("client/create")}}">Adicionar <i class="ms-2 bi bi-plus-square"></i></a>
            
                <form action="{{url('/client/search')}}" method="get">
                    <div class="input-group">
                    <input type="search" name="query" class="form-control border-light outline-none" placeholder="Digite sua busca">
                    <button class="btn btn-light align-middle" type="submit" id="button-addon2"><i
                            class="bi bi-search"></i></button>
                        </div>
                </form>
            
        </div>
    </div>
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Gênero</th>
                <th scope="col">Idade</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">CEP</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Sigla</th>
                <th scope="col">País</th>
                <th scope="col">Cartão</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($client as $cli)
                <tr class="align-middle">
                    <th scope="row">{{$cli->id}}</th>
                    <td>{{$cli->nome}}</td>
                    <td>{{$cli->genero}}</td>
                    <td>{{$cli->idade}}</td>
                    <td>{{$cli->telefone}}</td>
                    <td>{{$cli->endereco}}</td>
                    <td>{{$cli->cep}}</td>
                    <td>{{$cli->cidade}}</td>
                    <td>{{$cli->estado}}</td>
                    <td>{{$cli->sigla}}</td>
                    <td>{{$cli->pais}}</td>
                    <td>{{$cli->cartao}}</td>
                    <td>{{$cli->email}}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item d-flex justify-content-between" href="{{url("client/$cli->id/edit")}}">Editar<i
                                            class="bi bi-pencil-fill"></i></a></li>
                                <li>
                                    <form action="{{url("client/$cli->id")}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item d-flex justify-content-between text-danger">
                                            Deletar
                                            <i class="bi bi-trash-fill"></i></a>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{$client->links()}}
@endsection
