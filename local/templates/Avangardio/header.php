<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?$APPLICATION->ShowHead()?>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css">
</head>
<body>
<header class="header">
    <div class="header__logo">
        <a href="/">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt="Логотип">
        </a>
    </div>
    <nav class="header__menu">
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top",
            Array(
                "ROOT_MENU_TYPE" => "top",
                "MAX_LEVEL" => "1",
                "USE_EXT" => "N"
            )
        );?>
    </nav>
</header>