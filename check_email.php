<?php
// Получаем значение поля email из AJAX-запроса
$email = $_POST['email'];

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

// Подготавливаем SQL-запрос для поиска почты в базе данных
$stmt = $conn->prepare("SELECT email FROM contacts WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // Почта уже существует в базе данных
    echo 'duplicate';
} else {
    // Почта не существует в базе данных
    echo 'unique';
}

$stmt->close();
$conn->close();
?>
