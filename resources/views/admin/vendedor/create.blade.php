@extends('layouts.template')

@section('title', 'Cadastrar novo vendedor')

@section('content_header')

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

