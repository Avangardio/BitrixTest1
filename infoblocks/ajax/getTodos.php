<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php"); // подключаем ядро Битрикса
CModule::IncludeModule("iblock"); // подключаем модуль информационных блоков

$response = [
    'isOk' => false,
    'tasks' => []
];

try {
    $arSelect = Array(
        "ID", "IBLOCK_ID", "NAME",
        "DATE_ACTIVE_FROM", "PROPERTY_*",
        "TASK"
    );
//IBLOCK_ID и ID обязательно должны быть указаны

    $arFilter = Array(
        "IBLOCK_ID"=>IntVal(5), "ACTIVE"=>"Y"
    );

    $res = CIBlockElement::GetList(
        array("ID"=>"ASC"),
        $arFilter,
        false,
        Array("nPageSize"=>50),
        $arSelect
    );
    while($ob = $res->GetNextElement()){
        $arFields = $ob->GetFields();
        //print_r($arFields);
        $arProps = $ob->GetProperties();
        array_push( $response['tasks'], $arProps);
        //print_r($arProps);
    }
    $response['isOk'] = true;
} catch (Exception $fuckGG) {
    $response['isOk'] = false;
    $response['error'] = $fuckGG;
}
header("Content-type: application/json; charset=utf-8");
echo json_encode($response);
