@extends('layouts.appfora')

@section('content')
<div data-spy="scroll" data-target=".navbar" data-offset="90">

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">

        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <header class="site-header">
        <nav class="navbar navbar-expand-lg boxed-nav static-nav">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logo_saude.png') }}" alt="logo">
                </a>
                <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#xenav">
                    <span> </span>
                    <span> </span>
                    <span> </span>
                </button>
                <div class="collapse navbar-collapse" id="xenav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link pagescroll" href="#rev_arrows">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-feature">Cartão</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-team">Benefícios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-pricings">Planos</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-testimonial">Unidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-blog">Blog</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#contactus">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!--side menu open button-->
            <a href="javascript:void(0)" class="d-none d-lg-inline-block sidemenu_btn" id="sidemenu_toggle">
                <span></span> <span></span> <span></span>
            </a>
        </nav>

        <!-- side menu -->
        <div class="side-menu">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i><i></i></span>
                <nav class="side-nav">
                    <ul class="navbar-nav w-100">
                        <li class="nav-item active">
                            <a class="nav-link pagescroll" href="#rev_arrows">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-feature">Cartão</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-team">Benefícios</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-pricings">Planos</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-testimonial">Unidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#our-blog">Blog</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link pagescroll" href="#contactus">Contato</a>
                        </li>
                    </ul>
                </nav>

                <div class="side-footer w-100">
                    <ul class="social-icons-simple white top40">
                        <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i> </a> </li>
                        <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i> </a> </li>
                    </ul>
                    <p class="whitecolor">&copy; 2020 Cartão Saúde Prevenção.</p>
                </div>
            </div>
        </div>
        <a id="close_side_menu" href="javascript:void(0);"></a>
        <!-- End side menu -->
    </header>
    <!-- header -->


    <!--Main Slider-->
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
        <!-- START REVOLUTION SLIDER 5.4.1 fullwidth mode -->
        <div id="rev_arrows" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE  -->
                <li data-index="rs-first" data-transition="fadeout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="images/atendimento_vd.png" data-rotate="0" data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/atendimento_vd.png') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-50','-50']" data-width="none" data-height="none" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="1000" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-xlight whitecolor text-center">Prestações de serviços e produtos</h1>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="1500" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize fontbold whitecolor text-center">Consultas médicas</h1>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="2000" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="whitecolor font-light text-center">Descontos e Benefícios</h4>
                    </div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-second" data-transition="fadetotopfadefrombottom" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="1500" data-thumb="{{ asset('images/exames_cartao.png') }}">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/exames_cartao.png') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-50','-50']" data-width="none" data-height="none" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="1000" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-xlight whitecolor text-center">Rede com os </h1>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="1500" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize fontbold whitecolor text-center">melhores profissionais</h1>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="2000" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="whitecolor font-light text-center"></h4>
                    </div>
                </li>

                <!-- SLIDE  -->
                <li data-index="rs-third" data-transition="zoomout" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="{{ asset('images/cartaodetodos.png') }}">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('images/cartaodetodos.png') }}" alt="" data-bgposition="center center" data-ease="Linear.easeNone" data-rotatestart="0" data-bgparallax="10" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-50','-50']" data-width="none" data-height="none" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="1000" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize font-xlight whitecolor text-center">Clínicas Médicas</h1>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" data-width="none" data-height="none" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="1500" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h1 class="text-capitalize fontbold whitecolor text-center">Pronto Atendimento</h1>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['70','70','70','70']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-textAlign="['center','center','center','center']" data-responsive_offset="on" data-start="2000" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h4 class="whitecolor font-light text-center">Grande Rede Credenciada</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--Main Slider ends -->

    <!--Some Services-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="services-slider" class="owl-carousel">
                    <div class="item">
                        <div class="service-box">
                            <span class="bottom25"><i class="fa fa-heartbeat"></i></span>
                            <h4 class="bottom10"><a href="javascript:void(0)">Vantanges</a></h4>
                            <p> Economize seu dinheiro com o nosso cartão de descontos que te dará redução
                                nos valores em diversos segmentos, seja em prestações de serviços ou produtos garantindo o
                                melhor preço e qualidade sempre.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <span class="bottom25"><i class="fa fa-plus-square"></i></span>
                            <h4 class="bottom10"><a href="javascript:void(0)">Atendimento</a></h4>
                            <p>Criamos uma rede credenciada que disponibilizará diversos descontos e
                                benefícios para você valorizar mais ainda o seu dinheiro. Trabalhamos com valores populares
                                mantendo a qualidade e eficiência.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <span class="bottom25"><i class="fa fa-support"></i></span>
                            <h4 class="bottom10"><a href="javascript:void(0)">Menor Preço</a></h4>
                            <p>Não é preciso esperar para começar a economizar e acessar serviços e produtos
                                exclusivos. Ao concluir sua adesão, você já pode utilizar toda a Rede Credenciada e solicitar seus
                                descontos e benefícios.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <span class="bottom25"><i class="fa fa-edit"></i></span>
                            <h4 class="bottom10"><a href="javascript:void(0)">Sem carência</a></h4>
                            <p>Atendimento personalizado, humanizado e eficiente. Colocamos o bem-estar
                                de nossos clientes em primeiro lugar, por isso, buscamos parcerias sérias que manterão o nosso
                                alto padrão de qualidade em atender você e sua família.</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="service-box">
                            <span class="bottom25"><i class="fa fa-stethoscope"></i></span>
                            <h4 class="bottom10"><a href="javascript:void(0)">Exames</a></h4>
                            <p> Buscamos seriedade e excelência em nossas ações para manter nossos clientes
                                satisfeitos. Temos o objetivo de sempre nos reinventarmos e atualizarmos para proporcionar
                                experiências incríveis em todos os setores.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Some Services ends-->

    <!--Some Feature -->
    <section id="our-feature" class="padding_bottom padding_top_half single-feature">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 text-md-left text-center">
                    <div class="heading-title heading_space">
                        <span>Faça sua adesão</span>
                        <h2 class="darkcolor bottom30">Cartão Saúde Prevenção</h2>
                    </div>
                    <p class="bottom35">Visando o alto padrão de vida do futuro, o CARTÃO SAÚDE PREVENÇÃO pensou em você, sua
                        família e sua empresa, desenvolvendo benefícios, descontos e prestações de serviços acessíveis
                        e com qualidade. Na contemporaneidade e de acordo com o contexto da saúde brasileira é de
                        extrema importância contemplar assistência privada, cuja tenha o compromisso de um cuidado
                        integrado à saúde. A expectativa de vida se torna cada vez maior, trazendo maiores
                        preocupações e cuidados em todos os estágios da vida. Contar com a assistência do SAÚDE
                        PREVENÇÃO é contar com mais segurança, adoecer menos, agilizar consultas, exames,
                        tratamentos e acessar descontos e benéficos em todos os setores comerciais da redondeza.
                        Nossos clientes contarão com atendimentos exclusivos, personalizados e com muita excelência
                        para proporcionarmos experiências incríveis e satisfatórias.</p>
                    <!-- <a href="http://cartaosaudeprevencao.com.br/site/campanha?fbclid=IwAR1huvkzC_WUPTtLQTFYD83ZoY17yD5SelNNkdiw2LmSCUYHFmISwRn8-N4" class="button btnsecondary ">Quero meu cartão</a> -->
                    <a href="{{ route('pricing.index') }}" class="button btnsecondary ">Quero meu cartão</a>
                </div>
                <div class="col-md-6 col-sm-5">
                    <div class="image top50"><img alt="SEO" src="{{ asset('images/cardiologista_cartaosaudeprevencao.png') }}"></div>
                </div>
            </div>
        </div>
    </section>
    <!--Some Feature ends-->


    <!-- WOrk Process-->
    <section id="our-process" class="padding gradient_bg_default">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <div class="heading-title">
                        <h2 class="whitecolor">Cartão de vantagens<span class="fontregular"> para sua saúde</span> </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="process-wrapp">
                    <li class="whitecolor">
                        <span class="pro-step bottom20">01</span>
                        <p class="fontbold bottom25">QUERO MEU CARTÃO</p>
                        <p>Preencha o formulário e aguarde nosso
                            contato ou ligue agora mesmo em nossa central de atendimento (telefones disponíveis
                            no botão “CONTATOS”)</p>
                    </li>
                    <li class="whitecolor">
                        <span class="pro-step bottom20">02</span>
                        <p class="fontbold bottom25">VANTANGES</p>
                        <p>Após esclarecer todas as dúvidas e entender todas as vantagens, você pode vir até a
                            nossa sede ou agendar a visita de um consultor próprio do cartão a sua residência para
                            concluir sua adesão</p>
                    </li>
                    <li class="whitecolor">
                        <span class="pro-step bottom20">03</span>
                        <p class="fontbold bottom25">BENEFÍCIOS</p>
                        <p>Ao estar presentemente com um de nossos representantes, conheça todos os benefícios
                            e descontos que nossa rede conveniada pode disponibilizar a você.</p>
                    </li>
                    <li class="whitecolor">
                        <span class="pro-step bottom20">04</span>
                        <p class="fontbold bottom25">CONTRATO</p>
                        <p>Com o contrato em mãos, o próximo passo é solicitar o cartão de BENEFICIÁRIO TITULAR
                            e dos DEPENDENTES para acessarem os descontos e benefícios</p>
                    </li>
                    <li class="whitecolor">
                        <span class="pro-step bottom20">05</span>
                        <p class="fontbold bottom25">AGENDAMENTO</p>
                        <p>Agende consultas, exames, procedimentos. Faça compras em nossos comércios
                            conveniados ... Use toda a rede e economize muito sem diminuir a qualidade garantida
                            pelo nosso cartão</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--WOrk Process ends-->

    <!-- Our Team-->
    <section id="our-team" class="padding bglight">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12 text-center">
                    <div class="heading-title">
                        <span>Especialidades</span>
                        <h2 class="darkcolor bottom20">Atendimento</h2>
                        <p class="heading_space">Com o Cartão Saúde Prevenção você terá acesso a descontos de diversos comércios, instituições educacionais, clinicas e inúmeros benefícios com muita agilidade e qualidade. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="ourteam-slider" class="owl-carousel">
                        <div class="item">
                            <div class="team-box single">
                                <div class="image">
                                    <img src="{{ asset('images/toxicologista.png') }}" alt="">
                                </div>
                                <div class="team-content gradient_bg whitecolor">
                                    <h3>Toxicológico</h3>
                                    <p class="bottom40">O Exame toxicológico de larga janela de detecção é um exame indolor</p>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-box single">
                                <div class="image">
                                    <img src="{{ asset('images/checkup.png') }}" alt="">
                                </div>
                                <div class="team-content gradient_bg_default whitecolor">
                                    <h3>Check-up</h3>
                                    <p class="bottom40">O check-up atua de forma preventiva, auxiliando na detecção de possíveis alterações no organismo ou doenças.</p>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="team-box single">
                                <div class="image">
                                    <img src="{{ asset('images/covid19.png') }}" alt="">
                                </div>
                                <div class="team-content gradient_bg whitecolor">
                                    <h3>Teste de COVID-19</h3>
                                    <p class="bottom40">Teste realizado nas clínicas que temos parcerias com valores acessíveis.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Team ends-->

    <!-- Video Click -->
    <!--
