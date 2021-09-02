@extends('layouts.template')

@section('title', 'Vendas')

@section('content_header')

@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Vendas </h1>
        </div>
        <div class="card-body">
            <table id="vendedor" class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Quantidade vidas</th>
                        <th>Data criação</th>
                        <th width="270">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vendas as $v)
                        <tr>
                            <td>
                                {{ $v->nomePlano }}
                            </td>
                            <td>
                                {{ $v->value }}
                            </td>
                            <td>
                                {{ $v->qtd_vidas }}
                            </td>
                            <td data-order="{{ date('Y/m/d H:m:s', strtotime($v->created_at)) }}">
                                {{ date('d/m/Y', strtotime($v->created_at)) }}
                            </td>
                            <td style="width=10px;">
                                <div class="row">
                                    <a href="{{ route('vendas.show', $v->id) }}" class="btn btn-warning mr-1">Ver</a>
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

@section('javascript')
    <script>
        tblVendedor = $("#vendedor").DataTable({
            rowReorder: true,
            lengthMenu:[25,50,100],
            columnDefs: [
                { orderable: true, className: 'reorder', targets: 3},
                { orderable: false },
                { type: 'de_datetime', targets: 3 }
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
                id = $(_this).attr('data-id');
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
                            url: "{{ route('vendedores.deletar', "+id+") }}",
                            type: 'POST',
                            data: {
                                "_token": "{{ csrf_token() }}",
                                id: id
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
                                console.log(result, 77)
                                swal({
                                    title: "Erro ao deletar",
                                    text: result.responseJSON,
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
