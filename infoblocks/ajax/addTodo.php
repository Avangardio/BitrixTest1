<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("iblock");

// создаем массив свойств для нового элемента
$props = array(
    "PROPERTY_VALUES" => array(
        "MANUFACTURER" =>"Имя производителя", //Производитель - свойство
        "ARTNUMBER" =>"Артикул товара", //Артикул производителя - свойство
        "MATERIAL" =>"Материал товара" //Материал - свойство
    )
);

// создаем массив с данными для нового элемента
$fields = array(
    "IBLOCK_ID" => 5,
    "IBLOCK_CODE" => "content",
    "NAME" => "Название элемента",
    "ACTIVE" => "Y",
    "PROPERTY_VALUES" => array(
        "MANUFACTURER" =>"Имя производителя", //Производитель - свойство
        "ARTNUMBER" =>"Артикул товара", //Артикул производителя - свойство
        "MATERIAL" =>"Материал товара" //Материал - свойство
    )
        // добавьте свойства, которые нужны для вашего элемента
        // массив свойств, созданный на предыдущем шаге
);

// добавляем новый элемент в инфоблок
$el = new CIBlockElement;
$element_id = $el->Add($fields);

// проверяем результат и выводим сообщение
if ($element_id) {
    echo "Новый элемент успешно добавлен с ID " . $element_id;
} else {
    echo "Ошибка при добавлении нового элемента: " . $el->LAST_ERROR;
}
?>