<section id="video-bg" class="video-parallax padding_top">
   <div class="container">
      <div class="row">
         <div class="col-md-7 col-sm-7">
            <div class="heading-title text-md-left text-center padding_bottom">
               <span>We have an excellent story</span>
               <h2 class="fontregular bottom20 darkcolor">Watch Our Video</h2>
               <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut laboret dolore magna aliquyam erat, sed diam voluptua laboret dolore magna.</p>
               <a href="#contactus" class="button btnprimary top20 pagescroll">Buy Now</a>
            </div>
         </div>
         <div class="col-md-5 col-sm-5 padding_bottom">
            <div class="image hover-effect">
               <img alt="video img" src="images/video-click.jpg">
               <a data-fancybox href="https://www.youtube.com/watch?v=GhvD7NtUT-Q&autoplay=1&rel=0&controls=1&showinfo=0" class="button-play fontmedium"><i class="fa fa-play"></i></a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Video Click-->

    <!--Gallery-->
    <!--
<section id="our-portfolio" class="bglight padding">
   <div class="container-fluid">
    <div class="row">
         <div class="col-md-8 offset-md-2 col-sm-12 text-center">
            <div class="heading-title">
               <span>Portfolio Designs</span>
               <h2 class="darkcolor bottom10">Creative Work</h2>
               <p class="heading_space">Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>
               <div id="flat-filters" class="cbp-l-filters dark bottom30">
               <div data-filter="*" class="cbp-filter-item">
                  <span>All</span>
               </div>
               <div data-filter=".web" class="cbp-filter-item">
                  <span>web</span>
               </div>
               <div data-filter=".print" class="cbp-filter-item">
                  <span>Print</span>
               </div>
               <div data-filter=".graphic" class="cbp-filter-item">
                  <span>Graphic</span>
               </div>
               <div data-filter=".logo" class="cbp-filter-item">
                  <span>Logo</span>
               </div>
            </div>
            </div>
         </div>
      </div>
      <div id="flat-gallery" class="cbp">
         <div class="cbp-item web logo">
            <img src="images/gallery-flat7.jpg" alt="">
            <div class="overlay center-block whitecolor">
               <a class="plus" data-fancybox="gallery" href="images/gallery-flat7.jpg"></a>
               <h4 class="top30">Wood Work</h4>
               <p>Small Portfolio Detail Here</p>
            </div>
         </div>
         <div class="cbp-item graphic print">
            <img src="images/gallery-flat8.jpg" alt="">
            <div class="overlay center-block whitecolor">
               <a class="plus" data-fancybox="gallery" href="images/gallery-flat8.jpg"></a>
               <h4 class="top30">Wood Work</h4>
               <p>Small Portfolio Detail Here</p>
            </div>
         </div>
         <div class="cbp-item logo graphic">
            <img src="images/gallery-flat9.jpg" alt="">
            <div class="overlay center-block whitecolor">
               <a class="plus" data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&autoplay=1&rel=0&controls=0&showinfo=0"></a>
               <h4 class="top30">Wood Work</h4>
               <p>Small Portfolio Detail Here</p>
            </div>
         </div>
         <div class="cbp-item print">
            <img src="images/gallery-flat10.jpg" alt="">
            <div class="overlay center-block whitecolor">
               <a class="plus" data-fancybox="gallery" href="images/gallery-flat10.jpg"></a>
               <h4 class="top30">Wood Work</h4>
               <p>Small Portfolio Detail Here</p>
            </div>
         </div>
         <div class="cbp-item logo">
            <img src="images/gallery-flat11.jpg" alt="">
            <div class="overlay center-block whitecolor">
               <a class="plus" data-fancybox="gallery" href="images/gallery-flat11.jpg"></a>
               <h4 class="top30">Wood Work</h4>
               <p>Small Portfolio Detail Here</p>
            </div>
         </div>
         <div class="cbp-item web print graphic">
            <img src="images/gallery-flat12.jpg" alt="">
            <div class="overlay center-block whitecolor">
               <a class="plus" data-fancybox="gallery" href="images/gallery-flat12.jpg"></a>
               <h4 class="top30">Wood Work</h4>
               <p>Small Portfolio Detail Here</p>
            </div>
         </div>
         <div class="cbp-item logo">
            <img src="images/gallery-flat13.jpg" alt="">
            <div class="overlay center-block whitecolor">
               <a class="plus" data-fancybox="gallery" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk&autoplay=1&rel=0&controls=0&showinfo=0"></a>
               <h4 class="top30">Wood Work</h4>
               <p>Small Portfolio Detail Here</p>
            </div>
         </div>
      </div>
      <div class="text-center">
         <a class="button btnsecondary top30" href="gallery-detail.html">View More</a>
      </div>
   </div>
