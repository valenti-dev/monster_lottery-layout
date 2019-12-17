<? $body_class = 'home_page'; ?>
<? include 'parts/header.php'; ?>
    <section class="banner_sect">
        <div class="wrapper">
            <div class="row1 slider">
                <? for ($i = 0; $i < 5; $i++) : ?>
                    <div class="slide">
                        <div class="sub_row1">
                            <div class="col col1">
                                <div class="line1">
                                    <img class="image" src="/assets/tpl/img/banner-sect/banner-image.png"
                                         alt="Выиграйте AirPods">
                                </div>
                            </div>
                            <div class="col col2">
                                <h2 class="line2">
                                    Выиграйте<br>
                                    AirPods
                                </h2>
                                <div class="line3">
                                    Беспроводные наушники
                                </div>
                                <div class="line4">
                                    <button class="orange_butt">Участвовать</button>
                                    <div class="info_wrap">
                                        <div class="sub_line1">Окончание</div>
                                        <div class="sub_line2">Завтра 08:16:56</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sub_row2 info_panel">
                            <div class="col col1">
                                <div class="line1">
                                    <div class="sub_line1">Джэк пот</div>
                                    <div class="sub_line2">
                                        <span class="icon_wrap">
                                            <img class="icon" alt="" src="/assets/tpl/img/icons/coins.svg">
                                        </span>
                                        29 589
                                    </div>
                                    <div class="sub_line3">
                                        <button class="white_bord_butt">Cорвать</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col col2">
                                <div class="line2">
                                    Сыграно
                                </div>
                                <div class="line3">
                                    <div class="nums_wrap">
                                        <div class="num">1</div>
                                        <div class="num">5</div>
                                        <div class="num">3</div>
                                        <div class="num">3</div>
                                    </div>
                                    <div class="text_wrap">
                                        каждый день<br> от 12 игр
                                    </div>
                                </div>
                            </div>
                            <div class="col col3">
                                <div class="line2">
                                    Зарегистрированных
                                </div>
                                <div class="line3">
                                    <div class="nums_wrap">
                                        <div class="num">1</div>
                                        <div class="num">2</div>
                                        <div class="num">4</div>
                                        <div class="num">3</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col4">
                                <div class="line2">
                                    Разыграно
                                </div>
                                <div class="line4">
                                    8 609 589
                                </div>
                                <div class="line5">
                                    USD
                                </div>
                            </div>
                        </div>
                    </div>
                <? endfor; ?>
            </div>
        </div>
    </section>
