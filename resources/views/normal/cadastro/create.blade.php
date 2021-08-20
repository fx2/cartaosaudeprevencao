@extends('layouts.appfora')
<link rel="stylesheet" href="{{ asset('css/campanha.css') }}">

@section('content')
@include('layouts/fragments/banner-familia')
<div class="container">
    <div class="row mb-5">
        <div class="col-xs-12 col-sm-7 col-md-7">
            <form method="POST" action="#" id="formIdTarget" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <p>Os campos com <strong style="color: red;">*</strong> são obrigatórios</p>
                    </div>
                </div>
                <div class="row">
                  <strong class="mt-2 mb-2">Dados Pessoais</strong>
                  <div class="col-xs-12 col-sm-12 col-md-12" style="">
                      <input class="field-form" type="email" autocomplete="off" name="users[email]" id="email" placeholder="* E-mail" required="required" />
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                      <input class="field-form" type="text" autocomplete="off" name="users[document]" id="document" placeholder="* CPF" required="required" />
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                      <input class="field-form" type="text" autocomplete="off" name="enderecos[telefone1]" id="telefone" placeholder="* Telefone (Ex: 11 999999999)" required="required" />
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                      <input class="field-form" type="text" autocomplete="off" name="users[name]" id="name" placeholder="* Nome do contato" required="required" />
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                      <input class="field-form" type="text" autocomplete="off" name="empresas[name]" id="empresa" placeholder="Nome da empresa (NÃO É OBRIGATÓRIO)" />
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                      <input class="field-form" type="text" autocomplete="off" name="empresas[cnpj]" id="cnpj" placeholder="CNPJ da empresa (NÃO É OBRIGATÓRIO)" />
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                      <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <input class="field-form" type="number" autocomplete="off" name="planosSaude[qtd_vidas]" id="qtd_vidas" placeholder="* Quantidade de vidas" required="required" />
                          </div>
                      </div>
                  </div>

                  <strong class="mt-5 mb-1">Endereço</strong>

                  <div class="col-xs-12 col-sm-12 col-md-12" >
                      <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12">
                              <input class="field-form" type="text" autocomplete="off" onblur="findCep()" name="endereco[zipCode]" id="endereco_zipCode" placeholder="* CEP" />
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                              <input class="field-form" type="text" autocomplete="off" maxlength="2" name="endereco[state]" id="endereco_state" placeholder="* Estado" />
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                              <input class="field-form" type="text" autocomplete="off" name="endereco[city]" id="endereco_city" placeholder="* Cidade" />
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                              <input class="field-form" type="text" autocomplete="off" name="endereco[neighborhood]" id="endereco_neighborhood" placeholder="* Bairro" />
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                              <input class="field-form" type="text" autocomplete="off" name="endereco[street]" id="endereco_street" placeholder="* Rua" />
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                              <input class="field-form" type="text" autocomplete="off" name="endereco[number]" id="endereco_number" placeholder="* Número" />
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                              <input class="field-form" type="text" autocomplete="off" name="endereco[complement]" id="endereco_complement" placeholder=" Complemento (NÃO É OBRIGATÓRIO)" />
                          </div>
                      </div>
                  </div>

				  <strong class="mt-5 mb-1">Pagamento</strong>

				  <div class="col-xs-12 col-sm-12 col-md-12">
					<div class="accordion" id="accordionExample">
						<div class="card">
						  <div class="card-header" id="headingOne">
							<h5 class="mb-0">
							  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Cartão de Crédito
							  </button>
							</h5>
						  </div>
					  
						  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
							<div class="card-body">
								<div class="card card-body">
									<div class="col-xs-12 col-sm-12 col-md-12" >
										<div class="row">
											<div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
												<input class="field-form" type="text" autocomplete="off" name="cartao_credito[number]" id="cartao_credito_number" placeholder="* Número do cartão" />
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
												<input class="field-form" type="text" autocomplete="off" name="cartao_credito[holder]" id="cartao_credito_holder" placeholder="* Nome no cartão" />
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
												<input class="field-form" type="text" autocomplete="off" name="cartao_credito[expiresAt]" id="cartao_credito_expiresAt" placeholder="* Validade do cartão (Mês e Ano)" required="required" />
											</div>
											<div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
												<div class="row">
													<div class="col-xs-12 col-sm-9 col-md-9">
														<input class="field-form" type="text" autocomplete="off" name="cartao_credito[cvv]" id="cartao_credito_cvv" placeholder="* Código de segurança do cartão" required="required" />
													</div>
													<div class="col-xs-12 col-sm-3 col-md-3 botao-enviar">
														<input type="button" name="btn-enviar" class="btn btn-enviar" id="btn-enviar" value=">" />
														<span class="text-primary aguarde_text">Por favor aguarde.</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						  </div>
						</div>
						<div class="card">
						  <div class="card-header" id="headingTwo">
							<h5 class="mb-0">
							  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Boleto
							  </button>
							</h5>
						  </div>
						  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
							<div class="card-body">
                <input type="button" name="btn-enviar-boleto" class="btn btn-success btn-enviar-boleto" id="btn-enviar-boleto" value="Gerar boleto" />                
							</div>
						  </div>
						</div> 
					  </div>
					</div>
              </div>
              
              <div class="form-group form-check mt-5">
                <input type="checkbox" class="form-check-input" id="termosdeuso">
                <label class="form-check-label" for="termosdeuso">
                  Eu li e concordo com os termos de uso: 
                  <span class="btn btn-sm btn-info" onclick="termosContrato()">Visualizar termos de uso</span>
                </label>
              </div>
                {{-- <div class="row">
                    <strong class="mt-2 mb-2">Dados Pessoais</strong>
                    <div class="col-xs-12 col-sm-12 col-md-12" style="">
                        <input class="field-form" type="email" autocomplete="off" name="users[email]" id="email" value="ff@ff.com" placeholder="* E-mail" required="required" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                        <input class="field-form" type="text" autocomplete="off" name="users[document]" id="document" value="20979494010" placeholder="* CPF" required="required" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                        <input class="field-form" type="text" autocomplete="off" name="enderecos[telefone1]" id="telefone" value="11985003448" placeholder="* Telefone (Ex: 11 999999999)" required="required" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                        <input class="field-form" type="text" autocomplete="off" name="users[name]" id="name" value="Nandao" placeholder="* Nome do contato" required="required" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                        <input class="field-form" type="text" autocomplete="off" name="empresas[name]" id="empresa" value="" placeholder="Nome da empresa (NÃO É OBRIGATÓRIO)" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                        <input class="field-form" type="text" autocomplete="off" name="empresas[cnpj]" id="cnpj" value="" placeholder="CNPJ da empresa (NÃO É OBRIGATÓRIO)" />
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input class="field-form" type="number" autocomplete="off" name="planosSaude[qtd_vidas]" id="qtd_vidas" value="3" placeholder="* Quantidade de vidas" required="required" />
                            </div>
                        </div>
                    </div>

                    <strong class="mt-5 mb-1">Endereço</strong>

                    <div class="col-xs-12 col-sm-12 col-md-12" >
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <input class="field-form" type="text" autocomplete="off" onblur="findCep()" name="endereco[zipCode]" id="endereco_zipCode" placeholder="* CEP" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                                <input class="field-form" type="text" autocomplete="off" maxlength="2" name="endereco[state]" id="endereco_state" placeholder="* Estado" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                                <input class="field-form" type="text" autocomplete="off" name="endereco[city]" id="endereco_city" placeholder="* Cidade" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                                <input class="field-form" type="text" autocomplete="off" name="endereco[neighborhood]" id="endereco_neighborhood" placeholder="* Bairro" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                                <input class="field-form" type="text" autocomplete="off" name="endereco[street]" id="endereco_street" placeholder="* Rua" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                                <input class="field-form" type="text" autocomplete="off" name="endereco[number]" id="endereco_number" placeholder="* Número" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                                <input class="field-form" type="text" autocomplete="off" name="endereco[complement]" id="endereco_complement" placeholder=" Complemento (NÃO É OBRIGATÓRIO)" />
                            </div>
                        </div>
                    </div>

                    <strong class="mt-5 mb-1">Cartão de Cŕedito</strong>

                    <div class="col-xs-12 col-sm-12 col-md-12" >
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                                <input class="field-form" type="text" autocomplete="off" name="cartao_credito[number]" id="cartao_credito_number" value="4111 1111 1111 1111" placeholder="* Número do cartão" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                                <input class="field-form" type="text" autocomplete="off" name="cartao_credito[holder]" id="cartao_credito_holder" value="JOAO J J DA SILVA" placeholder="* Nome no cartão" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                                <input class="field-form" type="text" autocomplete="off" name="cartao_credito[expiresAt]" id="cartao_credito_expiresAt" value="122021" placeholder="* Validade do cartão (Mês e Ano)" required="required" />
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 20px;">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-9 col-md-9">
                                        <input class="field-form" type="text" autocomplete="off" name="cartao_credito[cvv]" id="cartao_credito_cvv" value="230" placeholder="* Código de segurança do cartão" required="required" />
                                    </div>
                                    <div class="col-xs-12 col-sm-3 col-md-3 botao-enviar">
                                        <input type="button" name="btn-enviar" class="btn btn-enviar" id="btn-enviar" value=">" />
                                        <span class="text-primary aguarde_text">Por favor aguarde.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </form>
        </div>
        <div class="col-xs-12 col-sm-5 col-md-5 explanation">
            <h2>Tire suas dúvidas e peça uma cotação</h2>
            <p>Preencha o formulário ao lado e nossos corretores parceiros entrarão em contato com você em horário comercial.</p>
            <h2>Confira a Área de Abrangência</h2>
            <p>
                São Paulo<br/>
                Planos de Saúde empresariais a partir de duas vidas.
            </p>

            <div class="spinner-border text-light" role="status">
              <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
  $('.aguarde_text').hide();

  function termosContrato() {
    window.open('http://cartaosaudeprevencao.com.br/public/images/pdf/contrato_csp1.pdf', '_blank');
  }

  function findCep(){
    const cep = $('#endereco_zipCode').val();
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

  function abreBoleto(boleto){
    let newTab = window.open();
    newTab.location.href = boleto;
  }

  $('#btn-enviar').on('click', function(){
      
      valida = validaCampos();
      if (valida != true) {
          return;
      }
      //Disable our button
      $('#btn-enviar').attr("disabled", true);
      showLoading();
      $('.aguarde_text').show();

      $.ajax({
          type: "GET",
          url: "{{ route('campanha.show', 'qualquercoisa') }}",
          data: {
              _token: '{{csrf_token()}}'
          },
          success: function (response) {
            store(response)
          }, 
          error: function() {
            Swal.fire({
              icon: 'error',
              title: `Ocorreu um erro ao carregar os dados.`,
              text: '', 
              onAfterClose: () => {
                $('#email').focus();
                return false;
              }
            });

            $('#btn-enviar').attr("disabled", false);
            $('.aguarde_text').hide();
          },
      });
  });


  async function store(response){
    var json_response = JSON.parse(response);
    var data = new Date();
    var today_date = data.getFullYear() + '-' + (data.getMonth() + 1) + '-' + data.getDate()
    // console.log(json_response)
    $.ajax({
        type: "POST",
        url: "{{ route('campanha.store') }}",
        data: {
            _token: '{{csrf_token()}}',
            access_token: json_response.access_token,
            token_type: json_response.token_type,

            users: {
              email: $('#email').val(),
              name: $('#name').val(),
              document: $('#document').val(),
            },
            
            telefones: {
              telefone: $('#telefone').val(),
            },

            empresas: {
              name: $('#empresa').val(),
              cnpj: $('#cnpj').val(),
            },

            planosSaudes: {
              planMyId: @json($planMyId),
              nomePlano: @json($nomePlano),
              value: @json($value),
              qtd_vidas: $('#qtd_vidas').val(),
              firstPayDayDate: today_date,
              mainPaymentMethodId: 'creditcard'
            },

            enderecos: {
              zipCode: $('#endereco_zipCode').val(),
              state: $('#endereco_state').val(),
              city: $('#endereco_city').val(),
              street: $('#endereco_street').val(),
              number: $('#endereco_number').val(),
              complement: $('#endereco_complement').val(),
              neighborhood: $('#endereco_neighborhood').val(),
            },

            cartao: {
              cartao_credito_number: $('#cartao_credito_number').val(),
              cartao_credito_holder: $('#cartao_credito_holder').val(),
              cartao_credito_expiresAt: $('#cartao_credito_expiresAt').val(),
              cartao_credito_cvv: $('#cartao_credito_cvv').val(),
            }
        },
        success: function (response) {
            if (response == 'chave_igual') {
              Swal.fire({
                icon: 'error',
                title: `Ocorreu um erro, tente novamente mais tarde ou entre em contato com o suporte.`,
                text: '', 
                onAfterClose: () => {
                  $('#email').focus();
                  return false;
                }
              });
            }

            else if (response.error) {
              Swal.fire({
                icon: 'error',
                title: `Ocorreu um erro, tente novamente mais tarde ou entre em contato com o suporte.`,
                text: '', 
                onAfterClose: () => {
                  $('#email').focus();
                  return false;
                }
              });
            }

            else {
              Swal.fire({
                icon: 'success',
                title: '',
                text: `O cadastro foi efetuado com sucesso e está sobre analise da nossa equipe de vendas, você receberá um email de confirmação. \n Número do protocolo: ${response.Subscription.Customer.myId}`, 
                onAfterClose: () => {
                  window.location.replace("/");
                }
              });
            }
        }, 
        error: function() {
          Swal.fire({
            icon: 'error',
            title: `Ocorreu um erro ao carregar os dados.`,
            text: '', 
            onAfterClose: () => {
              $('#email').focus();
              return false;
            }
          });
        },
        complete: function() {
            $('#btn-enviar').attr("disabled", false);
            hideLoading();
            $('.aguarde_text').hide();
        }
    });
  }

  $('#btn-enviar-boleto').on('click', function(){
      
    valida = validaCamposBoleto();
      if (valida != true) {
          return;
      }
      //Disable our button
      $('#btn-enviar-boleto').attr("disabled", true);
      showLoading();
      $('.aguarde_text').show();
      var data = new Date();
      var today_date = data.getFullYear() + '-' + (data.getMonth() + 1) + '-' + data.getDate()

      $.ajax({
          type: "GET",
          url: "{{ route('campanha.show', 'qualquercoisa') }}",
          data: {
              _token: '{{csrf_token()}}'
          },
          success: function (response) {
            storeBoleto(response)
          }, 
          error: function() {
            Swal.fire({
              icon: 'error',
              title: `Ocorreu um erro ao carregar os dados.`,
              text: '', 
              onAfterClose: () => {
                $('#email').focus();
                return false;
              }
            });

            $('#btn-enviar-boleto').attr("disabled", false);
            $('.aguarde_text').hide();
          },
      });
  });
  async function storeBoleto(response){
    var json_response = JSON.parse(response);
    var data = new Date();
    var today_date = data.getFullYear() + '-' + (data.getMonth() + 1) + '-' + data.getDate()
    // console.log(json_response)
    $.ajax({
        type: "POST",
        url: "{{ route('campanha-boleto') }}",
        data: {
            _token: '{{csrf_token()}}',
            access_token: json_response.access_token,
            token_type: json_response.token_type,

            users: {
              email: $('#email').val(),
              name: $('#name').val(),
              document: $('#document').val(),
            },
            
            telefones: {
              telefone: $('#telefone').val(),
            },

            empresas: {
              name: $('#empresa').val(),
              cnpj: $('#cnpj').val(),
            },

            planosSaudes: {
              planMyId: @json($planMyId),
              nomePlano: @json($nomePlano),
              value: @json($value),
              qtd_vidas: $('#qtd_vidas').val(),
              firstPayDayDate: today_date,
              mainPaymentMethodId: 'boleto'
            },

            enderecos: {
              zipCode: $('#endereco_zipCode').val(),
              state: $('#endereco_state').val(),
              city: $('#endereco_city').val(),
              street: $('#endereco_street').val(),
              number: $('#endereco_number').val(),
              complement: $('#endereco_complement').val(),
              neighborhood: $('#endereco_neighborhood').val(),
            },
        },
        success: function (response) {
            if (response == 'chave_igual') {
              Swal.fire({
                icon: 'error',
                title: `Ocorreu um erro, tente novamente mais tarde ou entre em contato com o suporte.`,
                text: '', 
                onAfterClose: () => {
                  $('#email').focus();
                  return false;
                }
              });
            }

            else if (response.error) {
              Swal.fire({
                icon: 'error',
                title: `Ocorreu um erro, tente novamente mais tarde ou entre em contato com o suporte.`,
                text: '', 
                onAfterClose: () => {
                  $('#email').focus();
                  return false;
                }
              });
            }

            else {
              Swal.fire({
                icon: 'success',
                title: '',
                text: `O cadastro foi efetuado com sucesso e está sobre analise da nossa equipe de vendas, você receberá um email de confirmação. \n Número do protocolo: ${response.Subscription.Customer.myId}.`, 
                onAfterClose: () => {
                  window.location.href(response.Subscription.Transactions[0].Boleto.pdf);
                }
              });
            }
        }, 
        error: function() {
          Swal.fire({
            icon: 'error',
            title: `Ocorreu um erro ao carregar os dados.`,
            text: '', 
            onAfterClose: () => {
              $('#email').focus();
              return false;
            }
          });
        },
        complete: function() {
            $('#btn-enviar-boleto').attr("disabled", false);
            hideLoading();
            $('.aguarde_text').hide();
        }
    });
  }
  

  	$('#myModal').modal('show');

	$('input[type=radio]').click(function() {
		alert($(this).val());
	});

  function validarEmail(email){
    return /^[\w+.]+@\w+\.\w{2,}(?:\.\w{2})?$/.test(email)
  }
  function validaCamposBoleto(){
    let email = $('#email').val();
    let telefone = $('#telefone').val();
    let name = $('#name').val();
    let empresa = $('#empresa').val();
    let cnpj = $('#cnpj').val();
    let qtdVidas = $('#qtd_vidas').val();
    let document = $('#document').val();

    let endereco_zipCode = $('#endereco_zipCode').val();
    let endereco_state = $('#endereco_state').val();
    let endereco_city = $('#endereco_city').val();
    let endereco_neighborhood = $('#endereco_neighborhood').val();
    let endereco_street = $('#endereco_street').val();
    let endereco_number = $('#endereco_number').val();


    if (!$('#termosdeuso').is(":checked")) {
      Swal.fire({
        icon: 'error',
        title: `Não é possível prosseguir sem aceitar os termos de uso!`,
        text: '', 
        onAfterClose: () => {
          $('#termosdeuso').focus();
          return false;
        }
      });
      $('#termosdeuso').focus();
      return false;
    }

    let dadosForm = {};
    if(email == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe um E-mail!2`,
        text: '', 
        onAfterClose: () => {
          $('#email').focus();
          return false;
        }
      });
      $('#email').focus();
      return false;
    }
    if(validarEmail(email) == false){
      Swal.fire({
        icon: 'error',
        title: `Informe um E-mail válido!`,
        text: '', 
        onAfterClose: () => {
          $('#email').focus();
          return false;
        }
      });
      $('#email').focus();
      return false;
    }
    if(telefone == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe um Telefone!`,
        text: '', 
        onAfterClose: () => {
          $('#telefone').focus();
          return false;
        }
      });
      $('#telefone').focus();
      return false;
    }
    if(document == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe o CPF!`,
        text: '', 
        onAfterClose: () => {
          $('#document').focus();
          return false;
        }
      });
      $('#document').focus();
      return false;
    }
    if(telefone.length < 14 || telefone.length > 15){ 
      Swal.fire({
        icon: 'error',
        title: `O campo Telefone não está preenchido completamente!`,
        text: '', 
        onAfterClose: () => {
          $('#telefone').focus();
          return false;
        }
      });
      $('#telefone').focus();
      return false;
    }
    if(name == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe o Nome do Contato!`,
        text: '', 
        onAfterClose: () => {
          $('#name').focus();
          return false;
        }
      });
      $('#name').focus();
      return false;
    }

    if(endereco_zipCode == ''){
      // console.log(endereco_zipCode, 222)
      Swal.fire({
        icon: 'error',
        title: `Informe o cep!`,
        text: '', 
        onAfterClose: () => {
          $('#endereco_zipCode').focus();
          return false;
        }
      });
      $('#endereco_zipCode').focus();
      return false;
    }

    if(endereco_state == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe o estado!`,
        text: '', 
        onAfterClose: () => {
          $('#endereco_state').focus();
          return false;
        }
      });
      $('#endereco_state').focus();
      return false;
    }

    if(endereco_city == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe a cidade!`,
        text: '', 
        onAfterClose: () => {
          $('#endereco_city').focus();
          return false;
        }
      });
      $('#endereco_cityvv').focus();
      return false;
    }

    if(endereco_neighborhood == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe o bairro!`,
        text: '', 
        onAfterClose: () => {
          $('#endereco_neighborhood').focus();
          return false;
        }
      });
      $('#endereco_neighborhood').focus();
      return false;
    }

    if(endereco_street == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe a rua!`,
        text: '', 
        onAfterClose: () => {
          $('#endereco_street').focus();
          return false;
        }
      });
      $('#endereco_street').focus();
      return false;
    }

    if(endereco_number == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe o número!`,
        text: '', 
        onAfterClose: () => {
          $('#endereco_number').focus();
          return false;
        }
      });
      $('#endereco_number').focus();
      return false;
    }
    
    if(cnpj != ''){
        if(cnpj.length < 18){
          Swal.fire({
            icon: 'error',
            title: `O campo CNPJ não está preenchido completamente!`,
            text: '', 
            onAfterClose: () => {
              $('#cnpj').focus();
              return false;
            }
          });
          $('#cnpj').focus();
          return false;
        }
    }
    if(qtdVidas == '' || qtdVidas == 0){
      Swal.fire({
        icon: 'error',
        title: `Informe a Quantidade de Vidas!`,
        text: '', 
        onAfterClose: () => {
          $('#qtd_vidas').focus();
          return false;
        }
      });
      $('#qtd_vidas').focus();
      return false;
    }

    return true;
  }
  function validaCampos(){
    let email = $('#email').val();
    let telefone = $('#telefone').val();
    let name = $('#name').val();
    let empresa = $('#empresa').val();
    let cnpj = $('#cnpj').val();
    let qtdVidas = $('#qtd_vidas').val();
    let document = $('#document').val();

    let cartao_credito_number = $('#cartao_credito_number').val();
    let cartao_credito_holder = $('#cartao_credito_holder').val();
    let cartao_credito_expiresAt = $('#cartao_credito_expiresAt').val();
    let cartao_credito_cvv = $('#cartao_credito_cvv').val();

    let endereco_zipCode = $('#endereco_zipCode').val();
    let endereco_state = $('#endereco_state').val();
    let endereco_city = $('#endereco_city').val();
    let endereco_neighborhood = $('#endereco_neighborhood').val();
    let endereco_street = $('#endereco_street').val();
    let endereco_number = $('#endereco_number').val();


    if (!$('#termosdeuso').is(":checked")) {
      Swal.fire({
        icon: 'error',
        title: `Não é possível prosseguir sem aceitar os termos de uso!`,
        text: '', 
        onAfterClose: () => {
          $('#termosdeuso').focus();
          return false;
        }
      });
      $('#termosdeuso').focus();
      return false;
    }

    let dadosForm = {};
    if(email == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe um E-mail!2`,
        text: '', 
        onAfterClose: () => {
          $('#email').focus();
          return false;
        }
      });
      $('#email').focus();
      return false;
    }
    if(validarEmail(email) == false){
      Swal.fire({
        icon: 'error',
        title: `Informe um E-mail válido!`,
        text: '', 
        onAfterClose: () => {
          $('#email').focus();
          return false;
        }
      });
      $('#email').focus();
      return false;
    }
    if(telefone == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe um Telefone!`,
        text: '', 
        onAfterClose: () => {
          $('#telefone').focus();
          return false;
        }
      });
      $('#telefone').focus();
      return false;
    }
    if(document == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe o CPF!`,
        text: '', 
        onAfterClose: () => {
          $('#document').focus();
          return false;
        }
      });
      $('#document').focus();
      return false;
    }
    if(telefone.length < 14 || telefone.length > 15){ 
      Swal.fire({
        icon: 'error',
        title: `O campo Telefone não está preenchido completamente!`,
        text: '', 
        onAfterClose: () => {
          $('#telefone').focus();
          return false;
        }
      });
      $('#telefone').focus();
      return false;
    }
    if(name == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe o Nome do Contato!`,
        text: '', 
        onAfterClose: () => {
          $('#name').focus();
          return false;
        }
      });
      $('#name').focus();
      return false;
    }

    /* cartao credito */
    if(cartao_credito_number == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe o número do cartão!`,
        text: '', 
        onAfterClose: () => {
          $('#cartao_credito_number').focus();
          return false;
        }
      });
      $('#cartao_credito_number').focus();
      return false;
    }

    if(cartao_credito_holder == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe Nome escrito no cartão!`,
        text: '', 
        onAfterClose: () => {
          $('#cartao_credito_holder').focus();
          return false;
        }
      });
      $('#cartao_credito_holder').focus();
      return false;
    }

    if(cartao_credito_expiresAt == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe a data de validade do cartão!`,
        text: '', 
        onAfterClose: () => {
          $('#cartao_credito_expiresAt').focus();
          return false;
        }
      });
      $('#cartao_credito_expiresAt').focus();
      return false;
    }

    if(cartao_credito_cvv == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe o código de segurança do cartão!`,
        text: '', 
        onAfterClose: () => {
          $('#cartao_credito_cvv').focus();
          return false;
        }
      });
      $('#cartao_credito_cvv').focus();
      return false;
    }

    if(endereco_zipCode == ''){
      // console.log(endereco_zipCode, 222)
      Swal.fire({
        icon: 'error',
        title: `Informe o cep!`,
        text: '', 
        onAfterClose: () => {
          $('#endereco_zipCode').focus();
          return false;
        }
      });
      $('#endereco_zipCode').focus();
      return false;
    }

    if(endereco_state == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe o estado!`,
        text: '', 
        onAfterClose: () => {
          $('#endereco_state').focus();
          return false;
        }
      });
      $('#endereco_state').focus();
      return false;
    }

    if(endereco_city == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe a cidade!`,
        text: '', 
        onAfterClose: () => {
          $('#endereco_city').focus();
          return false;
        }
      });
      $('#endereco_cityvv').focus();
      return false;
    }

    if(endereco_neighborhood == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe o bairro!`,
        text: '', 
        onAfterClose: () => {
          $('#endereco_neighborhood').focus();
          return false;
        }
      });
      $('#endereco_neighborhood').focus();
      return false;
    }

    if(endereco_street == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe a rua!`,
        text: '', 
        onAfterClose: () => {
          $('#endereco_street').focus();
          return false;
        }
      });
      $('#endereco_street').focus();
      return false;
    }

    if(endereco_number == ''){
      Swal.fire({
        icon: 'error',
        title: `Informe o número!`,
        text: '', 
        onAfterClose: () => {
          $('#endereco_number').focus();
          return false;
        }
      });
      $('#endereco_number').focus();
      return false;
    }
    
    if(cnpj != ''){
        if(cnpj.length < 18){
          Swal.fire({
            icon: 'error',
            title: `O campo CNPJ não está preenchido completamente!`,
            text: '', 
            onAfterClose: () => {
              $('#cnpj').focus();
              return false;
            }
          });
          $('#cnpj').focus();
          return false;
        }
    }
    if(qtdVidas == '' || qtdVidas == 0){
      Swal.fire({
        icon: 'error',
        title: `Informe a Quantidade de Vidas!`,
        text: '', 
        onAfterClose: () => {
          $('#qtd_vidas').focus();
          return false;
        }
      });
      $('#qtd_vidas').focus();
      return false;
    }

    return true;
  }
</script>
@endpush