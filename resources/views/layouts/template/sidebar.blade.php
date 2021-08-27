<div class="sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <a class="sidebar-link td-n" href="{{ url('admin') }}">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo"><img height="50px" src="{{ asset('assets/static/images/logo2.png') }}" alt=""></div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">Cartão Prevenção</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle"><a href="" class="td-n"><i class="far fa-arrow-alt-circle-left"></i></a></div>
                </div>
            </div>
        </div> 
        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item"><a class="sidebar-link" href="{{ url('admin/home') }}"><span class="icon-holder"><i class="c-green-500 fas fa-home"></i> </span><span class="title">Home</span></a></li>
            @can('isAdmin')
                <li class="nav-item"><a class="sidebar-link" href="{{ url('admin/vendedores') }}"><span class="icon-holder"><i class="c-red-500 fas fa-users"></i> </span><span class="title">Vendedor</span></a></li>
            @endcan
                    
            <li class="nav-item"><a class="sidebar-link" href="{{ route('editar-cadastro.edit', \Auth::user()->id) }}"><span class="icon-holder"><i class="c-yellow-500 fas fa-key"></i> </span><span class="title">Alterar cadastro</span></a></li>
        </ul>
    </div>
</div>
