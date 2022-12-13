<?php
$name = $_POST['name'];
$phone = $_POST['phone'];

if ($name && $phone) {
  $to = 'boburjon_n@mail.ru';
  $subject = 'Новое сообщение asiapharm.tj';
  $message = "<h2>Запрос о бесплатной консультации из сайта asiapharm.tj</h2><p>Имя: $name<br>Телефон: $phone</p>";

  $headers = 'From: test@test.com' . "\r\n" .
    'Reply-To: test@test.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
}
