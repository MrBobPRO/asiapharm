<?php
$name = $_POST['name'];
$phone = $_POST['phone'];

if ($name && $phone) {
  $to = 'boburjon_n@mail.ru';
  $subject = 'Новое сообщение asiapharm.tj';
  $message = "Запрос о бесплатной консультации из сайта asiapharm.tj. Имя: $name. Телефон: $phone";

  $headers = 'From: test@demo.asiapharm.tj' . "\r\n" .
    'Reply-To: test@demo.asiapharm.tj' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  if(mail($to, $subject, $message, $headers)) {
    header("Location: http://asiapharm.tj/");
    die();
  } else {
    echo "Сервис временно не работает!";
  }

}
