@extends('layouts.template')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Planos mais vendidos</h5>
                            <p class="card-text"></p>
                        </div>
                        <table id="vendedor" class="table table-condensed">
                            <thead style="background-color: #8ebf2a">
                                <tr>
                                    <th class="col-md-6 text-center">Plano</th>
                                    <th class="col-md-6 text-center">Quantidade vendas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vendas as $v)
                                    <tr>
                                        <td>
                                            <strong>{{ $v->title }}</strong>
                                        </td>
                                        <td>
                                            <strong>{{ $v->qtd }}</strong>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Vendedores</h5>
                            <p class="card-text"></p>
                        </div>
                        <table id="vendedor" class="table table-condensed">
                            <thead style="background-color: #8ebf2a">
                                <tr>
                                    <th class="col-md-6 text-center">Vendedor</th>
                                    <th class="col-md-6 text-center">Quantidade vendas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vendedores as $v)
                                    <tr>
                                        <td>
                                            <strong>{{ $v->name }}</strong>
                                        </td>
                                        <td>
                                            <strong>{{ $v->qtd }}</strong>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
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