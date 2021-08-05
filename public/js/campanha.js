function validarEmail(email){
    return /^[\w+.]+@\w+\.\w{2,}(?:\.\w{2})?$/.test(email)
  }
  
  $(document).ready(function(){
  
    $('#cnpj').mask('00.000.000/0000-00', {reverse: true});
    $('#telefone').mask('(00) 0000-00009');
    $('#document').mask('000.000.000-00');
    $('#endereco_zipCode').mask('00000-000');

    $('#cartao_credito_number').mask('0000 0000 0000 0000');
    $('#cartao_credito_expiresAt').mask('00/0000');
    $('#cartao_credito_cvv').mask('000');
  
    $(document).on('click','#btn-enviar',function(){
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
          title: `Informe um E-mail!`,
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
        Swal.fire({
          icon: 'error',
          title: `Informe cep!`,
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
        $('#endereco_statev').focus();
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
        $('#cartao_credito_cvv').endereco_neighborhoodus();
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
      /*
      if(empresa == ''){
        Swal.fire({
          icon: 'error',
          title: `Informe o Nome da Empresa!`,
          text: '', 
          onAfterClose: () => {
            $('#empresa').focus();
            return false;
          }
        });
        $('#empresa').focus();
        return false;
      }
      if(cnpj == ''){
        Swal.fire({
          icon: 'error',
          title: `Informe o CNPJ da Empresa!`,
          text: '', 
          onAfterClose: () => {
            $('#cnpj').focus();
            return false;
          }
        });
        $('#cnpj').focus();
        return false;
      }
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
      */
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
/* cartao credito */
      if(cartao_credito_number.length < 19){
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


      dadosForm.email = email;
      dadosForm.telefone = telefone;
      dadosForm.name = name;
      dadosForm.empresa = empresa;
      dadosForm.cnpj = cnpj;
      dadosForm.qtdVidas = qtdVidas;
      // $.ajax({
      //   url: `ajax/campanha.php`,
      //   type: 'POST',
      //   dataType: 'text',
      //   data: {
      //     dados: dadosForm
      //   },
      //   async: true, 
      //   success: function(data){
      //     data = JSON.parse(data);
      //     if(data.error == 0){
      //       Swal.fire({
      //         icon: 'success',
      //         title: `Em breve um de nossos Corretores parceiros, entrará em contato.\nObrigado`,
      //         text: '', 
      //         onAfterClose: () => {
      //           $('form input').val('');
      //           $('#email').focus();
      //         }
      //       });
      //       $('form input').val('');
      //       $('#email').focus(); 
      //     }else{
      //       Swal.fire({
      //         icon: 'error',
      //         title: `Não foi possível enviar sua solicitação!\nTente novamente mais tarde.`,
      //         text: '', 
      //         onAfterClose: () => {
      //           $('form input').val('');
      //           $('#email').focus();
      //         }
      //       });
      //       $('form input').val('');
      //       $('#email').focus();
      //     }
      //   },
      //   error: function(jqXhr, textStatus, errorMessage){
      //     console.log('erro na requisição ajax: '+errorMessage);
      //   },
      // });
    });
  
  });