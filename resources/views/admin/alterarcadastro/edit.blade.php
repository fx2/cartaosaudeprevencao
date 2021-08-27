@extends('layouts.template')

@section('title', 'Editar cadastro')

@section('content_header')

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('editar-cadastro.update', $user->id) }}" class="form" method="POST">
                @csrf
                @method('PUT')

                @include('admin.alterarcadastro.form')
            </form>
        </div>
    </div>
@endsection