</section>
<!--Gallery ends -->


    <!-- Counters -->
    <!--
<section id="funfacts" class="padding_top fact-iconic">
  <h3 class="d-none">hidden</h3>
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-sm-12">
            <div class="counter-photo margin_bottom">
              <div class="image">
                 <img alt="counters" src="images/counter-img.jpg">
              </div>
            </div>
         </div>
         <div class="col-md-6 col-sm-12">
            <div class="row">
               <div class="col-md-12 col-sm-12 icon-counters table-display darkcolor top30 bottom30">
                  <div class="img-icon bottom15">
                     <i class="fa fa-smile-o"></i>
                  </div>
                  <div class="counters">
                     <span class="count_nums" data-to="101" data-speed="2500"> </span> <i class="fa fa-plus"></i>
                  </div>
                  <p class="title">Satisfied customers</p>
               </div>
               <div class="col-md-12 col-sm-12 icon-counters table-display darkcolor top30 bottom30">
                  <div class="img-icon bottom15">
                     <i class="fa fa-handshake-o"> </i>
                  </div>
                  <div class="counters">
                     <span class="count_nums" data-to="501" data-speed="2500"> </span> <i class="fa fa-plus"></i>
                  </div>
                  <p class="title">Completed consultations</p>
               </div>
               <div class="col-md-12 col-sm-12 icon-counters table-display darkcolor top30 bottom30">
                  <div class="img-icon bottom15">
                     <i class="fa fa-user-circle-o"></i>
                  </div>
                  <div class="counters">
                     <span class="count_nums" data-to="371" data-speed="2500"> </span> <i class="fa fa-plus"></i>
                  </div>
                  <p class="title">Carried out training</p>
               </div>
               <div class="col-md-12 col-sm-12 icon-counters table-display darkcolor top30 bottom30">
                  <div class="img-icon bottom15">
                     <i class="fa fa-support"></i>
                  </div>
                  <div class="counters">
                     <span class="count_nums" data-to="9782" data-speed="2500"> </span> <i class="fa fa-plus"></i>
                  </div>
                  <p class="title">Support Tickets</p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Counters ends-->

    <!-- Mobile Apps -->
    <!--<section id="our-apps" class="bg-apps padding">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 text-center">
            <div class="heading-title">
               <span>ADQUIRA SEU CARTÃO</span>
               <h2 class="whitecolor">Mais saúde para sua família</h2>
               <p class="whitecolor bottom40">com preço que cabe no seu bolso </p>
               <a class="button btnwhite top10" href="#.">Adesão </a> &nbsp;
               <a class="button btnwhite top10" href="#.">Fale conosco </a>
            </div>
         </div>
      </div>
   </div>
