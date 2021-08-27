@extends('layouts.template')

@section('title', 'Editar vendedor')

@section('content_header')

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
