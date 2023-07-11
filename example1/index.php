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
        const button = BX('my-button')
        const result = BX('my-result')

        BX.bind(button, 'click', () => {
            BX.ajax({
                url: '/ajaxhandler.php',
                data: {
                    text: input.value,
                },
                method: 'POST',
                dataType: 'json',
                timeout: 10,
                onsuccess: function( res ) {
                    console.log('res: ', res)
                    result.innerText = res.text;
                },
                onfailure: e => {
                    console.error( e )
                }
            })
        })
    </script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>