<? $scripts[] = '/assets/tpl/js/banner-sect.js'; ?>
<? $styles[] = '/assets/tpl/css/banner-sect.css'; ?>
<section class="cards_sect"><div class="wrapper">
        <div class="row1">
            <div class="raffle_card">
                <div class="_row1">
                    <div class="_line2">
                        <div class="_col1">
                            <div class="_sub_line1">
                                <img class="image" src="/assets/tpl/img/cards/phone.png" alt="">
                            </div>
                        </div>
                        <div class="_col2">
                            <div class="_sub_line2">
                                Мгновенная
                                лотерея
                            </div>
                            <div class="_sub_line3">
                                <a href="#">учавствтсуй</a> и побеждай
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_row2">
                    <a href="#" class="orange_butt">Участвовать</a>
                </div>
            </div>
            <div class="raffle_card red">
                <div class="_row1">
                    <div class="_line1">
                        <img class="image" src="/assets/tpl/img/cards/stars.png" alt="">
                    </div>
                    <div class="_line2">
                        <div class="_col1">
                            <div class="_sub_line4">10</div>
                        </div>
                        <div class="_col2">
                            <div class="_sub_line2">
                                Миллиона
                            </div>
                            <div class="_sub_line3">
                                получи шанс выиграть
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_row2">
                    <div class="_col1">
                        <div class="_line1">
                            <span class="icon_wrap">
                                <img class="icon" src="/assets/tpl/img/icons/ticket-7b7b7b.svg" alt="">
                            </span>
                            8 000
                        </div>
                        <div class="_line1">
                            <span class="icon_wrap">
                                <img class="icon" src="/assets/tpl/img/icons/clock-7b7b7b.svg" alt="">
                            </span>
                            12.08.19
                        </div>
                    </div>
                    <div class="_col2">
                        <button class="orange_butt">Участвовать</button>
                    </div>
                </div>
            </div>
            <div class="raffle_card orange">
                <div class="_row1">
                    <div class="_line1">
                        <img class="image" src="/assets/tpl/img/cards/crown.png" alt="">
                    </div>
                    <div class="_line2">
                        <div class="_col1">
                            <div class="_sub_line4">24</div>
                        </div>
                        <div class="_col2">
                            <div class="_sub_line2">
                                Миллиона
                            </div>
                            <div class="_sub_line3">
                                получи шанс выиграть
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_row2">
                    <div class="_col1">
                        <div class="_line1">
                            <span class="icon_wrap">
                                <img class="icon" src="/assets/tpl/img/icons/ticket-7b7b7b.svg" alt="">
                            </span>
                            8 000
                        </div>
                        <div class="_line1">
                            <span class="icon_wrap">
                                <img class="icon" src="/assets/tpl/img/icons/clock-7b7b7b.svg" alt="">
                            </span>
                            12.08.19
                        </div>
                    </div>
                    <div class="_col2">
                        <button class="orange_butt">Участвовать</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row2">
            <div class="col col1">
                <h2 class="sub_row1">
                    Последние<br> розыгрыши
                </h2>
                <div class="sub_row2 tabs">
                    <ul>
                        <li><a href="#all_games">Все игры</a></li>
                        <li><a href="#my_games">Мои лотереи</a></li>
                    </ul>
                    <div id="all_games">
                        <div class="raffle_card2">
                            <div class="_col1">
                                <div class="_row1">
                                    <img class="image" src="/assets/tpl/img/cards/crown.png" alt="">
                                </div>
                                <div class="_row2">50 000</div>
                                <div class="_row3">Рублей</div>
                            </div>
                            <div class="_col2">
                                <div class="_row4">
                                    <div class="_sub_row1">Победители (999+)</div>
                                    <ul class="_sub_row2">
                                        <li class="_item me"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Вы</li>
                                        <li class="_item"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Сергей</li>
                                        <li class="_item"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Александр</li>
                                        <li class="_item"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Иван</li>
                                    </ul>
                                </div>
                                <div class="_row5">
                                    <div class="_item">
                                        <div class="icon_wrap">
                                            <img class="icon" src="/assets/tpl/img/icons/clock-000.svg" alt="">
                                        </div>
                                        20.08.2019
                                    </div>
                                    <div class="_item">20:00</div>
                                </div>
                            </div>
                        </div>
                        <div class="raffle_card2 red">
                            <div class="_col1">
                                <div class="_row1">
                                    <img class="image" src="/assets/tpl/img/cards/apple-airpods.png" alt="">
                                </div>
                                <div class="_row2">AirPods</div>
                                <div class="_row3">Наушники</div>
                            </div>
                            <div class="_col2">
                                <div class="_row4">
                                    <div class="_sub_row1">Победители (2)</div>
                                    <ul class="_sub_row2">
                                        <li class="_item me"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Вы</li>
                                        <li class="_item"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Сергей</li>
                                    </ul>
                                </div>
                                <div class="_row5">
                                    <div class="_item">
                                        <div class="icon_wrap">
                                            <img class="icon" src="/assets/tpl/img/icons/clock-000.svg" alt="">
                                        </div>
                                        19.08.2019
                                    </div>
                                    <div class="_item">17:30</div>
                                </div>
                            </div>
                        </div>
                        <div class="raffle_card2 blue">
                            <div class="_col1">
                                <div class="_row1">
                                    <img class="image" src="/assets/tpl/img/cards/stars.png" alt="">
                                </div>
                                <div class="_row2">50 000</div>
                                <div class="_row3">Рублей</div>
                            </div>
                            <div class="_col2">
                                <div class="_row4">
                                    <div class="_sub_row1">Победители (9)</div>
                                    <ul class="_sub_row2">
                                        <li class="_item me"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Вы</li>
                                        <li class="_item"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Сергей</li>
                                        <li class="_item"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Александр</li>
                                        <li class="_item"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Иван</li>
                                    </ul>
                                </div>
                                <div class="_row5">
                                    <div class="_item">
                                        <div class="icon_wrap">
                                            <img class="icon" src="/assets/tpl/img/icons/clock-000.svg" alt="">
                                        </div>
                                        15.08.2019
                                    </div>
                                    <div class="_item">15:35</div>
                                </div>
                            </div>
                        </div>
                        <div class="raffle_card2 red">
                            <div class="_col1">
                                <div class="_row1">
                                    <img class="image" src="/assets/tpl/img/cards/crown.png" alt="">
                                </div>
                                <div class="_row2">50 000</div>
                                <div class="_row3">Рублей</div>
                            </div>
                            <div class="_col2">
                                <div class="_row4">
                                    <div class="_sub_row1">Победители (18)</div>
                                    <ul class="_sub_row2">
                                        <li class="_item me"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Вы</li>
                                        <li class="_item"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Сергей</li>
                                        <li class="_item"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Александр</li>
                                        <li class="_item"><div data-src="/assets/tpl/img/header/profile-photo.png" class="_photo"></div> Иван</li>
                                    </ul>
                                </div>
                                <div class="_row5">
                                    <div class="_item">
                                        <div class="icon_wrap">
                                            <img class="icon" src="/assets/tpl/img/icons/clock-000.svg" alt="">
                                        </div>
                                        10.08.2019
                                    </div>
                                    <div class="_item">18:00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="my_games"></div>
                </div>
                <div class="sub_row3">
                    <a href="#" class="grey_butt">История побед</a>
                </div>
            </div>
            <div class="col col2">
                <h2 class="sub_row1">
                    Участвуй в лотерее
                </h2>
                <div class="sub_row4">
                    <? for($i = 0; $i < 4; $i++) : ?>
                        <div class="raffle_card3">
                            <div class="_row1">
                                <div class="_sub_row1"><img class="image" src="/assets/tpl/img/cards/stars.png" alt=""></div>
                                <div class="_sub_row2">4 000</div>
                                <div class="_sub_row3">Рублей</div>
                            </div>
                            <div class="_row2">
                                <div class="_sub_row1">
                                    <div class="_item">
                                        <div class="icon_wrap"><img class="icon" alt="" src="/assets/tpl/img/icons/ticket-7b7b7b.svg"></div>
                                        8 000
                                    </div>
                                    <div class="_item">
                                        <div class="icon_wrap"><img class="icon" alt="" src="/assets/tpl/img/icons/clock-7b7b7b.svg"></div>
                                        12.08.19
                                    </div>
                                </div>
                                <div class="_sub_row2">
                                    <a href="#" class="orange_butt">Участвовать</a>
                                </div>
                            </div>
                        </div>
                        <div class="raffle_card3 red">
                            <div class="_row1">
                                <div class="_sub_row1"><img class="image" src="/assets/tpl/img/cards/notebook-hp.png" alt=""></div>
                                <div class="_sub_row2">Ноутбук</div>
                                <div class="_sub_row3">HP 1564 fd</div>
                            </div>
                            <div class="_row2">
                                <div class="_sub_row1">
                                    <div class="_item">
                                        <div class="icon_wrap"><img class="icon" alt="" src="/assets/tpl/img/icons/ticket-7b7b7b.svg"></div>
                                        132
                                    </div>
                                    <div class="_item">
                                        <div class="icon_wrap"><img class="icon" alt="" src="/assets/tpl/img/icons/clock-7b7b7b.svg"></div>
                                        12.08.19
                                    </div>
                                </div>
                                <div class="_sub_row2">
                                    <a href="#" class="orange_butt">Участвовать</a>
                                </div>
                            </div>
                        </div>
                        <div class="raffle_card3 orange">
                            <div class="_row1">
                                <div class="_sub_row1"><img class="image" src="/assets/tpl/img/cards/crown.png" alt=""></div>
                                <div class="_sub_row2">4 000</div>
                                <div class="_sub_row3">Рублей</div>
                            </div>
                            <div class="_row2">
                                <div class="_sub_row1">
                                    <div class="_item">
                                        <div class="icon_wrap"><img class="icon" alt="" src="/assets/tpl/img/icons/ticket-7b7b7b.svg"></div>
                                        8 000
                                    </div>
                                    <div class="_item">
                                        <div class="icon_wrap"><img class="icon" alt="" src="/assets/tpl/img/icons/clock-7b7b7b.svg"></div>
                                        12.08.19
                                    </div>
                                </div>
                                <div class="_sub_row2">
                                    <a href="#" class="orange_butt">Участвовать</a>
                                </div>
                            </div>
                        </div>
                    <? endfor; ?>
                </div>
                <div class="sub_row3">
                    <a href="#" class="grey_butt">Больше лотерей</a>
                </div>
            </div>
        </div>
    </div></section>
