@include('admin.includes.alerts')

<div class="form-group">
    <label>Nome:</label>
    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $user->name ?? old('name') }}">
</div>
<div class="form-group">
    <label>CPF:</label>
    <input type="text" name="document" class="form-control" placeholder="CPF:" maxlength="11" onkeypress="return onlynumber();" value="{{ $user->document ?? old('document') }}">
</div>
<div class="form-group">
    <label>E-mail:</label>
    <input type="text" name="email" class="form-control" placeholder="E-mail:" value="{{ $user->email ?? old('email') }}">
</div>
<div class="form-group">
    <label>Senha:</label>
    <input type="text" name="password" class="form-control" placeholder="Senha:" value="">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success">Salvar</button>
    <a href="{{ route('home') }}" type="button" class="btn btn-warning">Voltar</a>
</div>

@section('js')
    <script>
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
    </script>
@endsection