<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    session_start();
    
    //Load Composer's autoloader
    require '../vendor/autoload.php';
    
     $email = $_POST["receptionEmail"];
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer();
    
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'christellemoukouri83@gmail.com';                     //SMTP username
        $mail->Password   = 'christel';                               //SMTP password
        $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('christellemoukouri83@gmail.com', 'christellemoukouri');
        $mail->addAddress($email);     //Add a recipient
    
        ob_start();
        require "../index.php";
        $body = ob_get_contents();
        ob_end_clean();

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'CV';
        $mail->Body    = $body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    ob_start();
        $mail->send();
        ob_end_clean();
           echo 'Message has been sent';
           echo '
            <script type="text/javascript">
              window.location("../index.php")
            </script>
           ';

           header("location:../index.php");
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

?>

