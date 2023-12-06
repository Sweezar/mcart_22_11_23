<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
<div class="site-section border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
<?$APPLICATION->IncludeComponent("bitrix:map.yandex.search", "map", Array(
	"API_KEY" => "",	// Ключ API
		"CONTROLS" => array(	// Элементы управления
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",	// Стартовый тип карты
		"MAP_DATA" => "a:3:{s:10:\"yandex_lat\";d:55.35962192531258;s:10:\"yandex_lon\";d:37.898690085006045;s:12:\"yandex_scale\";i:15;}",	// Начальная позиция карты
		"MAP_HEIGHT" => "500",	// Высота карты
		"MAP_ID" => "",	// Идентификатор карты
		"MAP_WIDTH" => "600",	// Ширина карты
		"OPTIONS" => array(	// Настройки
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		)
	),
	false
);?>
</div>
<div class="col-md-5 ml-auto"  data-aos="fade-up" data-aos-delay="200">
	<div class="site-section-title mb-3">
		<h2>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "title",
		"EDIT_TEMPLATE" => ""
	)
);?>
</h2>
	</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_SHOW" => "page",
		"AREA_FILE_SUFFIX" => "text",
		"EDIT_TEMPLATE" => ""
	)
);?>
</div>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>