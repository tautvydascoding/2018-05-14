<?php

// UZDUOTIS.
//
// 1) susikurti gmail, yahoo  nauja vartotoja su paprastu slaptazodziu (nes gal netycia i GIT ikelsite)
// 2) ijungti less secure application nustatyma ON:
// https://myaccount.google.com/lesssecureapps?pli=1
//
// 3) sukurti forma, kuri turi ivedimo laukus:
//
// vardas
// klausimas (privalomas)
// email (privalomas)
//
// 3.2) forma vartotojus nukreips i email.php
// 4) susikurti emial.php faila, panaudoti PHPMailer biblioteka


  print_r( $_POST ); //jeigu ne post tai bus get

  $klientoVardas = $_POST['vardas'];
  $klientoPastas = $_POST['pastas'];
  $klientoKlausimas = $_POST['klausimas'];

  //butinai isikelti i libs kataloga  pasto nustatymus  ir pasto biblioteka


//Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );

    //Server settings
    $mail->SMTPDebug = 3;                               // Enable verbose debug output
    $mail->isSMTP();                                    // Set mailer to use SMTP
    $mail->Host = 'tls://smtp.gmail.com:587';           // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                             // Enable SMTP authentication
    $mail->Username = 'contactlesiai@gmail.com';                 // SMTP username
    $mail->Password = 'lesiai777';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                          // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                  // TCP port to connect to

    //Recipients
    $mail->setFrom('contactlesiai@gmail.com', 'Prezidentas');
    $mail->addAddress('contactlesiai@gmail.com', 'Puslapiu kurejai');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional

    $mail->addReplyTo( $klientoPastas , $klientoVardas);  //atrasysime

    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Klausimas';
    $mail->Body    =  $klientoKlausimas;
    $mail->AltBody =  $klientoKlausimas;

    $mail->send();
    echo 'Issiunteme zinute sekmingai';
} catch (Exception $e) {
    echo 'nepavyko isiusti. Mailer Error: ', $mail->ErrorInfo;
}
