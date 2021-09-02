@extends('layouts.template')

@section('title', 'Editar cliente')

@section('content_header')

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('clientes.update', $cliente->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.cliente._partials.form')
            </form>
        </div>
    </div>
@endsection
