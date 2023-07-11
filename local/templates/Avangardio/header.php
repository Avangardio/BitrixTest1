<?php

if (! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <link href="<?=SITE_TEMPLATE_PATH?>/bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/bootstrap.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $APPLICATION->ShowHead()?>

    <title><?php $APPLICATION->ShowTitle()?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?=SITE_TEMPLATE_PATH?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=SITE_TEMPLATE_PATH?>/favicon/favicon-16x16.png">
</head>

<body>
<?php $APPLICATION->ShowPanel()?>
<div class="main-wrapper" id="app">

