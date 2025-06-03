<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Начинки</title>
    <Link rel="stylesheet" href="css/main.css" type="text/css"/>
    <Link rel="stylesheet" href="css/toppings.css" type="text/css"/>
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
                    <li><a href="AboutUs.php">О нас</a></li>
                    <li><a href="CustomCakes.php">Торты на заказ</a></li>
                    <li class="active"><a href="Toppings.php">Начинки</a></li>
                    <li><a href="Reviews.php">Отзывы</a></li>
                    <li><a href="Contacts.php">Контакты</a></li>
                    <li class="btn"><a href="Login.php">Войти</a></li>
                </ul>
            </nav>
        </header>
        <!-- Начинки -->
        <div class="container-toppings full">
            <!-- Заголовок и кнопка начинок -->
            <div class="title-toppings">
                <h2>Начинки</h2>
            </div>
            
            <!-- Обертка для карточек -->
            <div class="cards-toppings">

                <div class="card-topping"> <!-- Карточка 1 -->
                    <div class="block">
                        <img src="assets/images/PicToppings.svg" alt="">
                        <h3>Название начинки</h3>
                        <p>Описание описание описание описание</p>
                    </div>
                </div>

                <div class="card-topping"> <!-- Карточка 2 -->
                    <div class="block">
                        <img src="assets/images/PicToppings.svg" alt="">
                        <h3>Название начинки</h3>
                        <p>Описание описание описание описание</p>
                    </div>
                </div>

                <div class="card-topping"> <!-- Карточка 3 -->
                    <div class="block">
                        <img src="assets/images/PicToppings.svg" alt="">
                        <h3>Название начинки</h3>
                        <p>Описание описание описание описание</p>
                    </div>
                </div>
                
                <div class="card-topping"> <!-- Карточка 4 -->
                    <div class="block">
                        <img src="assets/images/PicToppings.svg" alt="">
                        <h3>Название начинки</h3>
                        <p>Описание описание описание описание</p>
                    </div>
                </div>

                <div class="card-topping"> <!-- Карточка 5 -->
                    <div class="block">
                        <img src="assets/images/PicToppings.svg" alt="">
                        <h3>Название начинки</h3>
                        <p>Описание описание описание описание</p>
                    </div>
                </div>

                <div class="card-topping"> <!-- Карточка 6 -->
                    <div class="block">
                        <img src="assets/images/PicToppings.svg" alt="">
                        <h3>Название начинки</h3>
                        <p>Описание описание описание описание</p>
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