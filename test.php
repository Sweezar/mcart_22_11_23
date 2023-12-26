<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
?><?$APPLICATION->IncludeComponent(
	"mcart:agents.list", 
	".default", 
	array(
		"AGENTS_COUNT" => "3",
		"CACHE_TIME" => "300",
		"CACHE_TYPE" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"HLBLOCK_TNAME" => "agents",
		"USE_PAGE_NAVIGATION" => "Y",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>