<?php
session_start();
if (isset($_POST['login_mail'])) {
    $login = $_POST['login_mail'];
    $password = $_POST['login_password'];
}

if (isset($_POST['reg_mail'])) {
    $login = $_POST['reg_mail'];
    $password = $_POST['reg_password'];
}

//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$password = trim($password);
// подключаемся к базе
include("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
// проверка на существование пользователя с таким же логином
$result = mysqli_query($db,"SELECT id FROM users WHERE email='$login'");
$myrow = mysqli_fetch_array($result, MYSQLI_ASSOC);
if (!empty($myrow['id'])) {
    if (isset($_POST['login_mail'])) {
        echo "Вы успешно вошли на сайт " . $_POST['login_mail'] . " ! <a href='/index.html'>Главная страница</a>";
        $_SESSION['mail'] = $login;
        exit;
    }
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
}
$date = date('Y-m-d H:i:s');
// если такого нет, то сохраняем данные
$result2 = mysqli_query($db, "INSERT INTO users (`email`, `password`, `created_at`) VALUES('$login', '$password', '$date')") or die(mysqli_error($db));;

// Проверяем, есть ли ошибки
if ($result2) {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='/index.html'>Главная страница</a>";
} else {
    echo "Ошибка! Вы не зарегистрированы.";
}
?>