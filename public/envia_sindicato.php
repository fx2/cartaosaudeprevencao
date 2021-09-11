<?php
// Adiciona o arquivo class.phpmailer.php - você deve especificar corretamente o caminho da pasta com o este arquivo.
include 'mail/PHPMailerAutoload.php';
// include 'class.phpmailer.php';
// Inicia a classe PHPMailer
$mail = new PHPMailer();
 
// DEFINIÇÃO DOS DADOS DE AUTENTICAÇÃO - Você deve auterar conforme o seu domínio!
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "onyx0019.hospedagemdesites.ws"; // Seu endereço de host SMTP //alterar hospedagem
$mail->SMTPAuth = true; // Define que será utilizada a autenticação -  Mantenha o valor "true"
$mail->Port = 587; // Porta de comunicação SMTP - Mantenha o valor "587"
$mail->SMTPSecure = false; // Define se é utilizado SSL/TLS - Mantenha o valor "false"
$mail->SMTPAutoTLS = false; // Define se, por padrão, será utilizado TLS - Mantenha o valor "false"
$mail->Username = 'suporte@comtidev.com.br'; // Conta de email existente e ativa em seu domínio //alterar
$mail->Password = 'Com@ti0615'; // Senha da sua conta de email

// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
// $mail->SMTPDebug = 2;

// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 
  'ssl' => array( 
    'verify_peer' => false, 
    'verify_peer_name' => false, 
    'allow_self_signed' => true 
    ) 
  );
 
//Dados da Mensagem
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$empresa = $_POST['empresa'];
$cnpj = $_POST['cnpj'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$vidas = $_POST['vidas'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];


// DADOS DO REMETENTE
$mail->Sender = " atendimento@cartaosaudeprevencao.com.br"; // Conta de email existente e ativa em seu domínio
$mail->From = $email; // Sua conta de email que será remetente da mensagem
$mail->FromName = $email; // Nome da conta de email
 
// DADOS DO DESTINATÁRIO
$mail->AddAddress(' atendimento@cartaosaudeprevencao.com.br'); // Define qual conta de email receberá a mensagem
$mail->AddAddress('suporte@comtidev.com.br'); // Define qual conta de email receberá a mensagem
// $mail->AddCC('dev@comti.com.br'); // Define qual conta de email receberá uma cópia
//$mail->AddBCC('copiaoculta@dominio.info'); // Define qual conta de email receberá uma cópia oculta
 
// Definição de HTML/codificação
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
// Definir se o e-mail é em formato HTML ou texto plano 

// DEFINIÇÃO DA MENSAGEM
$mail->Subject  = "Formulário sindicato plano bronze"; // Assunto da mensagem
$mail->Body .= "<br>"." nome: ". $nome."<br>"; // Texto da mensagem
$mail->Body .= " cpf: ". $cpf."<br>"; 
$mail->Body .= " empresa: ".$empresa ."<br>"; 
$mail->Body .= " cnpj: ".$cnpj."<br>"; 
$mail->Body .= " email: ".$email."<br>"; 
$mail->Body .= " telefone: ".$telefone."<br>";
$mail->Body .= " vidas: ".$vidas."<br>";
$mail->Body .= " endereco: ".$endereco."<br>";
$mail->Body .= " numero: ".$numero."<br>";
$mail->Body .= " complemento: ".$complemento."<br>";
$mail->Body .= " estado: ".$estado."<br>";
$mail->Body .= " cidade: ".$cidade."<br>";
$mail->Body .= " bairro: ".$bairro."<br>";
$mail->Body .= " cep: ".$cep."<br>";
 
// ENVIO DO EMAIL
$enviado = $mail->Send();
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
 
// Exibe uma mensagem de resultado do envio (sucesso/erro)
if ($enviado) {
  echo "E-mail enviado com sucesso!";
  echo "<meta http-equiv='refresh' content='2;URL=index.html'>";
} 

else {
  echo "Não foi possível enviar o e-mail.";
  echo "<b>Detalhes do erro:</b> " . $mail->ErrorInfo;
  echo "<meta http-equiv='refresh' content='5;URL=index.html'>";
}
