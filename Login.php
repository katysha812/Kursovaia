<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Начинки</title>
    <Link rel="stylesheet" href="css/main.css" type="text/css"/>
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
                <h2>Вход</h2>
                <p>Введите данные и войдите в свой пряничный домик</p>
                
                <form>
                    <label>Никнейм</label>
                    <input type="text" class="one-line">

                    <label>Пароль</label>
                    <input type="text" class="one-line">

                    <a href="Password.php">Забыли пароль?</a>
                    
                    <button type="button">Войти</button>
                    
                </form>
                <a class="no-login" href="Registration.php">У меня еще нет аккаунта</a>
            </div>
        </div>
    </div>
</body>
</html>
