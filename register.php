<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Вход/Регистрация</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-red">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Главная страница</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Студентам
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/teachers.html">Преподаватели</a>
                        <a class="dropdown-item" href="/schedule.html">Расписание</a>
                        <a class="dropdown-item" href="/news.html">Новости</a>
                        <a class="dropdown-item" href="/hostel.html">Общежитие</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Преподавателям
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <a class="dropdown-item" href="/students.html">Студенты</a>
                        <a class="dropdown-item" href="/list-students.html">Список студентов</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register.php">Вход</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="section-default">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="title-page">Вход/Регистрация</p>
                <?php if (isset($_SESSION['mail'])) { ?><p class="title-page">Привет, <?php echo $_SESSION['mail']; ?></p><?php } ?>
                <div class="row">
                    <div class="col-md-6">
                        <form action="save_user.php" method="post" class="form-login">
                            <input type="email" name="login_mail" placeholder="Email..." class="form-control">
                            <input type="password" name="login_password" placeholder="Password..." class="form-control">
                            <button class="btn btn-success">Войти</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form action="save_user.php" method="post" class="form-login">
                            <input type="email" name="reg_mail" placeholder="Email..." class="form-control">
                            <input type="password" name="reg_password" placeholder="Password..." class="form-control">
                            <button class="btn btn-success">Зарегестрироваться</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<script src="js/app.js"></script>
</body>
</html>