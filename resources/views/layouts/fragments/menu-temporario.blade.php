@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="col-md-4">
    <div class="card">
        <div class="card-header">{{ __('Menu') }}</div>
        <div class="card-body">
            <a href="{{ route('textocontrato.index') }}">{{ __('Termos') }}</a>
            <br>
            <a href="{{ route('textoconcluircompra.index') }}">{{ __('Concluir compra') }}</a>
        </div>
    </div>
</div>