<? $styles[] = '/assets/tpl/css/cards-sect.css'; ?>
<? $scripts[] = '/assets/tpl/js/cards-sect.js'; ?>
<section class="bonus_sect"><div class="wrapper">
        <div class="row1">
            <div class="sub_row0">
                <img class="image" src="/assets/tpl/img/bonus-sect/present-mob.png">
            </div>
            <h2 class="sub_row1">
                Бонус за <span style="color: #FDD030;">регистрацию</span>
            </h2>
            <div class="sub_row2">
                <span style="color: #FDD030;">+30%</span> к депозиту от 100 USD
            </div>
            <div class="sub_row3">
                <div class="line1">Бонусы на депозиты свыше</div>
                <ul class="line2">
                    <li class="item"><span class="gold">50</span> Грамов - 5%,</li>
                    <li class="item"><span class="gold">75</span> Грамов - 10%,</li>
                    <li class="item"><span class="gold">100</span> Грамов - 20%</li>
                </ul>
            </div>
            <div class="sub_row4">
                <div class="line1">Регистрируйся и выиграй</div>
                <div class="line2">
                    <a href="#" class="orange_butt">Регистрация</a>
                </div>
            </div>
        </div>
    </div></section>
<? $styles[] = '/assets/tpl/css/bonus-sect.css'; ?>
<section class="about_sect">
    <div class="wrapper">
        <h2 class="row1">О нас</h2>
        <div class="row2">
            <div class="item">
                <div class="_row1">
                    <img class="icon" src="/assets/tpl/img/about-sect/icon1.svg" alt="">
                </div>
                <div class="_row2">Кто мы</div>
                <div class="_row3">
                    Команда Pro занимаемся блокчейном и финтехом<br>
                    и телегой более 5 лет
                </div>
            </div>
            <div class="item" style="text-align: center;">
                <div class="_row1">
                    <img class="icon" src="/assets/tpl/img/about-sect/diamond.svg" alt="">
                </div>
                <div class="_row2">Мы крутые</div>
                <div class="_row3">Смотри какой джекпот</div>
                <div class="_row4">29 589</div>
                <div class="_row5"><button class="white_bord_butt">Cорвать</button></div>
            </div>
            <div class="item">
                <div class="_row1">
                    <img class="icon" src="/assets/tpl/img/about-sect/icon3.svg" alt="">
                </div>
                <div class="_row2">Все по чесноку</div>
                <div class="_row3">
                    Работаем с рандом.орг, он генерит случайные числа для всех наших лотерей
                </div>
            </div>
        </div>
        <div class="row2">
            <div class="item">
                <div class="_row1">
                    <img class="icon" src="/assets/tpl/img/about-sect/chat.svg" alt="">
                </div>
                <div class="_row2">Киллер</div>
                <div class="_row3">
                    Фича для админов и всех<br>
                    в целом - можно в любом чатике от 3-х человек запускать пользовательские лотереи. Вы получаете<br>
                    10% с каждой! Раскачай аудиторию своего канала
                </div>
            </div>
            <div class="item">
                <div class="_row1">
                    <img class="icon" src="/assets/tpl/img/about-sect/sale.svg" alt="">
                </div>
                <div class="_row2">Мы честные</div>
                <div class="_row3">
                    зарабатываем только на комиссии, мы на долгую
                </div>
            </div>
            <div class="item">
                <div class="_row1">
                    <img class="icon" src="/assets/tpl/img/about-sect/stamp.svg" alt="">
                </div>
                <div class="_row2">Лицензия</div>
                <div class="_row3">У нас есть лицензия Кюрасао</div>
            </div>
            <div class="item">
                <div class="_row1">
                    <img class="icon" src="/assets/tpl/img/about-sect/lottery.svg" alt="">
                </div>
                <div class="_row2">Мы</div>
                <div class="_row3">
                    За дентоализацию демократию правду<br>
                    и добро! Вы сами можете создавать розыгрыши
                </div>
            </div>
        </div>
    </div></section>
