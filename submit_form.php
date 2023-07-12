<?php
// Получаем значения полей из формы
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

// Подключаемся к базе данных
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверяем соединение с базой данных
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Подготавливаем SQL-запрос для сохранения данных в базу данных
$stmt = $conn->prepare("INSERT INTO contacts (user_name, phone, email, user_message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $phone, $email, $message);
$stmt->execute();

$stmt->close();
$conn->close();

// Параметры для отправки письма
//$to = 'eugeneabramov@mail.ru'; // Замените на вашу почту
//$message = "Адрес электронной почты: $email\n";
//$message .= "Имя: $name\n";
//$message .= "Телефон: $phone\n";
//$message .= "Сообщение: $message\n";

  // Отправка письма
//$headers = "From: $email";
//if (mail($to, $message, $headers)) {
  //echo "Данные успешно отправлены на почту";
//} else {
 // echo "Ошибка при отправке данных на почту";
//}

// Отправляем успешный ответ клиенту
echo 'success';
?>
