<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

// создаем инфоблок с ID 6 и типом "Контент"
$ib = new CIBlock;
$arFields = array(
    "ACTIVE" => "Y",
    "NAME" => "Название инфоблока",
    "CODE" => "",
    "IBLOCK_TYPE_ID" => "content",
    "SITE_ID" => array("s1"),
);

$iblock_id = $ib->Add($arFields);

// добавляем свойство "TASK" для элементов инфоблока
$ibp = new CIBlockProperty;
$arFields = array(
    "NAME" => "Задача",
    "ACTIVE" => "Y",
    "SORT" => "100",
    "CODE" => "TASK",
    "PROPERTY_TYPE" => "S",
    "IBLOCK_ID" => $iblock_id,
);
$PropID1 = $ibp->Add($arFields);

// добавляем свойство "TASK_DESC" для элементов инфоблока
$arFields = array(
    "NAME" => "Описание задачи",
    "ACTIVE" => "Y",
    "SORT" => "200",
    "CODE" => "TASK_DESC",
    "PROPERTY_TYPE" => "S",
    "IBLOCK_ID" => $iblock_id,
);
$PropID2 = $ibp->Add($arFields);

// проверяем результат и выводим сообщение
if ($iblock_id && $PropID1 && $PropID2) {
    echo "Инфоблок и свойства успешно созданы!";
} else {
    echo "Ошибка при создании инфоблока или свойств: " . $ib->LAST_ERROR . $ibp->LAST_ERROR;
}
?>