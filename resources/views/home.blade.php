@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @include('layouts/fragments/menu-temporario')

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{ __('Você está logado no sistema!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
