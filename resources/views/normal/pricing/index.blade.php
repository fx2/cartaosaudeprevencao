@extends('layouts.appfora')
<link rel="stylesheet" href="{{ asset('css/campanha.css') }}">

@section('content')
@include('layouts/fragments/banner-familia')
<div class="container">
    <div class="row mb-5">
        <!-- Pricing Tables -->  
        <section id="our-pricing-two" class="padding">
            <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12 text-center">
                    <div class="heading-title">
                        <span>Seu Cartão de Saúde</span>
                        <h2 class="darkcolor bottom30">Peça aqui o seu</h2>
                        <p>Reunimos em um único Cartão de Desconto, saúde, educação, entretenimento, entre outros diversos segmentos. Buscamos a disponibilidade de descontos e benefícios em todas às suas necessidades.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="price-table top60">
                        <h3 class="bottom20 darkcolor">Bronze</h3>
                        <p>Cobertura em todos os atendimentos da clínica filiada</p>
                        <div class="ammount">
                        <h2 class="defaultcolor"><i class="fa fa-"></i> 27.99 <span class="dur">/ mês</span></h2>
                        </div>
                        <ul class="top20">
                        <li><span>Acupuntura</span></li>
                        <li><span>Colpocospia</span></li>
                        <li><span>Consultas Médicas</span></li>
                        <li><span>Dentistas</span></li>
                        <li class="support"><span>Exames de Imagens</span></li>
                        <li class="support"><span>Exames Laboratoriais</span></li>
                        <li class="support"><span>E muito mais</span></li>
                        </ul>
                        <div class="clearfix"></div>
                        <a href="{{ route('campanha.create', ['plano' => $results[0] ]) }}" class="button btnprimary top50">Peça agora</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="price-table active top60">
                        <h3 class="bottom20 darkcolor">Prata</h3>
                        <p>Cobertura em todos os atendimentos da clínica filiada + Entretenimento</p>
                        <div class="ammount">
                        <h2 class="defaultcolor"><i class="fa fa"></i> 59.99 <span class="dur">/ mês</span></h2>
                        </div>
                        <ul class="top20">
                        <li><span>Rede Credenciada</span></li>
                        <li><span>Fisioterapia</span></li>
                        <li><span>Fonoaudiologo</span></li>
                        <li><span>Ultrassom</span></li>
                        <li><span>Podologis</span></li>
                        <li><span>+ Entretenimento Kids</span></li>
                        <li><span>Paramount</span></li>
                        </ul>
                        <div class="clearfix"></div>
                        <a href="{{ route('campanha.create', ['plano' => $results[1] ]) }}" class="button btnsecondary top50">Peça Agora </a>
                    </div>
                </div>
            </div>
            </div>
        </section>
 <!--Pricing Tables ends-->
    </div>
</div>

@endsection

@push('js')

@endpush