</section>                                                                                                                             <!--Mobile Apps ends-->

    <!-- Pricing Tables -->
    <section id="our-pricings" class="padding bglight">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 col-sm-12 text-center">
                    <div class="heading-title">
                        <span>Nossos Planos </span>
                        <h2 class="darkcolor bottom30">CARTÃO SAÚDE PREVENÇÃO</h2>
                        <p>
                            Com ciência de nosso cenário econômico presenciado hoje, temos o grande compromisso com
                            a população referente à preços. É uma forma de garantir e incentivar de fato a acessibilidade à
                            saúde preventiva, para que isso não seja um obstáculo que impeça todos de terem os cuidados
                            necessários com valores que cabem em seus bolsos e economizarem nas mais diversificadas
                            compras e acessos a serviços. Lembrando que o cartão expandirá a cobertura para seus PAIS,
                            FILHOS E CONJUGUÊ. E ainda existe a possibilidade de colocar adicionais como primos, sobrinhos
                            e netos ... Assim, você não deixa de cuidar de quem você ama. </p>




                    </div>
                </div>
            </div>
            <!--  <div class="row three-col-pricing">
         <div class="col-lg-4 col-sm-12">
            <div class="price-table top60">
               <h3 class="bottom20 darkcolor">Plano Individual</h3>
               <p>Acesso aos atendimento somente para uma pessoa</p>
               <div class="ammount">
                  <h2 class="defaultcolor"><i class="fa fa-real"></i> 22,99 <span class="dur"> 12 Vezes</span></h2>
               </div>
               <ul class="top20">
                   <li><span>1 Pessoa</span></li>
                  <li><span>Consultas</span></li>
                  <li><span>Exames</span></li>
                  <li><span>Pronto Atendimento CAP</span></li>
               </ul>
               <div class="clearfix"></div>
               <a href="javascript:void(0)" class="button btnprimary top50">Contratar</a>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12">
            <div class="price-table active top60">
               <h3 class="bottom20 darkcolor">Plano Familiar</h3>
               <p>Sua família com mais saúde e pronto atendimento</p>
               <div class="ammount">
                  <h2 class="defaultcolor"><i class="fa fa-real"></i> 79,90 <span class="dur">12 vezes</span></h2>
               </div>
               <ul class="top20">
                  <li><span>4 pessoas</span></li>
                  <li><span>Consultas</span></li>
                  <li><span>Exames</span></li>
                  <li><span>Pronto Atendmento CAP</span></li>
                 
               </ul>
               <div class="clearfix"></div>
               <a href="javascript:void(0)" class="button btnsecondary top50">Contratar</a>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12">
            <div class="price-table top60">
               <h3 class="bottom20 darkcolor">Plano Empresarial</h3>
               <p>Seus funcionários com qualidade de vida e saúde</p>
               <div class="ammount">
                  <h2 class="defaultcolor"><i class="fa fa-real"></i> 19,90 <span class="dur">12 vezes</span></h2>
               </div>
               <ul class="top20">
                  <li><span>Acima de 10 pessoas</span></li>
                  <li><span>Consultas</span></li>
                  <li><span>Exames</span></li>
                  <li><span>Pronto Atendimento CAP</span></li>
                
               </ul>
               <div class="clearfix"></div>
               <a href="javascript:void(0)" class="button btnprimary top50">Contratar </a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Pricing Tables ends-->


            <!-- Testimonials -->
            <!--
