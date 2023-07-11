<?php

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CJSCore::Init(array('ajax'));
?>

    <div id="my-form">
        <input id="my-input">
    </div>
    <button id="my-button">send ajax request</button>
    <div id="my-result" style="margin:10px 0;padding:.5em;border:1px solid #ececec;"></div>
    </div>

    <script>
        const input = BX('my-input')
        const button1 = BX('my-button')
        const result = BX('my-result')
        BX.bind(button1, 'click', () => {
            BX.ajax({
                url: '/infoblocks/ajax/createCIBlock.php',
                data: {
                    name: input.value,
                },
                method: 'POST',
                dataType: 'json',
                timeout: 10,
                onsuccess: function( res ) {
                    console.log('res: ', res)
                    result.innerText = res.id;
                },
                onfailure: e => {
                    console.error( e )
                    result.interText = e.error;
                }
            })
        })
    </script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>