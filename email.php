php
<?php
$nome = $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['message'];

// Defina o endereço de e-mail para onde deseja enviar os dados do formulário
$to = "christianfelix.timoteo3@gmail.com";

$subject = "Contato - Programador Br";

$body = "Nome: ".$nome."\r\n".
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem;

// Envie o e-mail

$header = "From: christianfelix.timoteo2@gmail.com"."\r\n"
            ."Reply-To: ".$email. "\r\n"
            ."X-Mailer: PHP/".phpversion();

if (mail($to, $subject, $body, $header)){
    echo ("Obrigado por entrar em contato! Seu formulário foi enviado com sucesso.");
}else{
    echo ("Houve um erro ao enviar sua mensagem");
}
?>
<!-- < -->
// $nome = addslashes($_POST['name']);
//     $email = addslashes($_POST['email']);
//     $mensagem = addslashes($_POST['message']); -->

    // Defina o endereço de e-mail para onde deseja enviar os dados do formulário
    // $to = "christianfelix.timoteo3@gmail.com";

    // $subject = "Contato - Programador Br";

    // $body = "Nome: ".$nome."\r\n".
    //         "Email: ".$email."\r\n".
    //         "Mensagem: ".$mensagem;

    // Envie o e-mail

    // $header = "From:christianfelix.timoteo2@gmail.com"."\r\n"
    //             ."Reply-To:".$email. "\r\n"
    //             ."X=Mailer:PHP/".phpversion();

    // if (mail($to, $subject, $body,$header)){
    //     echo ("Obrigado por entrar em contato! Seu formulário foi enviado com sucesso.");
    // }else{
    //     echo ("Houve um erro ao enviar sua mensagem");
    // };

    



<!-- 

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $nome = $_POST["nome"];
//     $email = $_POST["email"];
//     $telefone = $_POST["telefone"];
//     $mensagem = $_POST["mensagem"];

    // Defina o endereço de e-mail para onde deseja enviar os dados do formulário
    // $destinatario = "rjosemar008@gmail.com";

    // $assunto = "Formulário de Contato";

    // $corpo = "Nome: " . $nome . "\n";
    // $corpo .= "E-mail: " . $email . "\n";
    // $corpo .= "Telefone: " . $telefone . "\n";
    // $corpo .= "Mensagem: " . $mensagem;

    // // Envie o e-mail
    // mail($destinatario, $assunto, $corpo);

    // echo "Obrigado por entrar em contato! Seu formulário foi enviado com sucesso.";
// }
?> -->