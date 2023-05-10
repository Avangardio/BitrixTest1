
<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
$asset -> addCss(SITE_TEMPLATE_PATH . "/styles.css")

?>

<!DOCTYPE html>
<html>
<head>
    <?php $APPLICATION -> ShowHead()?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php $APPLICATION->ShowTitle()?></title>

</head>
<body>
    <?$APPLICATION->ShowPanel();?>
<!-- Хидер -->
    <header>
        <h1>Моя компания</h1>
        <nav>
            <a href="#">Главная</a>
            <a href="#">Новости</a>
            <a href="#">Данные</a>
        </nav>
    </header>
