<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
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
                    <li class="active"><a href="index.php">Главная</a></li>
                    <li><a href="AboutUs.php">О нас</a></li>
                    <li><a href="CustomCakes.php">Торты на заказ</a></li>
                    <li><a href="Toppings.php">Начинки</a></li>
                    <li><a href="Reviews.php">Отзывы</a></li>
                    <li><a href="Contacts.php">Контакты</a></li>
                    <li class="btn"><a href="Login.php">Войти</a></li>
                </ul>
            </nav>
        </header>

        <!-- Слоган -->
        <div class="hero container">
            <div class="hero--info">
                <h1>Какой-то огромный слоган</h1>
                <p>Текст текст текст текст текст текст</p>
                <button class="btn" id="open_pop_up">Оформить заявку</button>
            </div>
            <img src="assets/images/BigPicCake.svg" alt="">
        </div>
            
        <div class="pop_up" id="pop_up">
            <div class="pop_up_container">
                <div class="pop_up_body">
                    <p>Заявка на торт</p>

                    <form>
                        <div class="forms">
                            <div class="form-column">
                                <input type="text" placeholder="Имя">
                                <input type="text" placeholder="Телефон">
                                <input type="text" placeholder="Почта">
                                <input type="date" placeholder="Дата мероприятия">
                            </div>
                            <div class="form-column">
                                <input type="text" placeholder="Начинка">
                                <input type="text" placeholder="Дизайн">
                                <input type="text" placeholder="Вес">
                                <input type="text" placeholder="Примечание">
                            </div>
                        </div>
                        
                        <button>Отправить заявку</button>
                    </form>

                    <div class="pop_up_close" id="close_pop_up">&#10006</div>
                </div>
            </div>
        </div>
        <!-- Начинки -->
        <div class="container-toppings">
            <!-- Заголовок и кнопка начинок -->
            <div class="title-toppings">
                <h2>Начинки</h2>
                <a href="Toppings.php" class="see-all">Посмотреть все</a>
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

            </div>

            <!-- Текст под карточками -->
            <div class="toppings-text">
                <p>Какой-то текст о заказе тортов или предложение</p>
            </div>
        </div>
        <!-- Предложение о заказе -->
        <div class="offer container">

            <div class="card-offer container">

                <div class="offer-content">
                    <img src="assets/images/PicOffer.svg" alt="">

                    <div class="text-offer">
                        <h3>Скидка за регистрацию на сайте!</h3>
                        <p>Зарегистрируйся прямо сейчас и получи промокод на первый заказ со скидкой в размере 10% от стоимости!</p>
                        <button class="btn" id="open_reg"><a href="Registration.php">Зарегистрироваться</a></button>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="wrapper2">
        <!-- Отзывы -->
        <div class="statistic-container">
            <h1>Отзывы</h1>

            <div class="cards-statistics"> <!--Контейнер для карточек отзывов-->

                <div class="card-statistic"> <!-- Отзыв право -->

                    <div class="pic-user">
                        <img src="assets/images/PicStatistic.svg" alt="">
                        <h3>Имя Фамилия</h3>
                        <p>@Никнейм</p>
                    </div>

                    <div class="text-statistic">
                        <h2>Заголовок отзыва</h2>
                        <p>Отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв</p>
                    </div>

                </div>

                <div class="card-statistic"> 

                    <div class="pic-user">
                        <img src="assets/images/PicStatistic.svg" alt="">
                        <h3>Имя Фамилия</h3>
                        <p>@Никнейм</p>
                    </div>
                    <div class="text-statistic">
                        <h2>Заголовок отзыва</h2>
                        <p>Отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв отзыв</p>
                    </div>
                    
                </div>

            </div>

        </div>
    </div>
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

    <div class="wrapper2">
        <!-- Контакты -->
        <?php require_once "blocks/cont.php"; ?>
    </div>
<script src="js/main.js"></script>
</body>
</html>