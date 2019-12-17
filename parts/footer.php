</main>
<footer class="footer"><div class="wrapper">
        <div class="row1">
            <div class="col col1">
                <div class="sub_row1">
                    <a href="#" class="white_bord_butt"><img class="icon" src="/assets/tpl/img/icons/tg-fff.svg" alt=""> Телеграмм</a>
                    <a href="#" class="white_bord_butt"><img class="icon" src="/assets/tpl/img/icons/tg-fff.svg" alt=""> Чат телеграмм</a>
                </div>
            </div>
            <div class="col col2">
                <div class="sub_row2">
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
    </div></footer>
<? $styles[] = '/assets/tpl/css/footer.css'; ?>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!---->
<script src="/assets/tpl/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="/assets/tpl/plugins/jquery-ui-1.12.1/jquery-ui.min.css">
<!---->
<script src="/assets/tpl/plugins/jquery.lazy-master/jquery.lazy.min.js"></script>
<!---->
<script src="/assets/tpl/plugins/slick-master/slick/slick.js"></script>
<link rel="stylesheet" href="/assets/tpl/plugins/slick-master/slick/slick.css">
<!---->
<? foreach ($styles as $style) : ?>
    <link rel="stylesheet" href="<?= $style; ?>">
<? endforeach; ?>
<? foreach ($scripts as $script) : ?>
    <script src="<?= $script; ?>"></script>
<? endforeach; ?>
</html>