<section id="our-testimonial" class="padding testimonial-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-sm-8">
            <div id="testimonial-quote" class="owl-carousel">
               <div class="item">
                  <div class="testimonial-quote whitecolor">
                    <h3 class="bottom30">If you are a small business and you are interested in small rebranding then this is a perfect plan for you</h3>
                     <h6>David Raleway</h6>
                     <small>CEO, XeOne</small>
                  </div>
               </div>
               <div class="item">
                  <div class="testimonial-quote whitecolor">
                    <h3 class="bottom30">If you are a small business and you are interested in small rebranding then this is a perfect plan for you</h3>
                     <h6>Jack Kaclics</h6>
                     <small>Designer, XeOne</small>
                  </div>
               </div>
               <div class="item">
                  <div class="testimonial-quote whitecolor">
                    <h3 class="bottom30">We show you our professional achievements in numbers, which show the acquired skills</h3>
                     <h6>Stephen Jhon</h6>
                     <small>CEO, XeOne</small>
                  </div>
               </div>
            </div>
            <div id="owl-thumbs" class="owl-dots">
               <div class="owl-dot active"><img src="images/testimonial-1.jpg" alt=""></div>
               <div class="owl-dot"><img src="images/testimonial-2.jpg" alt=""></div>
               <div class="owl-dot"><img src="images/testimonial-3.jpg" alt=""></div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Testimonials Ends-->

            <!-- Partners -->
            <!--
