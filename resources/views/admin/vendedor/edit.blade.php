@extends('adminlte::page')

@section('title', "Editar o vendedor {$vendedor->name}")

@section('content_header')
    <h1>Editar o vendedor {{ $vendedor->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('vendedores.update', $vendedor->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.vendedor._partials.form')
            </form>
        </div>
    </div>
@endsection
