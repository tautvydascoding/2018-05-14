<?php



print_r(  $_POST );
print_r(  $_GET );

$klientoVardas = $_POST['vardas'];
$klientoPastas = $_POST['pastas'];
$klientoKlausimas = $_POST['klausimas'];



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
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'tls://smtp.gmail.com:587';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'testascoding@gmail.com';                 // SMTP username
    $mail->Password = 'slaptazodis';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom( $klientoPastas, $klientoVardas);
    $mail->addAddress('testascoding@gmail.com', 'Puslapiu kurejai');     // Add a recipient

    $mail->addReplyTo( $klientoPastas  , $klientoVardas); // atrasysime

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Klausimas';
    $mail->Body    = $klientoKlausimas ;
    $mail->AltBody = $klientoKlausimas;

    $mail->send();


    echo 'Isiuntem zinute sekmingai';
} catch (Exception $e) {
    echo 'Nepavyko issiusti. Mailer Error: ', $mail->ErrorInfo;
}
