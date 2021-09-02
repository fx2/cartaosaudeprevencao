@include('admin.includes.alerts')

<div class="row mt-10">
    <div class="col-md-12">
        <div class="row">

            <div class="col-md-12">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $cliente->name ?? old('name') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>CPF:</label>
                    <input type="text" name="document" class="form-control" placeholder="CPF:" minlength="11" maxlength="11" onkeypress="return onlynumber();" value="{{ $cliente->document ?? old('document') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>E-mail:</label>
                    <input type="text" name="email" class="form-control" placeholder="E-mail:" value="{{ $cliente->email ?? old('email') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Senha acesso" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Telefone:</label>
                    <input type="text" name="telefone" class="form-control" placeholder="Telefone:" value="{{ $cliente->telefone ?? old('telefone') }}">
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>CEP:</label>
                    <input type="text" name="zipCode" id="zipCode" class="form-control" placeholder="CEP:" onblur="findCep()" value="{{ $cliente->zipCode ?? old('zipCode') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Estado:</label>
                    <input type="text" class="form-control" maxlength="2" name="state" id="endereco_state" value="{{ $cliente->state ?? old('state') }}" placeholder="Estado" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Cidade:</label>
                    <input type="text" class="form-control" name="city" value="{{ $cliente->city ?? old('city') }}" id="endereco_city" placeholder="Cidade" />
                </div>
            </div>
            <div class="col-md-4">          
                <div class="form-group">
                    <label>Bairro:</label>
                    <input type="text" class="form-control" name="neighborhood" value="{{ $cliente->neighborhood ?? old('neighborhood') }}" id="endereco_neighborhood" placeholder="Bairro" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Rua:</label>
                    <input type="text" class="form-control" name="street" value="{{ $cliente->street ?? old('street') }}" id="endereco_street" placeholder="Rua" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Número:</label>
                    <input type="text" class="form-control" name="number" value="{{ $cliente->number ?? old('number') }}" id="endereco_number" placeholder="Número" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Complemento:</label>
                    <input type="text" class="form-control" name="complement" value="{{ $cliente->complement ?? old('complement') }}" id="endereco_complement" placeholder="Complemento (NÃO É OBRIGATÓRIO)" />
                </div>
            </div>
        </div>
    </div>
</div>
<input type="hidden" class="form-control" name="idendereco" value="{{ $cliente->idendereco ?? null }}" />
<input type="hidden" class="form-control" name="idtelefone" value="{{ $cliente->idtelefone ?? null }}" />
<div class="form-group">
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('clientes.index') }}" type="button" class="btn btn-warning">Voltar</a>
</div>


@section('javascript')
    <script>
        $(document).ready(function () {
            $('#zipCode').mask('00000-000');
        });
        function onlynumber(evt) {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode( key );
            //var regex = /^[0-9.,]+$/;
            var regex = /^[0-9.]+$/;
            if( !regex.test(key) ) {
                theEvent.returnValue = false;
                if(theEvent.preventDefault) theEvent.preventDefault();
            }
        }

        function findCep(){
            const cep = $('#zipCode').val();
            $.ajax({
                type: "GET",
                url: `https://ws.apicep.com/cep/${cep}.json`,
                success: function (response) {
                    $('#endereco_street').val(response.address);
                    $('#endereco_neighborhood').val(response.district);
                    $('#endereco_city').val(response.city);
                    $('#endereco_state').val(response.state);
                }, 
            });
        }
    </script>
@endsection