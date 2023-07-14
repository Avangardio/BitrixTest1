<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

// ID инфоблока
$iblock_id = 6;

// создаем новый элемент в инфоблоке
$el = new CIBlockElement;
$arFields = array(
    "ACTIVE" => "Y",
    "IBLOCK_ID" => $iblock_id,
    "NAME" => "Название элемента",
    "PROPERTY_VALUES" => array(
        "TASK" => $_POST['taskName'],
        "TASK_DESC" => "Описание задачи",
    ),
);

if ($element_id = $el->Add($arFields)) {
    echo "Новый элемент успешно создан!";
} else {
    echo "Ошибка при создании элемента: " . $el->LAST_ERROR;
}
?>