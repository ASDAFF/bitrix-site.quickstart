<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?><?$APPLICATION->IncludeComponent("bitrix:news.list",
	"features1",
	array(
	"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "#IBLOCK_ID_services_features#",
		"NEWS_COUNT" => "5",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "BLANK",
			2 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"RS_USE_OWL" => "Y",
		"RS_SHOW_BLOCK_NAME" => "N",
		"RS_LINK" => "LINK",
		"RS_BLANK" => "BLANK",
		"RS_CHANGE_SPEED" => "2000",
		"RS_CHANGE_DELAY" => "80000000",
		"PAGER_TEMPLATE" => "flyaway",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"RS_COLS_IN_ROW" => "4",
		"RS_BLOCK_NAME_IS_LINK" => "N",
		"RS_OWL_CHANGE_SPEED" => "500",
		"RS_OWL_CHANGE_DELAY" => "8000",
		"RS_OWL_PHONE" => "1",
		"RS_OWL_TABLET" => "2",
		"RS_OWL_PC" => "3",
		"COMPONENT_TEMPLATE" => "features1",
		"SET_LAST_MODIFIED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false,
	array(
	"ACTIVE_COMPONENT" => $RSFichi
	)
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"small_banners",
	array(
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "#IBLOCK_ID_services_small_banners#",
		"NEWS_COUNT" => "8",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "BLANK",
			1 => "LINK",
			2 => "TEXT",
			3 => "TEXT_PRICE",
			4 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"RS_USE_OWL" => "N",
		"RS_SHOW_BLOCK_NAME" => "N",
		"RS_LINK" => "LINK",
		"RS_BLANK" => "BLANK",
		"RS_CHANGE_SPEED" => "2000",
		"RS_CHANGE_DELAY" => "80000000",
		"PAGER_TEMPLATE" => "flyaway",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"RS_COLS_IN_ROW" => "4",
		"RS_BLOCK_NAME_IS_LINK" => "N",
		"COMPONENT_TEMPLATE" => "small_banners",
		"SET_LAST_MODIFIED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"RS_NAME" => "TEXT",
		"RS_TEXT" => "TEXT",
		"RS_TEXT_PRICE" => "TEXT_PRICE",
		"RSFLYAWAY_SHOW_BLOCK_NAME" => "N",
		"RSFLYAWAY_BLOCK_NAME_IS_LINK" => "N",
		"RSFLYAWAY_USE_OWL" => "N",
		"RSFLYAWAY_COLS_IN_ROW" => "4",
		"RS_TYPE_BANNER" => "TYPE_BANNER",
		"RS_IS_HOVER_SCALE" => "Y"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => $RSSmallBanners
	)
);?>

<?
global $arrFilter;
$arrFilter = array('PROPERTY_NEW_ITEM_VALUE' => 'Y');
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"light_main",
	array(
		"ACTION_VARIABLE" => "action",
		"ADD_PICT_PROP" => "-",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"BASKET_URL" => "#SITE_DIR#personal/cart/",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "light_main",
		"CONVERT_CURRENCY" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_COMPARE" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"HIDE_NOT_AVAILABLE" => "N",
		"IBLOCK_ID" => "#IBLOCK_ID_catalog_catalog#",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_SUBSECTIONS" => "A",
		"LABEL_PROP" => "-",
		"LINE_ELEMENT_COUNT" => "4",
		"MAIN_TITLE" => "Наличие",
		"MESSAGE_404" => "",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_COMPARE" => "Сравнить",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"MIN_AMOUNT" => "10",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"OFFERS_LIMIT" => "5",
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_ORDER2" => "desc",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "flyaway",
		"PAGER_TITLE" => "Товары",
		"PAGE_ELEMENT_COUNT" => "12",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
			1 => "second",
			2 => "WHOLE",
			3 => "RETAIL",
			4 => "EXTPRICE",
			5 => "EXTPRICE2",
		),
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_DISPLAY_MODE" => "N",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_PROPERTIES" => array(
		),
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PRODUCT_QUANTITY_VARIABLE" => "",
		"PRODUCT_SUBSCRIPTION" => "N",
		"PROPERTY_CODE" => array(
			0 => "CML2_ARTICLE",
			1 => "ACTION_ITEM",
			2 => "BEST_SELLER",
			3 => "NEW_ITEM",
			4 => "BRAND",
			5 => "MOSHNOST",
			6 => "DIAMETR",
			7 => "FOR_TAB_SOSTAV",
			8 => "ACCESSORIES",
			9 => "COLOR_HL",
			10 => "",
		),
		"RSFLYAWAY_PROP_MORE_PHOTO" => "MORE_PHOTO",
		"RSFLYAWAY_PROP_ARTICLEE" => "CML2_ARTICLE",
		"RSFLYAWAY_PROP_OFF_POPUP" => "N",
		"RSFLYAWAY_SORTER_TEMPLATE_DEFAULT" => "showcase",
		"RSFLYAWAY_USE_FAVORITE" => "Y",
		"RSFLYAWAY_SHOW_SORTER" => "Y",
		"RSFLYAWAY_TEMPLATE" => "showcase",
		"SECTION_CODE" => "",
		"SECTION_CODE_PATH" => "",
		"SECTION_ID" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SEF_MODE" => "N",
		"SEF_RULE" => "",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SHOW_CLOSE_POPUP" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_EMPTY_STORE" => "Y",
		"SHOW_GENERAL_STORE_INFORMATION" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"SHOW_SECTION_URL" => "Y",
		"STORES" => array(
			0 => "1",
			1 => "2",
			2 => "3",
		),
		"STORES_FIELDS" => array(
			0 => "TITLE",
			1 => "ADDRESS",
			2 => "",
		),
		"STORE_PATH" => "#SITE_DIR#store/#store_id#",
		"TEMPLATE_THEME" => "blue",
		"USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"USE_MIN_AMOUNT" => "Y",
		"USE_PRICE_COUNT" => "N",
		"USE_PRODUCT_QUANTITY" => "N",
		"USE_STORE" => "Y",
		"OFFERS_PROPERTY_CODE" => array(
			0 => "COLOR_DIRECTORY",
			1 => "SKU_FASOVKA",
			2 => "SKU_SIZE",
			3 => "MORE_PHOTO",
			4 => "",
		),
		"COMPARE_PATH" => "",
		"RSFLYAWAY_PROP_ARTICLE" => "CML2_ARTICLE",
		"RSFLYAWAY_PROP_PRICE" => "-",
		"RSFLYAWAY_PROP_DISCOUNT" => "-",
		"RSFLYAWAY_PROP_CURRENCY" => "-",
		"RSFLYAWAY_PROP_PRICE_DECIMALS" => "0",
		"RSFLYAWAY_PROP_QUANTITY" => "-",
		"RSFLYAWAY_TITLE_SECTION" => "Новинки",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => $RSNew
	)
);?>

