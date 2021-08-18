@extends('layouts.appfora')

@section('content')
{{-- <div data-spy="scroll" data-target=".navbar" data-offset="90"> --}}

    {{-- <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">

        </div> --}}
    </div>
    <!--PreLoader Ends-->
    <div class="wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bg-wrap">
						<div class="row">
							<div class="col-md-6 d-flex align-items-center">
								<p class="mb-0 phone pl-md-2">
									<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> (11) 4730-0576</a> 
									<a href="#"><span class="fa fa-paper-plane mr-1"></span> atendimento@cartaosaudeprevencao.com.br</a>
								</p>
							</div>
							<div class="col-md-6 d-flex justify-content-md-end">
								<div class="social-media">
								<p class="mb-0 d-flex">
									<a href="https://www.facebook.com/cartaosaudeprevencao" target="blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
									<!-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a> -->
									<a href="https://instagram.com/cartaosaudeprevencaoo?igshid=aq6svdz5mvov" target="blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
									<!-- <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a> -->
								</p>
						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.html">
                <img src="{{ asset('images/logo_saude.png') }}" alt="logo">
         </a>
	    	<form action="#" class="searchform order-sm-start order-lg-last">
          <!--<div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>-->
        </form>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="#cartao" class="nav-link">Cartão</a></li>
	        	<li class="nav-item"><a href="#planos" class="nav-link">Planos</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Benefícios</a></li>
			  <li class="nav-item"><a href="../form_sind.html" target="_blank" class="nav-link">Sindicato</a></li>
	          <li class="nav-item"><a href="#" class="nav-link">Aréa do Cliente</a></li>
	          <li class="nav-item"><a href="#contato" class="nav-link">Contato</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    <div class="hero-wrap">
	    <div class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url( {{asset('images/CARTAO_CARTAO_DE_TODOS.png')}});">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row no-gutters slider-text align-items-center justify-content-center">
		          <div class="col-md-8 ftco-animate">
		          	<div class="text w-100 text-center">
		          		<h2></h2>
			            <h1 class="mb-4"></h1>
                        <br>
                           <br>   <br>   <br>   <br>
                        
			            <p><a href="#planos" class="btn btn-white">PEÇA AGORA O SEU CARTÃO</a></p>
		            </div>
		          </div>
		        </div>
	        </div>
	      </div>

	    

	 
	    </div>
	  </div>
   	
<!-- ======= Cartao Section ======= -->
	
    <section id="cartao" class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-center mb-4 mb-sm-0" style="background-image:url({{ asset('images/cartao_saude_itaqua.png') }});">
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5 py-md-5">
    				<div class="heading-section pl-md-4 pt-md-5">
    					<span class="subheading">Cartão Saúde Prevenção</span>
	            <h2 class="mb-4">Como funciona?</h2>
    				</div>
					
    				<div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tax"></span></div>
    					<div class="text pl-4">
    						<h4>Descontos na Saúde, Educação, Lazer e outros</h4>
    						<p>Reunimos em um único Cartão de Descontos a Saúde, Educação, Entretenimento.</p>						
    					</div>
    				</div>

    				<!-- <div class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accountant"></span></div>
    					<div class="text pl-4">
    						<h4>Descontos em Saúde</h4>
    						<p>Atendimento a diversas especialista com descontos exclusivos</p>
    					</div>
    				</div> -->

    				<div id="exames"class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-teamwork"></span></div>
    					<div class="text pl-4">
    						<h4>Exames de Imagem</h4>
    						<p>Descontos em exames de imagem.</p>
    					</div>
    				</div>

    				<div id="laboratorios" class="services-2 w-100 d-flex">
    					<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-accounting"></span></div>
    					<div class="text pl-4">
    						<h4>Exames Laboratoriais</h4>
    						<p>Descontos e mais de 3.000 exames.</p>
    					</div>
    				</div>

	        </div>
        </div>
    	</div>
    </section>


    <section class="ftco-counter bg-light ftco-no-pt" id="section-counter">
    	<div class="container">
				<div class="row">
          <div id="rede" class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="15">0</strong>
              </div>
              <div class="text">
              	<span>Especialidades</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="3000">0</strong>
              </div>
              <div class="text">
              	<span>Mais de 3.000 Exames laboratoriais</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="10000">0</strong>
              </div>
              <div class="text">
              	<span>Mais de 10.000 Parceiros Credenciados</span>
              </div>
            </div>
        </div>
        
