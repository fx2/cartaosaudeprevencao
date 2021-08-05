@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @include('layouts/fragments/menu-temporario')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <span>{{ __('Termos de contrato') }}</span>
                        <a href="{{ route('textocontrato.index') }}" class="btn btn-sm btn-info">{{ __('Voltar') }}</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('textocontrato.update', $result->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="body">Conteúdo</label>
                            <textarea class="form-control texteditortinymc" id="body" name="body" rows="6">{!! $result->body !!}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success float-right">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
