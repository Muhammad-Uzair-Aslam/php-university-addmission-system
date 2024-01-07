<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];


require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer();

try {
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;
$mail->Username   =   'hafizbakar1248@gmail.com';                     //SMTP username
$mail->Password   =  'ahxd jhlb ylqz fpku';   

$mail->setFrom( 'hafizbakar1248@gmail.com', 'Get A Quote Form');
$mail->addAddress('uzairaslam990@gmail.com', 'hamari'); 



 //Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = 'Contact  Form';
$mail->Body    = "name = $fname $lname <br> Email = $email <br> Phone No. = $phone <br>  Message = $msg  ";

 //   $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

  // Send the email
  $mail->send();
  header("location:contact.html");
} catch (Exception $e) {
  echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>






<!-- 

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['Send']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];


    


//Load Composer's autoloader
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   =   'hafizbakar1248@gmail.com';                     //SMTP username
    $mail->Password   =  'ahxd jhlb ylqz fpku';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom( 'hafizbakar1248@gmail.com', 'Contact Form');
    $mail->addAddress('Subhancarriers@gmail.com', 'hamari');     //Add a recipient
    
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Get A Quote Form';
    $mail->Body    = "name = $fname + $lname <br> Email = $email <br> Phone = $phone <br>  Message = $msg  ";

  //   $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

    $mail->send();

   // header("Location:contact.html");
    echo 'Message has been sent';
    header("Location: contact.html");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
} -->