<? $styles[] = '/assets/tpl/css/about-sect.css'; ?>
<section class="how_work_sect"><div class="wrapper">
        <h2 class="row1">
            Как это <span class="gold">работает?</span>
        </h2>
        <div class="row2">
            <div class="_row _row1">
                <div class="item">
                    <div class="num">01</div>
                    <div class="icon_wrap">
                        <img class="icon" src="/assets/tpl/img/how-work-sect/racing-flag.svg" alt="">
                    </div>
                    <div class="desc_wrap">
                        <div class="_line1">Старт</div>
                        <div class="_line2">
                            Фича для админов и всех в целом - можно в любом чатике от
                        </div>
                    </div>
                </div>
                <div class="item bottom">
                    <div class="num">02</div>
                    <div class="icon_wrap">
                        <img class="icon" src="/assets/tpl/img/how-work-sect/tickets.svg" alt="">
                    </div>
                    <div class="desc_wrap">
                        <div class="_line1">Лотереи</div>
                        <div class="_line2">
                            Фича для админов и всех в целом - можно в любом чатике от
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="num">03</div>
                    <div class="icon_wrap">
                        <img class="icon" src="/assets/tpl/img/how-work-sect/wheel.svg" alt="">
                    </div>
                    <div class="desc_wrap">
                        <div class="_line1">Розыгрыш</div>
                        <div class="_line2">
                            Фича для админов и всех в целом - можно в любом чатике от
                        </div>
                    </div>
                </div>
            </div>
            <div class="_row _row2">
                <div class="item bottom">
                    <div class="num">04</div>
                    <div class="icon_wrap">
                        <img class="icon" src="/assets/tpl/img/how-work-sect/shuffle.svg" alt="">
                    </div>
                    <div class="desc_wrap">
                        <div class="_line1">
                            Определение<br>
                            победителя
                        </div>
                        <div class="_line2">
                            Фича для админов и всех в целом - можно в любом чатике от
                        </div>
                    </div>
                </div>
                <div class="item bottom">
                    <div class="num">05</div>
                    <div class="icon_wrap">
                        <img class="icon" src="/assets/tpl/img/how-work-sect/winner.svg" alt="">
                    </div>
                    <div class="desc_wrap">
                        <div class="_line1">
                            Получение<br>
                            приза
                        </div>
                        <div class="_line2">
                            Фича для админов и всех в целом - можно в любом чатике от
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></section>
<? $styles[] = '/assets/tpl/css/how-work-sect.css'; ?>
<section class="tg_raffle_sect"><div class="wrapper">
        <div class="row1">
            <div class="col col1">
                <div class="sub_row1">
                    <img class="image" src="/assets/tpl/img/tg-raffle-sect/phone.png" alt="">
                </div>
            </div>
            <div class="col col2">
                <h2 class="sub_row2">
                    Розыгрыши<br> в Telegram
                </h2>
                <div class="sub_row3">
                    Фича для админов и всех в целом - можно в любом чатике от 3-х человек запускать пользовательские лотереи.
                    Вы получаете 10% с каждой!
                    Раскачай аудиторию своего каналаФича для админов и всех в целом - можно в любом чатике от 3-х челау<br>
                    диторию своего канала
                </div>
                <div class="sub_row4">
                    <a href="#" class="grey_butt"><img class="icon" src="/assets/tpl/img/icons/tg-000.svg" alt=""> Перейти в телеграм</a>
                </div>
            </div>
        </div>
    </div></section>
