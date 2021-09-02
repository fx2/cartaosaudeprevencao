@extends('layouts.template')

@section('title', 'Detalhes do cliente')

@section('content_header')

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Nome: </strong> {{ $clientes->name }}
                </li>
                <li>
                    <strong>E-mail: </strong> {{ $clientes->email }}
                </li>
                <li>
                    <strong>CPF: </strong> {{ $clientes->document }}
                </li>
                <li>
                    <strong>Telefone: </strong> {{ $clientes->telefone }}
                </li>
                <li>
                    <strong>CEP: </strong> {{ $clientes->zipCode }}
                </li>
                <li>
                    <strong>Logradouro: </strong> {{ $clientes->street }}
                </li>
                <li>
                    <strong>Número: </strong> {{ $clientes->number }}
                </li>
                <li>
                    <strong>Bairro: </strong> {{ $clientes->neighborhood }}
                </li>
                <li>
                    <strong>Cidade: </strong> {{ $clientes->city }}
                </li>
                <li>
                    <strong>Estado: </strong> {{ $clientes->state }}
                </li>
                <li>
                    <strong>Complemento: </strong> {{ $clientes->complement }}
                </li>
            </ul>

            @include('admin.includes.alerts')

            <a href="{{ route('clientes.index') }}" type="button" class="btn btn-warning">Voltar</a>

        </div>
    </div>
@endsection
