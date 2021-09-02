@extends('layouts.template')

@section('title', 'Detalhes do vendedor')

@section('content_header')

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <ul>
                <li>
                    <strong>Plano: </strong> {{ $vendas->nomePlano }}
                </li>
                <li>
                    <strong>Quantidade vidas: </strong> {{ $vendas->qtd_vidas }}
                </li>
                <li>
                    <strong>Valor: </strong> {{ $vendas->value }}
                </li>
                @if ($vendas->vendedor)
                    <li>
                        <strong>Vendedor: </strong> {{ $vendas->vendedor }}
                    </li>
                @endif
                <li>
                    <strong>Cliente: </strong> {{ $vendas->cliente }}
                </li>
                <li>
                    <strong>CPF cliente: </strong> {{ $vendas->document }}
                </li>
                <li>
                    <strong>Telefone cliente: </strong> {{ $vendas->telefone }}
                </li>
                <li>
                    <strong>Data compra: </strong> {{ date('d/m/Y H:m:s', strtotime($vendas->data_compra)) }}
                </li>
            </ul>

            @include('admin.includes.alerts')

                <a href="{{ route('vendas.index') }}" type="button" class="btn btn-warning">Voltar</a>
        </div>
    </div>
@endsection
