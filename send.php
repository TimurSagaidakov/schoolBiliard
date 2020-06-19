<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$training = $_POST['user_training'];
$email = $_POST['user_email'];


//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'timurvladimirovich90@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '1t2i3m4a'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('timurvladimirovich90@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('timurvladimirovich90@gmail.com');     // Кому будет уходить письмо 

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка с вашего сайта';
$mail->Body    = '' .$name . ' оставил заявку, его телефон ' .$phone. '<br>Количество тренировок, которое хочет клиент: ' .$training. '<br>Электронный адрес клиента: ' .$email;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>