<?
global $arrFilter;
$arrFilter = array('PROPERTY_WE_RECCOMENDED_VALUE' => 'Y');
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"recommended_owl",
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "#IBLOCK_ID_catalog_catalog#",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "N",
		"PAGE_ELEMENT_COUNT" => "50",
		"LINE_ELEMENT_COUNT" => "6",
		"PROPERTY_CODE" => array(
			0 => "WE_RECCOMENDED",
			1 => "",
		),
		"OFFERS_FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "PROD_COLOR",
			1 => "PROD_STORAGE_SIZE",
			2 => "PROD_CARRIER",
			3 => "",
		),
		"OFFERS_SORT_FIELD" => "CATALOG_PRICE_1",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"OFFERS_LIMIT" => "0",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"BASKET_URL" => "#SITE_DIR#personal/cart/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
		"DISPLAY_COMPARE" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_PROPERTIES" => array(
			0 => "WE_RECCOMENDED",
		),
		"USE_PRODUCT_QUANTITY" => "N",
		"CONVERT_CURRENCY" => "N",
		"OFFERS_CART_PROPERTIES" => array(
			0 => "PROD_COLOR",
			1 => "PROD_STORAGE_SIZE",
			2 => "PROD_CARRIER",
		),
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Рекомендуемые товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"TITLE_LANG_CODE" => "",
		"MAX_WIDTH" => "200",
		"MAX_HEIGHT" => "200",
		"DISPLAY_TITLE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"DISPLAY_TITLE_TEXT" => "Рекомендуемые товары",
		"PAGE_URL_LIST" => "we_reccomended/",
		"COMPONENT_TEMPLATE" => "recommended",
		"BACKGROUND_IMAGE" => "-",
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"CUSTOM_PRICE_CODE" => "BASE",
		"PROPCODE_IMAGES" => "SKU_MORE_PHOTO",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"RS_OWL_CHANGE_SPEED" => "500",
		"RS_OWL_CHANGE_DELAY" => "8000",
		"RS_OWL_PHONE" => "1",
		"RS_OWL_TABLET" => "3",
		"RS_OWL_MID" => "4",
		"RS_OWL_PC" => "6"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => $RSPopularItem
	)
);
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"services_main",
	Array(
		"COMPONENT_TEMPLATE" => "services_main",
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "#IBLOCK_ID_services_services#",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => "flyaway",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Услуги",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"RSFLYAWAY_USE_OWL" => "Y",
		"RSFLYAWAY_CHANGE_SPEED" => "2000",
		"RSFLYAWAY_CHANGE_DELAY" => "100",
		"RSFLYAWAY_COLS_IN_ROW" => "3",
		"RSFLYAWAY_SHOW_BLOCK_NAME" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"RSFLYAWAY_OWL_CHANGE_SPEED" => "500",
		"RSFLYAWAY_OWL_CHANGE_DELAY" => "8000",
		"RSFLYAWAY_OWL_PHONE" => "1",
		"RSFLYAWAY_OWL_TABLET" => "3",
		"RSFLYAWAY_OWL_MID" => "4",
		"RSFLYAWAY_OWL_PC" => "6",
		"RSFLYAWAY_BLOCK_NAME_IS_LINK" => "N"
	),
	false,
	array(
		"ACTIVE_COMPONENT" => $RSService
	)
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	".default",
	Array(
		"AREA_FILE_SHOW" => "file",
		"PATH" => "#SITE_DIR#include_areas/mainabout.php",
		"EDIT_TEMPLATE" => ""
	),
	false,
	array(
		"ACTIVE_COMPONENT" => $RSAboutAndReviews
	)
);?>


