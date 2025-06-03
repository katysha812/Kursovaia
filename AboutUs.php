<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
    <Link rel="stylesheet" href="css/main.css" type="text/css"/>
    <Link rel="stylesheet" href="css/aboutus.css" type="text/css"/>
    <Link rel="stylesheet" href="css/contacts.css" type="text/css"/>
</head>
<body>
    <div class="wrapper">
        <!-- Шапка сайта -->
        <header class="container">
            <div class="logo-container">
                <img src="assets/images/logoIcon.svg" alt="" class="logo-img">
                <span class="logo">НазваниеКондитерской</span>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Главная</a></li>
                    <li class="active"><a href="AboutUs.php">О нас</a></li>
                    <li><a href="CustomCakes.php">Торты на заказ</a></li>
                    <li><a href="Toppings.php">Начинки</a></li>
                    <li><a href="Reviews.php">Отзывы</a></li>
                    <li><a href="Contacts.php">Контакты</a></li>
                    <li class="btn"><a href="Login.php">Войти</a></li>
                </ul>
            </nav>
        </header>
        <!-- О себе -->
        <div class="about-container">
            <h2>О нас</h2>
            <div class="about-info">
                <p>Текст текст текст текст текст текст Текст текст текст текст текст текст Текст текст текст текст текст текст Текст текст текст текст текст текст Текст текст текст текст текст текст Текст текст текст текст текст текст Текст текст текст текст текст текст Текст текст текст текст текст текст Текст текст текст текст текст текст Текст текст текст текст текст текст </p>
                <img src="assets/images/AboutUsPic.svg" alt="">
        </div>
            
        </div>
        <div class="wrapper2">
        <!-- Контакты -->
        <?php require_once "blocks/cont.php"; ?>
    </div>
</body>
</html>