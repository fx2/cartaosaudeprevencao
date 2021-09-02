@extends('layouts.template')

@section('title', 'Detalhes do vendedor')

@section('content_header')

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $vendedor->name }}
                </li>
                <li>
                    <strong>E-mail: </strong> {{ $vendedor->email }}
                </li>
                <li>
                    <strong>CPF: </strong> {{ $vendedor->document }}
                </li>
                <li>
                    <strong>Telefone: </strong> {{ $vendedor->document }}
                </li>
                <li>
                    <strong>CEP: </strong> {{ $vendedor->zipCode }}
                </li>
                <li>
                    <strong>Logradouro: </strong> {{ $vendedor->street }}
                </li>
                <li>
                    <strong>Número: </strong> {{ $vendedor->number }}
                </li>
                <li>
                    <strong>Bairro: </strong> {{ $vendedor->neighborhood }}
                </li>
                <li>
                    <strong>Cidade: </strong> {{ $vendedor->city }}
                </li>
                <li>
                    <strong>Estado: </strong> {{ $vendedor->state }}
                </li>
                <li>
                    <strong>Complemento: </strong> {{ $vendedor->complement }}
                </li>
            </ul>

            @include('admin.includes.alerts')

                <a href="{{ route('vendedores.index') }}" type="button" class="btn btn-warning">Voltar</a>
        </div>
    </div>
@endsection