<section id="logos" class="padding">
   <div class="container">
     <h3 class="invisible">Parceiros</h3>
      <div class="row">
         <div class="col-md-12 col-sm-12">
            <div id="partners-slider" class="owl-carousel">
               <div class="item">
                  <div class="logo-item"> <img alt="" src="images/logo-1.png"></div>
               </div>
               <div class="item">
                  <div class="logo-item"><img alt="" src="images/logo-2.png"></div>
               </div>
               <div class="item">
                  <div class="logo-item"><img alt="" src="images/logo-3.png"></div>
               </div>
               <div class="item">
                  <div class="logo-item"><img alt="" src="images/logo-4.png"></div>
               </div>
               <div class="item">
                  <div class="logo-item"><img alt="" src="images/logo-5.png"></div>
               </div>
               <div class="item">
                  <div class="logo-item"><img alt="" src="images/logo-1.png"></div>
               </div>
               <div class="item">
                  <div class="logo-item"><img alt="" src="images/logo-2.png"></div>
               </div>
               <div class="item">
                  <div class="logo-item"><img alt="" src="images/logo-3.png"></div>
               </div>
               <div class="item">
                  <div class="logo-item"><img alt="" src="images/logo-4.png"></div>
               </div>
               <div class="item">
                  <div class="logo-item"><img alt="" src="images/logo-5.png"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Partners Ends-->


            <!-- Our Blogs -->
            <!--
