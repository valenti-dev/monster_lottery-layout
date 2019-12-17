<? include 'parts/header.php'; ?>
    <section class="cards_sect"><div class="wrapper">
            <div class="row2">
                <div class="col col2">
                    <ul class="sub_row5 breadcrumbs_list">
                        <li class="_item"><a href="#">Главная</a></li>
                    </ul>
                    <h1 class="sub_row1">
                            <span class="icon_wrap">
                                <img class="icon" src="/assets/tpl/img/icons/success-gold.svg" alt="">
                            </span>
                        Последние розыгрыши
                    </h1>
                    <div class="sub_row4">
                        <? for($i = 0; $i < 8; $i++) : ?>
                            <div class="raffle_card2 blue">
                                <div class="_col1">
                                    <div class="_row1">
                                        <img class="image" src="/assets/tpl/img/cards/stars.png" alt="">
                                    </div>
                                    <div class="_row2">4 000</div>
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
                                            Лотерея разыграна
                                        </div>
                                        <div class="_item">
                                            <div class="icon_wrap">
                                                <img class="icon" src="/assets/tpl/img/icons/clock-7b7b7b.svg" alt="">
                                            </div>
                                            15.08.2019
                                        </div>
                                        <div class="_item">15:35</div>
                                    </div>
                                </div>
                            </div>
                        <? endfor; ?>
                    </div>
                </div>
            </div>
        </div></section>
<? $styles[] = '/assets/tpl/css/cards-sect.css'; ?>
<? $scripts[] = '/assets/tpl/js/cards-sect.js'; ?>
<? include 'parts/footer.php'; ?>