<!--		<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="24">0</strong>
              </div>
              <div class="text">
              	<span>Horas de atendimento</span>
              </div>
            </div> -->
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt bg-light ftco-faqs">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6">
    				<div class="img-faqs w-100">
	    				<div class="img mb-4 mb-sm-0" style="background-image:url({{ asset('images/cartao_especialidade_medica.png') }});">
	    				</div>
	    				<div class="img img-2 mb-4 mb-sm-0" style="background-image:url( {{ asset('images/laboratorio.png') }});">
	    				</div>
	    			</div>
    			</div>

				
    			<div class="col-lg-6 pl-lg-5">
    				<div class="heading-section mb-5 mt-5 mt-lg-0">
    					<span class="subheading">Cartão Saúde Prevenção</span>
	            <h2 class="mb-3">Como fazer o seu agora</h2>
	            <p>Siga os passos e faça sua solicitação</p>
    				</div>
    				<div id="accordion" class="myaccordion w-100" aria-multiselectable="true">
						  <div class="card">
						    <div class="card-header p-0" id="headingOne">
						      <h2 class="mb-0">
						        <button href="#collapseOne" 
										class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" 
										data-parent="#accordion" 
										data-toggle="collapse" 
										aria-expanded="true" 
										aria-controls="collapseOne">
										
						        <p class="mb-0">Escolha seu plano</p>
						        <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li>Clique no botão planos</li>
						      		<li>Acesse a página, escolha o que desejar</li>
						      		<li>Clique em comprar para finalizar </li>
						      		
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div id="atendimento"class="card">
						    <div class="card-header p-0" id="headingTwo" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseTwo" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseTwo">
						        	<p class="mb-0">Atendimento</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li>Você receberá um e-mail de confirmação</li>
						      		<li>Nosso atendimento irá disponibilizar o seu acesso</li>
						      		<li>Dúvidas ligue no telefone (11) 4730-0576 </li>
						      		
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div class="card">
						    <div class="card-header p-0" id="headingThree" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseThree" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseThree">
						        	<p class="mb-1">Quando pode utilizar?</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<ol>
						      		<li>Após a aprovação do seu pagamento</li>
						      		<li>Você já tem acesso aos descontos do seu plano</li>
									  						      	
						      	</ol>
						      </div>
						    </div>
						  </div>

						  <div id="beneficio" class="card">
						    <div class="card-header p-0" id="headingFour" role="tab">
						      <h2 class="mb-0">
						        <button href="#collapseFour" class="d-flex py-3 px-4 align-items-center justify-content-between btn btn-link" data-parent="#accordion" data-toggle="collapse" aria-expanded="false" aria-controls="collapseFour">
						        	<p class="mb-0">Benefícios</p>
						          <i class="fa" aria-hidden="true"></i>
						        </button>
						      </h2>
						    </div>
						    <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingTwo">
						      <div class="card-body py-3 px-0">
						      	<p>Você também vai receber acesso a descontos exclusivos a mais de 10 mil locais de compras e entreternimento</p>
						      </div>
						    </div>
						  </div>
						</div>
	        </div>
        </div>
    	</div>
    </section>
  
    <section class="ftco-section ftco-no-pb ftco-no-pt bg-secondary">
      <div class="container py-5">
    		<div class="row">
				<div class="col-md-7 d-flex align-items-center">
					<h2 class="mb-3 mb-sm-0" style="color:black; font-size: 22px;">Receba nossas informações e notícias</h2>
				</div>
				<div class="col-md-5 d-flex align-items-center">
					<form action="#" class="subscribe-form">
						<div class="form-group d-flex">
							<input type="text" class="form-control" placeholder="Escreva seu e-mail aqui">
							<a href="#" class="btn btn-primary d-block px-2 py-3">Enviar</a>                
						</div>
					</form>
				</div>
        	</div>
      	</div>
    </section>

