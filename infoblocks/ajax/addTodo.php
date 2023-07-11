<?php
$el = new CIBlockElement;
$arLoadProductArray = Array(
    "IBLOCK_SECTION_ID"	=> 0, // ID раздела
    "IBLOCK_ID"		=> 5,
    "NAME"			=> 'Tasks',
    "ACTIVE"		=> 'Y',
    "PREVIEW_TEXT"		=> '',
    "DETAIL_TEXT"		=> '',
    "CODE"			=> 'code',
    "TASK" => $_POST['taskName'],

    "IPROPERTY_TEMPLATES"=>Array(
        "ELEMENT_META_TITLE" 		=> '',
        "ELEMENT_META_DESCRIPTION" 	=> '',
        "ELEMENT_META_KEYWORDS" 	=> '',
    ),
);