<section id="our-blog">
   <div class="container">
      <div class="row">
            <div class="col-md-4">
            <div class="news_item shadow text-center">
               <a class="image" href="blog-detail.html">
                  <img src="images/blog-measonry5.jpg" alt="Latest News" class="img-responsive">
               </a>
               <div class="news_desc">
                  <h3 class="text-capitalize font-light darkcolor"><a href="blog-detail.html">Next Large Social Network</a></h3>
                  <ul class="meta-tags top20 bottom20">
                     <li><a href="#."><i class="fa fa-calendar"></i>Feb 14</a></li>
                     <li><a href="#."> <i class="fa fa-user-o"></i> peter </a></li>
                     <li><a href="#."><i class="fa fa-comment-o"></i>5</a></li>
                  </ul>
                  <p class="bottom35">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                  <a href="blog-detail.html" class="button btnprimary">Read more</a>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="news_item shadow text-center">
               <a class="image" href="blog-detail.html">
                  <img src="images/blog-measonry3.jpg" alt="Latest News" class="img-responsive">
               </a>
               <div class="news_desc">
                  <h3 class="text-capitalize font-light darkcolor"><a href="blog-detail.html">Next Large Social Network</a></h3>
                  <ul class="meta-tags top20 bottom20">
                     <li><a href="#."><i class="fa fa-calendar"></i>Feb 16</a></li>
                     <li><a href="#."> <i class="fa fa-user-o"></i> </a></li>
                     <li><a href="#."><i class="fa fa-comment-o"></i>5 </a></li>
                  </ul>
                  <p class="bottom35">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                  <a href="blog-detail.html" class="button btnprimary">Read more</a>
               </div>
            </div>
         </div>
         
         <div class="col-md-4">
            <div class="news_item shadow text-center">
               <a class="image" href="blog-detail.html">
                  <img src="images/blog-measonry5.jpg" alt="Latest News" class="img-responsive">
               </a>
               <div class="news_desc">
                  <h3 class="text-capitalize font-light darkcolor"><a href="blog-detail.html">Next Large Social Network</a></h3>
                  <ul class="meta-tags top20 bottom20">
                     <li><a href="#."><i class="fa fa-calendar"></i>Feb 14</a></li>
                     <li><a href="#."> <i class="fa fa-user-o"></i> peter </a></li>
                     <li><a href="#."><i class="fa fa-comment-o"></i>5</a></li>
                  </ul>
                  <p class="bottom35">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry</p>
                  <a href="blog-detail.html" class="button btnprimary">Read more</a>
               </div>
            </div>
         </div>
         
      </div>
   </div>
