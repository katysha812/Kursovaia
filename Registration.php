<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <Link rel="stylesheet" href="css/main.css" type="text/css"/>
    <Link rel="stylesheet" href="css/registration.css" type="text/css"/>
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
                    <li><a href="Reviews.php">Отзывы</a></li>
                    <li><a href="Contacts.php">Контакты</a></li>
                    <li class="btn"><a href="Login.php">Войти</a></li>
                </ul>
            </nav>
        </header>

        <div class="wrapper3">
            <div class="container-registration">
                <h2>Регистрация</h2>
                <p>Займите себе местечко в сладком раю</p>
                <form>
                    <label>Фамилия</label>
                    <input type="text" class="one-line">

                    <label>Имя</label>
                    <input type="text" class="one-line">

                    <label>Телефон</label>
                    <input type="text" class="one-line">

                    <label>Почта</label>
                    <input type="email" class="one-line">

                    <label>Дата рождения</label>
                    <input type="text" class="one-line">

                    <label>Адрес доставки</label>
                    <textarea type="text" class="one-line"></textarea>

                    <div class="inline">
                        <div>
                            <label>Никнейм</label>
                            <input type="text">
                        </div>
                        <div>
                            <label>Пароль</label>
                            <input type="password">
                        </div>
                    </div>
                    <a href="Login.php">Уже есть аккаунт</a>
                    <button type="button">Зарегистрироваться</button>
                    
                </form>
            </div>
        </div>
    </div>
</body>
</html>
