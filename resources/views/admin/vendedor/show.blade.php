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
            </ul>

            @include('admin.includes.alerts')

            <form action="{{ route('vendedores.destroy', $vendedor->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> DELETAR O VENDEDOR {{ $vendedor->name }}</button>
                <a href="{{ route('vendedores.index') }}" type="button" class="btn btn-warning">Voltar</a>
            </form>
        </div>
    </div>
@endsection