</section>
<!--Our Blogs Ends-->


            <!-- Contact US -->
            <section id="contactus" class="padding_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="heading-title heading_space wow fadeInUp" data-wow-delay="300ms">
                                <span>Contatos</span>
                                <h2 class="darkcolor">Fale com Cartão Saúde Prevenção</h2>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 margin_bottom wow fadeInUp" data-wow-delay="350ms">
                            <p>Seja bem vindo a qualidade de atendimento em saúde com menor custo do mercado</p>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 our-address top40">
                                    <h5 class="bottom25">Endereço</h5>
                                    <p class="bottom15">Rua João Vagnotti, Nº 352. Centro, Itaquaquecetuba/SP – Atrás das Casas Bahia </p>
                                    <a class="pickus" href="#." data-text="Get Directions"></a>
                                </div>
                                <div class="col-md-6 col-sm-6 our-address top40">
                                    <h5 class="bottom25">Telefones</h5>
                                    <p class="bottom15">Agendamento:
                                    <p> (11) 4730-0576 / (11) 93505-4410</p> <span class="block">
                                        Whatsapp: (11) 93505-4410
                                    </span> </p>
                                    <a class="pickus" href="#." data-text="Call Us">Fale agora</a>
                                </div>
                                <div class="col-md-6 col-sm-6 our-address top40">
                                    <h5 class="bottom25">E-mail</h5>
                                    <p class="bottom15">Agendamento: contato@cartaosaudeprevencao.com.br
                                    <p> <span class="block">Sac: contato@cartaoprevencaosaude.com.br</span> </p>
                                    <a class="pickus" href="#." data-text="Send a Message">Envie</a>
                                </div>
                                <div class="col-md-6 col-sm-6 our-address top40">
                                    <h5 class="bottom25">Meu Cartão</h5>
                                    <p class="bottom15">Cartão: cartao@cartãosaudeprevencao.com.br
                                    <p> <span>Financeiro: financeiro@cartaosaudeprevencao.com.br </span> </p>
                                    <a class="pickus" href="#." data-text="Open a Ticket">Fale Agora</a>
                                </div>
                            </div>
                        </div>
                        <!--  <div class="col-md-6 col-sm-12 margin_bottom">
            <form class="getin_form wow fadeInUp" data-wow-delay="400ms" onsubmit="return false;">
               <div class="row">

                  <div class="col-sm-12" id="result"></div>

                  <div class="col-md-6 col-sm-6">
                     <div class="form-group bottom35">
                        <input class="form-control" type="text" placeholder="First Name:" required id="first_name" name="first_name">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group bottom35">
                        <input class="form-control" type="text" placeholder="Last Name:" required id="last_name" name="last_name">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group bottom35">
                        <input class="form-control" type="email" placeholder="Email:" required id="email" name="email">
                     </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <div class="form-group bottom35">
                        <input class="form-control" type="tel" placeholder="Phone:" id="phone" name="phone">
                     </div>
                  </div>
                  <div class="col-md-12 col-sm-12">
                     <div class="form-group bottom35">
                        <textarea class="form-control" placeholder="Message" id="message" name="message"></textarea>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <button type="submit" class="button btnprimary" id="submit_btn">submit request</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   
   <!--Location Map here-->
                        {{-- <div id="src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.3510945739426!2d-46.35664108502363!3d-23.483860234721462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce7caf313bfed5%3A0x989026dca259edce!2sR.%20Lavras%2C%2099%20-%20Vila%20Zeferina%2C%20Itaquaquecetuba%20-%20SP%2C%2008576-060!5e0!3m2!1spt-BR!2sbr!4v1590158422549!5m2!1spt-BR!2sbr></div> --}}
            </section>
            <!--Contact US Ends-->

           

            <!--Google Map API-->
            <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJnKEvlwpyjXfS_h-J1Cne2fPMqeb44Mk"></script> -->
            {{-- <script src="{{ asset('js/functions.js') }}"></script> --}}

</div>

@endsection