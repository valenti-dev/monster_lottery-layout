<? include '../parts/header.php'; ?>
    <section class="cards_sect">
        <div class="wrapper">
            <div class="row2">
                <div class="col col2">
                    <ul class="sub_row5 breadcrumbs_list">
                        <li class="_item"><a href="#">Главная</a></li>
                    </ul>
                    <h1 class="sub_row1">
                            <span class="icon_wrap">
                                <img class="icon" src="/assets/tpl/img/icons/question-red.svg" alt="">
                            </span>
                        Пoмoщь
                    </h1>
                    <div class="sub_row7">
                        <? for ($i = 0; $i < 2; $i++) : ?>
                            <div class="faq_cat_card">
                                <div class="_row1">
                                    <img alt="" class="icon" src="/assets/tpl/img/cards-sect/faq/credit-cards-fff.svg">
                                </div>
                                <h2 class="_row2">Оплата</h2>
                                <div class="_row3">
                                    Общая информация<br>
                                    об информации
                                </div>
                                <ul class="_row4">
                                    <li><a href="#">Вопрос?</a></li>
                                    <li><a href="#">Длинный вопрос об оплате?</a></li>
                                    <li><a href="#">Еще один вопрос?</a></li>
                                    <li><a href="#">Продам котят?</a></li>
                                </ul>
                                <div class="_row5">
                                    <a href="#" class="white_bord_butt">Посмотреть все</a>
                                </div>
                            </div>
                            <div class="faq_cat_card gradient">
                                <div class="_row1">
                                    <img alt="" class="icon" src="/assets/tpl/img/cards-sect/faq/wallet-fff.svg">
                                </div>
                                <h2 class="_row2">Выплата</h2>
                                <div class="_row3">
                                    Общая информация<br>
                                    об информации
                                </div>
                                <ul class="_row4">
                                    <li><a href="#">Вопрос?</a></li>
                                    <li><a href="#">Длинный вопрос об оплате?</a></li>
                                </ul>
                                <div class="_row5">
                                    <a href="#" class="white_bord_butt">Посмотреть все</a>
                                </div>
                            </div>
                            <div class="faq_cat_card gold">
                                <div class="_row1">
                                    <img alt="" class="icon" src="/assets/tpl/img/cards-sect/faq/wheel-000.svg">
                                </div>
                                <h2 class="_row2">Лотереи</h2>
                                <div class="_row3">
                                    Общая информация<br>
                                    об информации
                                </div>
                                <ul class="_row4">
                                    <li><a href="#">Вопрос?</a></li>
                                    <li><a href="#">Длинный вопрос об оплате?</a></li>
                                    <li><a href="#">Еще один вопрос?</a></li>
                                </ul>
                                <div class="_row5">
                                    <a href="#" class="white_bord_butt">Посмотреть все</a>
                                </div>
                            </div>
                            <div class="faq_cat_card">
                                <div class="_row1">
                                    <img alt="" class="icon" src="/assets/tpl/img/cards-sect/faq/telegram-fff.svg">
                                </div>
                                <h2 class="_row2">Каналы</h2>
                                <div class="_row3">
                                    Общая информация<br>
                                    об информации
                                </div>
                                <ul class="_row4">
                                    <li><a href="#">Вопрос?</a></li>
                                    <li><a href="#">Длинный вопрос об оплате?</a></li>
                                    <li><a href="#">Еще один вопрос?</a></li>
                                    <li><a href="#">Продам котят?</a></li>
                                </ul>
                                <div class="_row5">
                                    <a href="#" class="white_bord_butt">Посмотреть все</a>
                                </div>
                            </div>
                        <? endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<? $styles[] = '/assets/tpl/css/cards-sect.css'; ?>
<? $scripts[] = '/assets/tpl/js/cards-sect.js'; ?>
<? include '../parts/footer.php'; ?>