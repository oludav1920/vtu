<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try{
    $linkToSend;
    $linka;
    $receiver;
    if(isset($_GET["linksend"])){
        $linka = trim(htmlspecialchars($_GET["linksend"]));
    }

    if(isset($_GET["email"])){
        $receiver = trim(htmlspecialchars($_GET["email"]));
    }

    $linkToSend =$linka."&email=".$receiver;
    $mail->isSMTP(true);
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "igbekeleholumide1@gmail.com";
    $mail->Password = "bsci kyzy jypm zqny";
    $mail->SMTPsecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->setFrom("igbekeleholumide1@gmail.com","oludav");
    $mail->addAddress("ekundayoshola129@gmail.com","shola");
    $mail->isHTML(true);
    $mail->Subject = "Registration OTP";
    $mail->Body = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odbest</title>
</head>
<body>
    <div style="background-color: aliceblue;
            width: 90%;
            margin-left: 5%;
            padding: 10px;">
        <div>
            <ul type="none" style=" display: flex;">
                <li><img src="/Image/imageod1.jpg" alt="image here" style="width: 40px; 
            height: 40px; 
            border-radius: 50px;"/></li>
                <li style="margin-top: 8px;
            font-size: x-large;">Odbest</li>
            </ul>
        </div>
        <hr /><br/><br/>
        <h3>Reset your password<h3>
        <span style="font-size: small;">Click on the button below within the next 60 minutes to reset your password for your Odbest account <a href="">igbekeleholumide1@gmail.com.</a></span>
        <p><a href="'.$linkToSend.'">'.$linkToSend.'</a></p>
        <hr />
        <p><span style="font-size: small;">If you are having any issues with your account, check out our <a href="">support docs.</a></span></p>
        <span style="font-size: small;">If this was a mistake, please ignore this email and nothing will happen.</span>
    </div>
</body>
</html>
    ';
    $mail->AltBody = "Your plain text content";
    $mail->send();
    echo "Email sent";
    ?>
    <script>
        window.location="View/public/emailsent.php";
    </script>
    <?php
}
catch(Exception $e){
    echo "error".$e->getMessage();

}
?>