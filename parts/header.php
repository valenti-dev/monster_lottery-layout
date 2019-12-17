<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0055C9">
    <link rel="shortcut icon" href="/favicon.png">
    <style>
        body {
            opacity: 0;
        }
    </style>
    <? $scripts = ['/assets/tpl/js/scripts.js']; ?>
    <? $styles = ['/assets/tpl/css/styles.css?v=1']; ?>
</head>
<body class="<?= $body_class; ?>">
<header class="header"><div class="wrapper">
        <div class="row1">
            <div class="col col1">
                <button class="menu_toggle_butt"></button>
                <a href="#" class="logo_wrap">
                    <div class="line1">Monster Lottery</div>
                    <div class="line2">Новое поколение лотерей в Telegram</div>
                </a>
                <nav class="menu_wrap">
                    <ul class="menu">
                        <li class="item"><a href="#">Регулярная лотерея</a></li>
                        <li class="item"><a href="#">Мгновенная лотерея</a></li>
                        <li class="item"><a href="#">Пoмoщь</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col col2">
                <div class="profile_wrap">
                    <div class="_col _col1">
                        <div class="profile_photo" data-src="/assets/tpl/img/header/profile-photo.png"></div>
                        <div class="profile_data">
                            <div class="line1">Константин</div>
                            <div class="line2">290 589 Руб.</div>
                            <div class="line3"><a href="#" class="butt">Пополнить</a></div>
                        </div>
                    </div>
                    <div class="_col _col2">
                        <div class="profile_data">
                            <table class="line4">
                                <tr><td>Мои билеты</td><td>108</td></tr>
                                <tr><td>Фриспины</td><td>14</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--
                <a href="#" class="reg_link">Зарегистрироваться</a>
                <a href="#" class="enter_butt"><span class="icon_wrap"><img class="icon" src="/assets/tpl/img/icons/tg-fff.svg"></span>Войти</a>
                -->
                <label class="lang_select_wrap">
                    <select class="lang_select">
                        <option value="/" data-icon="/assets/tpl/img/icons/ru-lang.svg">Ru</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="row2">
            <div class="sub_row1">
                <button class="menu_toggle_butt"></button>
                <a href="#" class="logo_wrap">
                    <div class="line1">Monster Lottery</div>
                    <div class="line2">Новое поколение лотерей в Telegram</div>
                </a>
                <label class="lang_select_wrap">
                    <select class="lang_select">
                        <option value="/" data-icon="/assets/tpl/img/icons/ru-lang.svg">Ru</option>
                    </select>
                </label>
            </div>
            <div class="sub_row2">
                <div class="cont_wrap">
                    <div class="profile_wrap">
                        <div class="_col _col1">
                            <div class="profile_photo" data-src="/assets/tpl/img/header/profile-photo.png"></div>
                            <div class="profile_data">
                                <div class="line1">Константин</div>
                                <div class="line2">290 589 Руб.</div>
                                <div class="line3"><a href="#" class="butt">Пополнить</a></div>
                            </div>
                        </div>
                        <div class="_col _col2">
                            <div class="profile_data">
                                <table class="line4">
                                    <tr><td>Мои билеты</td><td>108</td></tr>
                                    <tr><td>Фриспины</td><td>14</td></tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <nav class="menu_wrap">
                        <ul class="menu">
                            <li class="item"><a href="#">Регулярная лотерея</a></li>
                            <li class="item"><a href="#">Мгновенная лотерея</a></li>
                            <li class="item"><a href="#">Пoмoщь</a></li>
                        </ul>
                    </nav>
                    <div class="bottom_panel">
                        <div class="_line1">
                            <a href="#" class="reg_link">Зарегистрироваться</a>
                            <a href="#" class="enter_butt"><span class="icon_wrap"><img class="icon" src="/assets/tpl/img/icons/tg-fff.svg"></span>Войти</a>
                        </div>
                        <div class="_line2">
                            <a href="#" target="_blank" class="soc_icon">
                                <img src="/assets/tpl/img/icons/vk-fff.svg" alt="" class="icon">
                            </a>
                            <a href="#" target="_blank" class="soc_icon">
                                <img src="/assets/tpl/img/icons/twitter-fff.svg" alt="" class="icon">
                            </a>
                            <a href="#" target="_blank" class="soc_icon">
                                <img src="/assets/tpl/img/icons/fb-fff.svg" alt="" class="icon">
                            </a>
                            <a href="#" target="_blank" class="soc_icon">
                                <img src="/assets/tpl/img/icons/insta-fff.svg" alt="" class="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></header>
<? $styles[] = '/assets/tpl/css/header.css?v=1'; ?>
<? $scripts[] = '/assets/tpl/js/header.js'; ?>
<main>