<? $styles[] = '/assets/tpl/css/tg-raffle-sect.css'; ?>
<section class="gift_tickets_sect"><div class="wrapper">
        <h2 class="row1">Больше <span class="gold">беспланых</span> билетов</h2>
        <div class="row2">
            <div class="item">
                <div class="_sub_row1">
                    <div class="_line1">
                        <img class="ticket" src="/assets/tpl/img/gift-tickets-sect/ticket-1.svg" alt="">
                    </div>
                    <div class="_line2">+1</div>
                </div>
                <div class="_sub_row2">
                    Пополни баланс свыше <span class="gold">50$</span><br>
                    и получи <span class="gold">бесплатный билет</span>
                </div>
                <div class="_sub_row3">
                    <a href="#" class="orange_butt">Получить билет</a>
                </div>
            </div>
            <div class="item">
                <div class="_sub_row1">
                    <div class="_line1">
                        <img class="ticket" src="/assets/tpl/img/gift-tickets-sect/ticket-2.svg" alt="">
                    </div>
                    <div class="_line2">+2</div>
                </div>
                <div class="_sub_row2">
                    Пополни баланс свыше <span class="gold">80$</span><br>
                    и получи <span class="gold">бесплатный билет</span>
                </div>
                <div class="_sub_row3">
                    <a href="#" class="orange_butt">Получить билет</a>
                </div>
            </div>
            <div class="item">
                <div class="_sub_row1">
                    <div class="_line1">
                        <img class="ticket" src="/assets/tpl/img/gift-tickets-sect/ticket-3.svg" alt="">
                    </div>
                    <div class="_line2">+3</div>
                </div>
                <div class="_sub_row2">
                    Пополни баланс свыше <span class="gold">500$</span><br>
                    и получи <span class="gold">бесплатный билет</span>
                </div>
                <div class="_sub_row3">
                    <a href="#" class="orange_butt">Получить билет</a>
                </div>
            </div>
        </div>
    </div></section>
<? $styles[] = '/assets/tpl/css/gift-tickets-sect.css'; ?>
<section class="winners_sect"><div class="wrapper">
        <h2 class="row1">Победители</h2>
        <div class="row2 slider">
            <? for($i = 0; $i < 20; $i++) : ?>
            <div class="review">
                <div class="_row1" style="background-image: url(/assets/tpl/img/winners-sect/win-1.png);"></div>
                <div class="_row2">Александр</div>
                <div class="_row3">
                    <div class="_col">Выиграно</div>
                    <div class="_col">20 000 руб.</div>
                </div>
                <div class="_row4">
                    Фича для админов и всех
                    в целом - можно в любом чатике от 3-х человек запускать пользовательские лотереи. Вы получаете 10%
                    с каждой! Раскачай аудиторию своего канала
                </div>
            </div>
            <? endfor; ?>
        </div>
    </div></section>
<? $styles[] = '/assets/tpl/css/winners-sect.css'; ?>
<? $scripts[] = '/assets/tpl/js/winners-sect.js'; ?>
<? include 'parts/footer.php'; ?>