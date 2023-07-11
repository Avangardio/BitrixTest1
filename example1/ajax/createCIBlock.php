<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php"); // подключаем ядро Битрикса

CModule::IncludeModule("iblock"); // подключаем модуль информационных блоков

$iblock_type = "content"; // тип инфоблока
$iblock_name = $_POST["name"]; // название инфоблока
$iblock_code = "new_iblock"; // символьный код инфоблока

$iblock = new CIBlock;
$iblock_id = $iblock->Add(array(
    "ACTIVE" => "Y",
    "NAME" => $iblock_name,
    "CODE" => $iblock_code,
    "IBLOCK_TYPE_ID" => $iblock_type,
    "SITE_ID" => array("s1"),
));

if ($iblock_id) {
    $result = [
        'isSuccess' => true,
        'text' => "user was typing: {$_POST['text']}",
    ];
} else {
    $result = [
        'isSuccess' => true,
        'text' => "user was typing: {$_POST['text']}",
        'error'=> "error is {$iblock->LAST_ERROR}"
    ];
}
header("Content-type: application/json; charset=utf-8");
echo json_encode($result);
?>