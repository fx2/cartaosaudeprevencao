@extends('adminlte::page')

@section('title', 'Cadastrar Novo Vendedor')

@section('content_header')
    <h1>Cadastrar Novo Vendedor</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('vendedores.store') }}" class="form" method="POST">
                @csrf

                @include('admin.vendedor._partials.form')
            </form>
        </div>
    </div>
@endsection

