<!DOCTYPE html>
<html>
<head>
  <title>Email enviado com sucesso.</title>
  <meta http-equiv="refresh" content="0;url=../email-enviado.php" />
</head>
<body>
</body>
</html>

<?php
//Variáveis
 
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['tel'];
$mensagem = $_POST['msg'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

// Campo E-mail
  $arquivo = "
  <style type='text/css'>
  body {
  margin:0px;
  font-family:Verdane;
  font-size:12px;
  color: #666666;
  }
  a{
  color: #666666;
  text-decoration: none;
  }
  a:hover {
  color: #FF0000;
  text-decoration: none;
  }
  </style>
    <html>
        <table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
            <tr>
              <td>
  <tr>
                 <td width='500'>Nome: $nome</td>
                </tr>
                <tr>
                  <td width='320'>E-mail: $email</td>
     </tr>
     <tr>
                  <td width='320'>Telefone: $telefone</td>
     </tr>
                  <td width='320'>Mensagem: $mensagem</td>
                </tr>
            </td>
          </tr>  
          <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
  ";

  //enviar
   
  // emails para quem será enviado o formulário
  $emailenviar = "eraldo.bmx@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato - Eraldo Okado";
 
  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: Eraldo Okado - Web Developer <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
   
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "EMAIL ENVIADO COM SUCESSO! <br> Obrigado por entrar em contato, em breve retornaremos a entrar em contato com o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh'>";
  } else {
  $mgm = "ERRO AO ENVIAR EMAIL!";
  echo "";
  }
?>