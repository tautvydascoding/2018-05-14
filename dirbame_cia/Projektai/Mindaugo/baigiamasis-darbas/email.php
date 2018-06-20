<?php

print_r( $_POST );
print_r( $_GET );

$klientoVardas = $_POST['vardas'];
$klientoPastas = $_POST['pastas'];
$klientoKlausimas = $_POST['klausimas'];

// mail($to, $subject, $message [, $additional_headers, $additional_parameters]) //galima naudoti, kai turime domena, ar susivesti php savo faile.

//Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php'; // kelias iki autoloaderio

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
    $mail->Username = 'senas.ozys@gmail.com';                 // SMTP username
    $mail->Password = 'kaktusas67';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom( $klientoPastas, $klientoVardas);
    $mail->addAddress('senas.ozys@gmail.com', 'Puslapiu kurejai');     // Add a recipient

    $mail->addReplyTo( $klientoPastas  , $klientoVardas); // atrasysime

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Klausimas';
    $mail->Body    = $klientoKlausimas ;
    $mail->AltBody = $klientoKlausimas;

    $mail->send(); //pats siuntimas, jei naudojame daug, tai issius daug
    echo 'Isiuntem zinute sekmingai';
} catch (Exception $e) {
    echo 'Nepavyko issiusti. Mailer Error: ', $mail->ErrorInfo;
}
$redirect_page  = 'index.php';
$redirect = true;

header('Location:' . $redirect_page);
