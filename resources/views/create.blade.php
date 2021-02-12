@extends('templates.template')

@section('content')
    <div class="mt-5 d-flex justify-content-center">
        
        
        <form class="bg-light p-5 d-flex flex-column justify-content-center" name="formCreate" id="formCreate" method="POST" action="{{ url('client') }}">
            @csrf
            @if (isset($errors) && count($errors) > 0)
                <div class="p-2 mb-5 bg-danger text-white rounded col-12">
                    @foreach($errors->all() as $erro)
                        {{$erro}}<br>
                    @endforeach   
                </div>
            @endif
            <div class="d-flex mb-2">
                <input class="form-control me-1" type="text" name="nome" value="" placeholder="nome" xofer>
                <select class="form-select ms-1" name="genero" id="" value="" xofer>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>
            <div class="d-flex mb-2">
                <input class="form-control me-1" type="number" name="idade" value="" placeholder="idade" xofer>
                <input class="form-control ms-1" type="text" name="telefone" value="" placeholder="tel" xofer>
            </div>
            <div class="d-flex mb-2">
                <input class="form-control" type="text" name="endereco" value="" placeholder="endereço" xofer>
            </div>
            <div class="d-flex mb-2">
                <input class="form-control me-1" type="text" name="cep" value="" placeholder="cep" xofer>
                <input class="form-control ms-1" type="text" name="cidade" value="" placeholder="cidade" xofer>
            </div>
            <div class="d-flex mb-2">
                <input class="form-control me-1" type="text" name="estado" value="" placeholder="estado" xofer>
                <input class="form-control me-1" type="text" name="sigla" value="" placeholder="sigla" xofer>
                <input class="form-control" type="text" name="pais" value="" placeholder="país" xofer>
            </div>
            <div class="d-flex mb-2"    >
                <input class="form-control" type="text" name="cartao" value="" placeholder="cartão" xofer>
            </div>
            <div class="d-flex mb-2"    >
                <input class="form-control" type="email" name="email" value="" placeholder="email" xofer>
            </div>
            
            <input class="btn btn-dark" type="submit" value="Atualizar">
        </form>

    </div>
@endsection
