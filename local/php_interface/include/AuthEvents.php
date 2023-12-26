<?php

AddEventHandler("main", "OnAfterUserRegister", ["AuthEvents", "OnAfterUserRegisterHandler"]);

class AuthEvents
{
    public static function OnAfterUserRegisterHandler(&$arFields)
    {
        if (isset($arFields['UF_USER_TYPE'])) {
            $arFields["GROUP_ID"][] = $arFields['UF_USER_TYPE'] == 1 ? 8 : 7;
            $path='/auth/';
            LocalRedirect($path);
        }
    }
}

?>
