@extends('adminlte::page')

@section('title', 'Vendedores')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('vendedores.index') }}" class="active">Vendedores</a></li>
    </ol>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Vendedores <a href="{{ route('vendedores.create') }}" class="btn btn-dark">Adicionar</a></h1>
        </div>
        <div class="card-body">
            <table id="vendedor" class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>CPF</th>
                        <th width="270">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vendedores as $v)
                        <tr>
                            <td>
                                {{ $v->name }}
                            </td>
                            <td>
                                {{ $v->email }}
                            </td>
                            <td>
                                {{ $v->document }}
                            </td>
                            <td style="width=10px;">
                                <div class="row">
                                    <a href="{{ route('vendedores.edit', $v->id) }}" class="btn btn-info mr-1">Editar</a>
                                    <a href="{{ route('vendedores.show', $v->id) }}" class="btn btn-warning mr-1">Ver</a>
                                    <button type="button" class="btn btn-danger mr-1 btnDeletar" data-id="{{ $v->id }}" >Deletar</i></button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="http://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
@stop


@section('js')
    <script src="http://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script>
        tblVendedor = $("#vendedor").DataTable({
            rowReorder: true,
            lengthMenu:[25,50,100],
            columnDefs: [
                { orderable: true, className: 'reorder', targets: 0 },
                { orderable: false, targets: '_all' }
            ],
            "language": {
                "decimal": "",
                "emptyTable": "Nenhum conteúdo disponível na tabela",
                "info": "Mostrando _START_ até _END_ de _TOTAL_ itens",
                "infoEmpty": "Mostrando 0 até 0 de 0 itens",
                "infoFiltered": "(Mostrando _MAX_ itens)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ itens",
                "loadingRecords": "Carregando...",
                "processing": "Processando...",
                "search": "Pesquisar:",
                "zeroRecords": "Nenhum item encontrado",
                "paginate": {
                    "first": "Primeiro",
                    "last": "Último",
                    "next": "Próximo",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                }
            }
        });

        $(document).ready(function () {
            $('#vendedor tbody').on('click', '.btnDeletar', function () {
                var _this = this;
                swal({
                    title: "Você tem certeza?",
                    text: "Você realmente deseja deletar?",
                    icon: "warning",
                    dangerMode: true,
                    buttons: [
                        "Cancelar", "Sim, deletar"
                    ],
                }).then(function (result) {
                    if (result) {
                        $.ajax({
                            url: "{{url('admin/vendedores/deletar')}}",
                            type: 'POST',
                            data: {
                                id: $(_this).attr('data-id')
                            },
                            dataType: 'JSON',
                            success: function (result) {
                                if (result == 1) {
                                    swal({
                                        title: "Deletado com sucesso",
                                        icon: "success"
                                    });
                                    $(_this).closest('tr').remove();
                                } else {
                                    swal({
                                        title: "Erro ao deletar",
                                        icon: "error"
                                    });
                                }
                            },
                            error: function (result) {
                                swal({
                                    title: "Erro ao deletar",
                                    text: result.responseJSON.message,
                                    icon: "error"
                                });
                            }
                        });
                    }
                });
            });
        })
    </script>
@endsection
