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
                        <a href="{{ route('textocontrato.edit', $results->id) }}" class="btn btn-sm btn-primary">{{ __('Editar') }}</a>
                    </div>
                </div>

                <div class="card-body">
                    {!! $results->body !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
