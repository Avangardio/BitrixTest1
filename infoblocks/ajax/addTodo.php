<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");
    $props = array(
        "PROPERTY_1" => "Значение свойства 1",
        "PROPERTY_2" => "Значение свойства 2",
        "TASK" => $_POST['taskName']);
        // добавьте свойства, которые нужны для вашего элемента
    $fields = array(
        "IBLOCK_ID" => 5,
        "IBLOCK_CODE" => "content",
        "NAME" => "Название элемента",
        "ACTIVE" => "Y",
        "PROPERTY_VALUES" => $props, // массив свойств, созданный на предыдущем шаге
    );
        $el = new CIBlockElement;
        $element_id = $el->Add($fields);

        if ($element_id) {
            echo "Новый элемент успешно добавлен с ID " . $element_id;
            header("Content-type: application/json; charset=utf-8");
            echo ('ok');
        } else {
            echo "Ошибка при добавлении нового элемента: " . $el->LAST_ERROR;
        }
