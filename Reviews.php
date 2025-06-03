<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Отзывы</title>
    <Link rel="stylesheet" href="css/main.css" type="text/css"/>
    <Link rel="stylesheet" href="css/contacts.css" type="text/css"/>
    <Link rel="stylesheet" href="css/reviews.css" type="text/css"/>
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
                    <li><a href="AboutUs.php">О нас</a></li>
                    <li><a href="CustomCakes.php">Торты на заказ</a></li>
                    <li><a href="Toppings.php">Начинки</a></li>
                    <li class="active"><a href="Reviews.php">Отзывы</a></li>
                    <li><a href="Contacts.php">Контакты</a></li>
                    <li class="btn"><a href="Login.php">Войти</a></li>
                </ul>
            </nav>
        </header>
        <!-- Отзывы -->
        <div class="container-reviews">
            <!-- Заголовок и кнопка начинок -->
            <div class="title-reviews">
                <h2>Отзывы</h2>
            </div>
            
            <!-- Обертка для карточек -->
            <div class="cards-reviews">

                <div class="card-reviews"> <!-- Отзыв 1 -->
                    <div class="block1">
                        <h5>12 декабря 2024, 10:43</h5>
                        <h3>Заголовок отзыва</h3>
                        <p>Отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв </p>
                        <h6>Имя Фамилия</h6>
                        <h4>@Никнейм</h4>
                    </div>
                </div>

                <div class="card-reviews"> <!-- Отзыв 2 -->
                    <div class="block1">
                        <h5>12 декабря 2024, 10:43</h5>
                        <h3>Заголовок отзыва</h3>
                        <p>Отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв </p>
                        <h6>Имя Фамилия</h6>
                        <h4>@Никнейм</h4>
                    </div>
                </div>

                <div class="card-reviews"> <!-- Отзыв 3 -->
                    <div class="block1">
                        <h5>12 декабря 2024, 10:43</h5>
                        <h3>Заголовок отзыва</h3>
                        <p>Отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв </p>
                        <h6>Имя Фамилия</h6>
                        <h4>@Никнейм</h4>
                    </div>
                </div>
                
            </div>
            <button class="btn"><a href="Contacts.php">Связаться с нами</a></button>
        </div>

    </div>
    <div class="wrapper2">
        <!-- Контакты -->
        <?php require_once "blocks/cont.php"; ?>
    </div>
</body>
</html>