<!-- ======= Planos Section ======= -->

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
				<div id="planos" class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Cartão Saúde Prevenção</span>
					<h2>Planos</h2>
				</div>
        	</div>

			<div class="row row-cols-2">
				<div id="saude" class="col-md-4 col-lg-4 mt-4 ftco-animate">
					<div class="blockprimeiro-7">
						<div class="text-center">
							<span style="margin-bottom: 10px;color: #1ba12d;font-size: 16px;font-weight: 600;text-transform: uppercase;">Bronze</span>
							<span class="price"><sup>R$</sup> <span class="number">27,99</span> <sub>/mês</sub></span>	            
							<ul class="pricing-text mb-5 text-left">
								<li><span class="fa fa-check mr-2"></span>Acupuntura </li>
								<li><span class="fa fa-check mr-2"></span>Consultas Médicas</li>
								<li><span class="fa fa-check mr-2"></span>Dentista </li>
								<li><span class="fa fa-check mr-2"></span>Estética </li>
								<li><span class="fa fa-check mr-2"></span>Exames Laboratoriais </li>
								<li><span class="fa fa-check mr-2"></span>Fisioterapia </li>
								<li><span class="fa fa-check mr-2"></span>Fonoaudiologia </li>
								<li><span class="fa fa-check mr-2"></span>Hidroterapia </li>
								<li><span class="fa fa-check mr-2"></span>Podologia</li>
								<li><span class="fa fa-check mr-2"></span>Psicologia </li>
								<li><span class="fa fa-check mr-2"></span>Exames Cardiológicos </li>
								<li><span class="fa fa-check mr-2"></span>Exames USG</li>
								<li><span class="fa fa-check mr-2"></span>Exames de Imagem</li>				                
							</ul>
							<a href="{{ url('campanha/cadastrar?plano=1') }}" target="_blank" class="btn btn-primary d-block px-2 py-3">Pedir Agora</a>
						</div>
					</div>
				</div>
			
				<div id="saude" class="col-md-4 col-lg-4 mt-4 ftco-animate">
					<div class="blocksegundo-7">
						<div class="text-center">
							<span style="margin-bottom: 10px;color: #1ba12d;font-size: 16px;font-weight: 600;text-transform: uppercase;">BRONZE PLUS </span>
							<span class="price"><sup>R$</sup> <span class="number">37,99</span> <sub>/mês</sub></span>
							<span class="price"> <span class="">Toda cobertura do PLANO BRONZE +</span></span>
							
							<ul class="pricing-text mb-5 text-left">
								<li><span class="fa fa-check mr-2"></span>Acupuntura</li>
								<li><span class="fa fa-check mr-2"></span>Consultas Médicas </li>
								<li><span class="fa fa-check mr-2"></span>Dentista</li>
								<li><span class="fa fa-check mr-2"></span>Estética</li>
								<li><span class="fa fa-check mr-2"></span>Exames Laboratoriais</li>
								<li><span class="fa fa-check mr-2"></span>Fisioterapia</li>
								<li><span class="fa fa-check mr-2"></span>Fonoaudiologia</li>
								<li><span class="fa fa-check mr-2"></span>Hidroterapia</li>
								<li><span class="fa fa-check mr-2"></span>Podologia</li>
								<li><span class="fa fa-check mr-2"></span>Psicologia</li>
								<li><span class="fa fa-check mr-2"></span>Exames Cardiológicos </li>
								<li><span class="fa fa-check mr-2"></span>Exames USG</li>
								<li><span class="fa fa-check mr-2"></span>Exames de Imagem </li>
								<li><span class="fa fa-check mr-2"></span>1 APP de Entretenimento </li>
								<li><span class="fa fa-check mr-2"></span>Banco MAGPAY </li>
								<li><span class="fa fa-check mr-2"></span>Conta Digital </li>
								<li><span class="fa fa-check mr-2"></span>2 Consultas por ano de Telemedicina </li>
								<li><span class="fa fa-check mr-2"></span>Cartão Visa Internacional </li>
								<li><span class="fa fa-check mr-2"></span>Clube de Descontos </li>
								<li><span class="fa fa-check mr-2"></span>Assistência Funeral para correntista </li>
							</ul>
			
							<a href="{{ url('campanha/cadastrar?plano=3') }}" target="_blank" class="btn btn-primary d-block px-2 py-3">Pedir Agora</a>
						</div>
					</div>
				</div>	    

				<div id="saude" class="col-md-4 col-lg-4 mt-4 ftco-animate">
					<div class="blockterceiro-7">
						<div class="text-center">
							<span style="margin-bottom: 10px;color: #1ba12d;font-size: 16px;font-weight: 600;text-transform: uppercase;">Prata</span>
							<span class="price"><sup>R$</sup> <span class="number">59,99</span> <sub>/mês</sub></span>
							
							<ul class="pricing-text mb-5 text-left">
								<li><span class="fa fa-check mr-2"></span> Acupuntura</li>
								<li><span class="fa fa-check mr-2"></span> Consultas Médicas </li>
								<li><span class="fa fa-check mr-2"></span> Dentista</li>
								<li><span class="fa fa-check mr-2"></span> Estética </li>
								<li><span class="fa fa-check mr-2"></span> Exames Laboratoriais</li>
								<li><span class="fa fa-check mr-2"></span> Fisioterapia </li>
								<li><span class="fa fa-check mr-2"></span> Fonoaudiologia</li>
								<li><span class="fa fa-check mr-2"></span> Hidroterapia </li>
								<li><span class="fa fa-check mr-2"></span> Podologia </li>
								<li><span class="fa fa-check mr-2"></span> Psicologia </li>
								<li><span class="fa fa-check mr-2"></span> Exames Cardiológicos </li>
								<li><span class="fa fa-check mr-2"></span> Exames USG</li>
								<li><span class="fa fa-check mr-2"></span> Exames de Imagem </li>
								<li><span class="fa fa-check mr-2"></span> Banco MAGPAY </li>
								<li><span class="fa fa-check mr-2"></span> Conta Digital </li>
								<li><span class="fa fa-check mr-2"></span> 2 Consultas por Ano por Telemedicina </li>
								<li><span class="fa fa-check mr-2"></span> Cartão Visa Internacional </li>
								<li><span class="fa fa-check mr-2"></span> Clube de Descontos </li>
								<li><span class="fa fa-check mr-2"></span> Assistência Funeral para o correntista </li>
								<li><span class="fa fa-check mr-2"></span> 4 APP Entretenimento </li>
							</ul>

							<a href="{{ url('campanha/cadastrar?plano=2') }}" target="_blank" class="btn btn-primary d-block px-2 py-3">Pedir Agora</a>
						</div>
					</div>
				</div>
			  </div>
		</div>
    </section>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


</div>

@endsection