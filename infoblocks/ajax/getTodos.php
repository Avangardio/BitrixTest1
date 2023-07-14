<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php"); // подключаем ядро Битрикса
CModule::IncludeModule("iblock"); // подключаем модуль информационных блоков

// ID инфоблока
$iblock_id = 6;

$response = [
    'isOk' => false,
    'tasks' => []
];

try {
    $res = CIBlockElement::GetList(array(), array("IBLOCK_ID" => $iblock_id), false, false, array("ID", "NAME", "PROPERTY_TASK", "PROPERTY_TASK_DESC"));

    while ($arFields = $res->GetNext()) {
        // выводим значения полей элемента
        array_push($response['tasks'], $arFields);
    }
    $response['isOk'] = true;
} catch (Exception $fuckGG) {
    $response['isOk'] = false;
    $response['error'] = $fuckGG;
}
header("Content-type: application/json; charset=utf-8");
echo json_encode($response);
