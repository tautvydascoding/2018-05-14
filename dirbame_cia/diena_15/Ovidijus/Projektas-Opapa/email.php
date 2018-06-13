<?php
print_r($_POST);
print_r($_GET);

$klientoVardas = $_POST['vardas'];
$klientoPastas = $_POST['elpastas'];
$klientoTelefonas = $_POST['numeris'];
$klientoTekstas = $_POST['tekstas'];

//Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer(true);   // Passing `true` enables exceptions
try {
  $mail->SMTPOptions = array(
      'ssl' => array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true
      )
  );
    //Server settings
    $mail->SMTPDebug = 3;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'tls://smtp.gmail.com:587';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ovidijaus.testai@gmail.com';                 // SMTP username
    $mail->Password = 'ovidijaustest';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                   // TCP port to connect to

    //Recipients
    $mail->setFrom('from@apdailospuslapis.com', 'puslapis');
    $mail->addAddress('ovidijaus.testai@gmail.com', 'Puslapis');     // Add a recipient
    // $mail->addAddress('ellen@example.com');        // Name is optional

    $mail->addReplyTo($klientoPastas, $klientoVardas);

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $klientoTelefonas;
    $mail->Body    = $klientoTekstas;
    $mail->AltBody = $klientoTekstas;

    $mail->send();
    echo 'Issiunteme zinute sekmingai';
} catch (Exception $e) {
    echo 'Zinute nesisiusta: ', $mail->ErrorInfo;
}
