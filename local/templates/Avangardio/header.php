<?php

if (! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

$asset = Asset::getInstance();
$asset->addCss(SITE_TEMPLATE_PATH . '/bootstrap/css/bootstrap.css');
$asset->addJs(SITE_TEMPLATE_PATH . '/bootstrap/js/bootstrap.js');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?echo LANG_CHARSET;?>">
        <?$APPLICATION->ShowMeta("keywords");?>
        <?$APPLICATION->ShowMeta("description");?>
        <title><?$APPLICATION->ShowTitle()?></title>
        <?$APPLICATION->ShowHead()?>
    </head>
    <body>
        <?$APPLICATION->ShowPanel();?>
        <header class="w-100 bg-secondary h-25 sticky-top" style="max-height: 50px;">
            <div><? echo getMessage("HEADER")?></div>
        </header>
