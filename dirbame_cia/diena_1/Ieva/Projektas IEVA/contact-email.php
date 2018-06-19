

<?php


print_r($_POST);
print_r($_GET);

$klientoVardas= $_POST['name'];
$klientoEmail= $_POST['email'];
$klientoKlausimas= $_POST['comment'];






//Load Composer's autoloader
require 'libs/PHPMailer-master/PHPMailerAutoload.php'; // nurodome kelią iki failo PHPMailerAutoload

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
    $mail->Username = 'ieva.projektas.testas@gmail.com';                 // SMTP username
    $mail->Password = '1ltmtdz1';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Vartotojas');
    $mail->addAddress('ieva.projektas.testas@gmail.com', 'Ieva projektas testas');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional

    $mail->addReplyTo($klientoEmail, $klientoVardas); //atrasysime

    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Klausimas';
    $mail->Body    = $klientoKlausimas;
    $mail->AltBody = $klientoKlausimas;

    $mail->send();
    echo 'Message has been sent'; // issiunteme sekmingai
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

        /* Redirect to a the same page in the current directory that was requested */
        $host  = $_SERVER['HTTP_HOST'];
        $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = 'contacts.php';
        header("Location: http://$host$uri/$extra");
        exit;
