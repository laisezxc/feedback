<?php

  // подключение к бд
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "database_name";
$db_table = "contacts";

  // получение данных
$name = $_POST['user_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['user_message'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset ($conn , "utf8");

  // получение значения поля email из POST-запроса
$email = $_POST['email'];

  // проверка на уникальность
if (checkEmailExists($email, $conn)) {
  echo "Этот адрес электронной почты уже занят";
} else {
  // запись данных в базу данных
  $query = "INSERT INTO contacts (user_name, phone, email, user_message) VALUES ('$name', '$phone', '$email', '$message')";
  $result = mysqli_query($conn, $query);
  
  if ($result) {
    echo "Данные успешно записаны в базу данных";
  } else {
    echo "Ошибка при записи данных в базу данных: " . mysqli_error($conn);
  }
}

  // функция для проверки на уникальность email в базе данных
function checkEmailExists($email, $conn) {
  $email = mysqli_real_escape_string($conn, $email);

  // выполняем запрос к базе данных для проверки наличия email
  $query = "SELECT COUNT(*) as count FROM contacts WHERE email = '$email'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_assoc($result);
  $count = $row['count'];
  // если количество найденных записей больше 0, значит email уже существует
  return $count > 0;
}

  // Параметры для отправки письма
$to = 'eugeneabramov@mail.ru'; // Замените на вашу почту
$message = "Адрес электронной почты: $email\n";
$message .= "Имя: $name\n";
$message .= "Телефон: $phone\n";
$message .= "Сообщение: $message\n";

  // Отправка письма
$headers = "From: $email";
if (mail($to, $message, $headers)) {
  echo "Данные успешно отправлены на почту";
} else {
  echo "Ошибка при отправке данных на почту";
}


  // закрываем соединение с базой данных
mysqli_close($conn);
?>