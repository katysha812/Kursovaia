<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Торты на заказ</title>
    <Link rel="stylesheet" href="css/main.css" type="text/css"/>
    <Link rel="stylesheet" href="css/contacts.css" type="text/css"/>
    <Link rel="stylesheet" href="css/toppings.css" type="text/css"/>
    <Link rel="stylesheet" href="css/customcakes.css" type="text/css"/>
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
                    <li class="active"><a href="CustomCakes.php">Торты на заказ</a></li>
                    <li><a href="Toppings.php">Начинки</a></li>
                    <li><a href="Reviews.php">Отзывы</a></li>
                    <li><a href="Contacts.php">Контакты</a></li>
                    <li class="btn"><a href="Login.php">Войти</a></li>
                </ul>
            </nav>
        </header>
        <div class="wrapper">
            <!-- Популярные торты или хиты -->
            <div class="container-cakes">
                <h1>Популярные торты или хиты</h1>
                
                <div class="cards-cakes">

                    <div class="card-cake"> <!-- Торт 1 -->
                        <div class="cake block">
                            <img src="assets/images/PicCake.svg" alt="">
                            <h3>Название название</h3>
                            <p>Описание описание описание описание</p>
                            <button class="btn">Заказать</button>
                        </div>
                    </div>

                    <div class="card-cake"> <!-- Торт 2 -->
                        <div class="cake block">
                            <img src="assets/images/PicCake.svg" alt="">
                            <h3>Название название</h3>
                            <p>Описание описание описание описание</p>
                            <button class="btn">Заказать</button>
                        </div>
                    </div>

                    <div class="card-cake"> <!-- Торт 3 -->
                        <div class="cake block">
                            <img src="assets/images/PicCake.svg" alt="">
                            <h3>Название название</h3>
                            <p>Описание описание описание описание</p>
                            <button class="btn">Заказать</button>
                        </div>
                    </div>

                    <div class="card-cake"> <!-- Торт 4 -->
                        <div class="cake block">
                            <img src="assets/images/PicCake.svg" alt="">
                            <h3>Название название</h3>
                            <p>Описание описание описание описание</p>
                            <button class="btn">Заказать</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper2">
        <!-- Контакты -->
        <?php require_once "blocks/cont.php"; ?>
    </div>
</body>
</html>