<?php
#if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__DIR__ . "/local/lang/${LANGUAGE_ID}/${$_SERVER['SCRIPT_NAME']}");
CJSCore::Init(array('ajax'));
$APPLICATION->SetTitle(Loc::getMessage("TEST_PAGE_TITLE", "ru"));
echo $_SERVER['DOCUMENT_ROOT'] . "/local/lang/${LANGUAGE_ID}/${$_SERVER['SCRIPT_NAME']}";
?>

    <div id="my-form">
        <input id="my-input">
    </div>
    <button id="my-button">send ajax request</button>
    <div id="my-result" style="margin:10px 0;padding:.5em;border:1px solid #ececec;"></div>

<?php echo $LANGUAGE_ID?>
    <div id="my-form">
        <input id="inputAdd">
    </div>
<b><?echo GetMessage("ADD_TASK")?></b>
    <button id="buttonAdd"><?echo getMessage("ADD_TASK")?></button>

    <div id="all-tasks"/>
    </div>

    <script>
        const input = BX('my-input')
        const button1 = BX('my-button')
        const result = BX('my-result')

        const inputAdd = BX('inputAdd')
        const buttonAdd = BX('buttonAdd')

        const allTasks= BX('all-tasks');

        BX.ready(async () => {
            let result;
            BX.ajax({
                url: '/infoblocks/ajax/getTodos.php',
                method: 'GET',
                timeout: 10,
                onsuccess: function (r) {
                    const res = JSON.parse(r)
                    if(!res["isOk"]) return;
                    console.log(res['tasks'])
                    for(let task of res['tasks']){
                        const newDiv = document.createElement('div');
                        const eleId = document.createElement('a').innerText = task['ID'];
                        const eleTaskName = document.createElement('a').innerText = task['PROPERTY_TASK_VALUE'];
                        newDiv.append(eleId);
                        newDiv.append(eleTaskName);
                        allTasks.appendChild(newDiv);
                    }
                },
                onfailure: e => {
                    console.error(e)

                }
            })
            console.log(result)


            BX.bind(button1, 'click', () => {
                BX.ajax({
                    url: '/infoblocks/ajax/createCIBlock.php',
                    data: {
                        name: input.value,
                    },
                    method: 'POST',
                    dataType: 'json',
                    timeout: 10,
                    onsuccess: function (res) {
                        console.log('res: ', res)
                        result.innerText = res.id;
                    },
                    onfailure: e => {
                        console.error(e)
                        result.interText = e.error;
                    }
                })
            })
            BX.bind(buttonAdd, 'click', () => {
                BX.ajax({
                    url: '/infoblocks/ajax/addTodo.php',
                    data: {
                        taskName: inputAdd.value,
                    },
                    method: 'POST',
                    dataType: 'json',
                    timeout: 10,
                    onsuccess: function (res) {
                        alert('success')
                    },
                    onfailure: e => {
                        console.log(e)
                    }
                })
            })
        })
    </script>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>