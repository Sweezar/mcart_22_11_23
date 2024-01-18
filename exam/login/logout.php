<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Выход");
$GLOBALS['USER']->Logout();
LocalRedirect("/exam/");
?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>