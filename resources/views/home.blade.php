@extends('layouts.template')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <div class="col-md-8">
        <div class="card">

            <div class="card-body">
                {{ __('Você está logado no sistema!rrrr') }}
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@stop