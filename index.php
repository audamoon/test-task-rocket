<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Demo medicine</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='header.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='footer.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='adaptive.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='registration.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php 
    include_once "mysql_connect.php"?>
        <header>
            <div class="header-with-success-message">
                <p class="success-message">Сообщение успешно отправлено</p>
            </div>
            <div class="header-with-fail-message">
                <p class="success-message">Сообщение не отправлено</p>
            </div>
            <div class="header-mobile">
                        <ul class="menu">
                        <div class="menu-li">
                            <li><a class="menu-item" href="">О клинике</a></li>
                            <li><a class="menu-item" href="">Услуги</a></li>
                            <li><a class="menu-item" href="">Специалисты</a></li>
                            <li><a class="menu-item" href="">Цены</a></li>
                            <li><a class="menu-item" href="">Контакты</a></li>
                        </div>
                            <button class="appointment-button-mobile" id="appointment-button-mobile">Записаться на приём</button>
                        </ul>
                        <button class="hamburger">
                            <img class="menuIcon" src="images/MenuIcon.png" alt="">
                            <img class="closeIcon" src="images/CloseMenuIcon.png" alt="">
                        </button>
                <div class="logo-header-mobile"><img src="images/LOGO.png"></div>
                <div class="number-with-city-header-mobile">
                    <div class="number-header-mobile"><p>+7(863) 000 00 00</p></div>
                    <div class="city-header-mobile"><p>Ростов-на-Дону</p></div>
                </div>
            </div>
            <div class='header-1'>
                <div class="header-container">
                    <div class=address-with-logo>
                        <div class="logo"><a href="index.php"><img src="images/LOGO.png" alt="LOGO"></a></div>
                        <div class="address-with-map-logo">
                            <div class="map-logo"><img src="images/point.png"></div>
                            <div class="address">
                                <div class="address-city"><p>Ростов-на-Дону</p></div> 
                                <div class="address-street"><p>ул. Ленина, 2Б</p></div>
                            </div>
                        </div>
                    </div>
                    <div class="number-with-button">
                        <div class="clinic-phone-number">
                            <div class="whatsapp-logo"><img  src="images/whatsapp.png"></div>
                            <div class="phone-number">+7(863) 000 00 00 </div>
                        </div>
                        <div class="button-container">
                            <button class="appointment-button">Записаться на приём</button>
                        </div>       
                    </div>
                    </div>
                </div>
            
            <div class='header-2'>
                <div class='header-container'>
                    <div class='navbar'>
                            <a>О клинике</a>
                            <a>Услуги</a>
                            <a>Специалисты</a>
                            <a>Цены</a>
                            <a>Контакты</a>
                    </div>
                </div>
            </div>

        </header>
        <main>
            <div id="registration-form-background"></div>
            <div class="registration-form" id="registationForm">
                <button id="turn-off-registration-button">&#215;</button>
                <?php 
                if (isset($_POST['btnSubmit'])) {
                    include "sendemail.php";
                }
                ?>
                <h1 class="registration-text">Записаться на приём</h1>
                <p class="registration-text">Введите ваши данные и оператор свяжется с вами в ближайшее время</p>
                <form action=" " method="POST">
                    <div></div>
                    <input name='phone' id="phone" type="text" placeholder="+7123456789">
                    <input name="name" id ="name" type="text" placeholder="Иван Иванов">
                    <input type="submit" name="btnSubmit" id="btnSubmit">
                </form>
            </div>
            <div class="upper-section">
                <div class="general-info-container">
                    <div class="empty-container"></div>
                    <div class="about-clinic">
                        <div class="clinic-info-h1">
                            <h1>Многопрофильная клиника для детей
                            и взрослых</h1>
                        </div>
                        <div class="clinic-info-p">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                        </div>
                    </div>
                    <div class="clinic-reception-image"></div>
                </div>
                <div class="checkup-1">
                    <div class="checkup-container">
                        <div class="checkup-description-container">
                            <div class="checkup-text">
                                <?php
                                include "function.php";
                                generateCheckups($link) ?>
                            </div>
                            <div class="checkup-buttons">
                            <button class="appointment-button">Записаться</button>
                            <button class="about-checkup-button">Подробнее</button>
                            </div>
                        </div>
                        <div class="checkup-slider-image">
                            <div class="checkup-container-front"></div>
                            <div class="checkup-container-back">
                                <div class="doctor-working-table"></div>
                            </div>
                        </div>    
                    </div>


                    </div>
                </div>
            </div>
            <div class="arrows-container">
                <div class="arrow-left"><button class="arrow-left-button" id="leftArrow">&#8592</button></div>
                <div class="counter" id="slider_counter_amount">1/4</div>
                <div class="arrow-right"><button class="arrow-right-button" id="rightArrow">&#8594</button></div>
                
            </div>
        </main>
        
        <footer>
            <!-- <div class="footer-with-success-message">
                <p class ='success-message'>Сообщение успешно отправлено</p>
            </div>
            <div class="footer-with-fail message">
                <p class="fail-message">Сообщение не отправлено</p>
            </div> -->
            <div class="footer-mobile">
                <div class="logo-footer-mobile"><img src="images/footer-logo.png" alt=""></div>
                <div class="socials-footer-mobile">
                    <img src="images/instagram.png" alt="">
                    <img src="images/whatsapp-big.png" alt="">
                    <img src="images/telegram.png" alt="">
                </div>
            </div>    
            <div class="footer-container">
                <div class="logo-footer"><img src="images/footer-logo.png" alt="logo"></div>
                <div class="nav-footer">
                            <a>О клинике</a>
                            <a>Услуги</a>
                            <a>Специалисты</a>
                            <a>Цены</a>
                            <a>Контакты</a>
                </div>
                <div class="socials-footer">
                    <a href=""><img src="images/instagram.png" alt="inst"></a>
                    <a href=""><img src="images/whatsapp-big.png" alt="whatsapp"></a>
                    <a href=""><img src="images/telegram.png" alt="tg"></a>
                </div>
            </div>
        </footer>
        <script src="script.js"></script>

</body>
</html>
