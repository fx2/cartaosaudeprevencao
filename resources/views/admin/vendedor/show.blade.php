@extends('adminlte::page')

@section('title', "Detalhes do vendedor {$vendedor->name}")

@section('content_header')
    <h1>Detalhes do vendedor <b>{{ $vendedor->name }}</b></h1>
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
            </form>
        </div>
    </div>
@endsection
