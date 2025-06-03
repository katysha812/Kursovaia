<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вход</title>
    <Link rel="stylesheet" href="css/main.css" type="text/css"/>
    <Link rel="stylesheet" href="css/registration.css" type="text/css"/>
    <Link rel="stylesheet" href="css/contacts.css" type="text/css"/>
    <Link rel="stylesheet" href="css/popup.css" type="text/css"/>
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
                    <input type="password" class="one-line">

                    
                    <a href="#" id="open_pop_up2" >Забыли пароль?</a>
                    
                    <button type="button">Войти</button>
                    <a class="no-login" href="Registration.php">У меня еще нет аккаунта</a>
                </form>
                
            </div>
        </div>

        <div class="pop_up" id="pop_up2">
            <div class="pop_up_container">

                <div class="pop_up_body">
                    <h2>Восстановление пароля</h2>

                    <div class="block">

                        <div>
                            <h1>Введите ваш email</h1>
                            <h3>Мы отправим на вашу почту ссылку для восстановления пароля</h3>
                            <div class="email">
                                <input type="email" placeholder="Введите ваш адрес электронной почты">
                                <button class="button2">Подтвердить</button>
                            </div>
                        </div>
                
                        <div class="pop_up_close" id="close_pop_up2">&#10006</div>

                    </div>
                </div>
            </div>
        </div>

    </div>
<script src="js/login.js"></script>
</body>
</html>
