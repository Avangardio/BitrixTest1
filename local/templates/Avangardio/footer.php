<?php
if (! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>
<footer class="footer">
    <div class="footer__content">
        <div class="footer__logo">
            <a href="/">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="Логотип">
            </a>
        </div>
        <div class="footer__menu">
            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "bottom",
                Array(
                    "ROOT_MENU_TYPE" => "bottom",
                    "MAX_LEVEL" => "1",
                    "USE_EXT" => "N"
                )
            );?>
        </div>
        <div class="footer__contacts">
            <p>Телефон: +7 (495) 123-45-67</p>
            <p>Email: info@example.com</p>
        </div>
    </div>
    <div class="footer__bottom">
        <p>&copy; <?=date('Y')?> Название компании</p>
    </div>
</footer>