<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"newslistcol",
	array(
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "#IBLOCK_ID_services_news#",
		"NEWS_COUNT" => "12",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "STROKA_POD_STATI",
			1 => "DATA_ACTION",
			2 => "TEXT_MARKER",
			3 => "COLOR_MARKER",
			4 => "PUBLISHER_NAME",
			5 => "PUBLISHER_DESCR",
			6 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"RSFLYAWAY_PROP_PUBLISHER_NAME" => "PUBLISHER_NAME",
		"RSFLYAWAY_PROP_PUBLISHER_LINK" => "PUBLISHER_LINK",
		"RSFLYAWAY_PROP_PUBLISHER_BLANK" => "Y",
		"RSFLYAWAY_PROP_PUBLISHER_DESCR" => "PUBLISHER_DESCR",
		"RSFLYAWAY_SHOW_BLOCK_NAME" => "Y",
		"RSFLYAWAY_BLOCK_NAME_IS_LINK" => "N",
		"RSFLYAWAY_USE_OWL" => "Y",
		"RSFLYAWAY_OWL_CHANGE_SPEED" => "2000",
		"RSFLYAWAY_OWL_CHANGE_DELAY" => "8000",
		"RSFLYAWAY_OWL_PHONE" => "1",
		"RSFLYAWAY_OWL_TABLET" => "2",
		"RSFLYAWAY_OWL_MID" => "4",
		"RSFLYAWAY_OWL_PC" => "4",
		"PAGER_TEMPLATE" => "flyaway",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"RSFLYAWAY_SHOW_DATE" => "N",
		"COMPONENT_TEMPLATE" => "newslistcol",
		"SET_LAST_MODIFIED" => "N",
		"RSFLYAWAY_COLS_IN_ROW" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false,
	array(
		"ACTIVE_COMPONENT" => $RSNews
	)
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"partners",
	array(
		"COMPONENT_TEMPLATE" => "partners",
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "#IBLOCK_ID_services_partners#",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => "flyaway",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"RSFLYAWAY_USE_OWL" => "Y",
		"RSFLYAWAY_CHANGE_SPEED" => "2000",
		"RSFLYAWAY_CHANGE_DELAY" => "8000",
		"RSFLYAWAY_COLS_IN_ROW" => "3",
		"AJAX_OPTION_ADDITIONAL" => "",
		"RSFLYAWAY_SHOW_BLOCK_NAME" => "Y",
		"RSFLYAWAY_OWL_CHANGE_SPEED" => "500",
		"RSFLYAWAY_OWL_CHANGE_DELAY" => "8000",
		"RSFLYAWAY_OWL_PHONE" => "2",
		"RSFLYAWAY_OWL_TABLET" => "3",
		"RSFLYAWAY_OWL_MID" => "4",
		"RSFLYAWAY_OWL_PC" => "6",
		"RSFLYAWAY_BLOCK_NAME_IS_LINK" => "N",
		"SET_LAST_MODIFIED" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false,
	array(
		"ACTIVE_COMPONENT" => $RSPartners
	)
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"gallery",
	array(
		"COMPONENT_TEMPLATE" => "gallery",
		"IBLOCK_TYPE" => "services",
		"IBLOCK_ID" => "#IBLOCK_ID_services_projectphotogallery#",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => "flyaway",
		"DISPLAY_TOP_PAGER" => "Y",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"RSFLYAWAY_SHOW_BLOCK_NAME" => "Y",
		"RSFLYAWAY_USE_OWL" => "Y",
		"RSFLYAWAY_CHANGE_SPEED" => "2000",
		"RSFLYAWAY_CHANGE_DELAY" => "8000",
		"RSFLYAWAY_COLS_IN_ROW" => "3",
		"AJAX_OPTION_ADDITIONAL" => "",
		"RSFLYAWAY_OWL_CHANGE_SPEED" => "500",
		"RSFLYAWAY_OWL_CHANGE_DELAY" => "8000",
		"RSFLYAWAY_OWL_PHONE" => "2",
		"RSFLYAWAY_OWL_TABLET" => "3",
		"RSFLYAWAY_OWL_MID" => "4",
		"RSFLYAWAY_OWL_PC" => "6",
		"RSFLYAWAY_BLOCK_NAME_IS_LINK" => "N",
		"SET_LAST_MODIFIED" => "N",
		"RSFLYAWAY_BLOCK_NAME" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false,
	array(
		"ACTIVE_COMPONENT" => $RSGallery
	)
);?>

<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>