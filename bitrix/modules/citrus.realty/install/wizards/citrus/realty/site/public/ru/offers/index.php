<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�����������");
if (!\Bitrix\Main\Loader::includeModule("citrus.realty"))
	return;
?><?$APPLICATION->IncludeComponent(
	"citrus:realty.catalog", 
	".default", 
	array(
		"IBLOCK_TYPE" => "realty",
		"IBLOCK_ID" => "offers",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "#SITE_DIR#offers/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_ELEMENT_COUNTER" => "Y",
		"USE_FILTER" => "Y",
		"FILTER_VIEW_MODE" => "VERTICAL",
		"USE_COMPARE" => "N",
		"PRICE_CODE" => array(
			0 => "cost",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => "",
		"SHOW_TOP_ELEMENTS" => "N",
		"TOP_ELEMENT_COUNT" => "9",
		"TOP_LINE_ELEMENT_COUNT" => "2",
		"TOP_ELEMENT_SORT_FIELD" => "shows",
		"TOP_ELEMENT_SORT_ORDER" => "desc",
		"TOP_ELEMENT_SORT_FIELD2" => "id",
		"TOP_ELEMENT_SORT_ORDER2" => "asc",
		"TOP_PROPERTY_CODE" => array(
			0 => "rooms",
			1 => "",
		),
		"SECTION_COUNT_ELEMENTS" => "Y",
		"SECTION_TOP_DEPTH" => "2",
		"SECTIONS_VIEW_MODE" => "LIST",
		"SECTIONS_SHOW_PARENT_NAME" => "N",
		"PAGE_ELEMENT_COUNT" => "15",
		"LINE_ELEMENT_COUNT" => "1",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "shows",
		"ELEMENT_SORT_ORDER2" => "desc",
		"LIST_PROPERTY_CODE" => array(
			0 => "cost",
			1 => "address",
			2 => "district",
			3 => "",
		),
		"INCLUDE_SUBSECTIONS" => "Y",
		"LIST_META_KEYWORDS" => "-",
		"LIST_META_DESCRIPTION" => "-",
		"LIST_BROWSER_TITLE" => "-",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "contact",
			1 => "cost",
			2 => "address",
			3 => "district",
			4 => "rooms",
			5 => "floor",
			6 => "floors",
			7 => "common_area",
			8 => "living_area",
			9 => "citchen_area",
			10 => "balcony",
			11 => "wc",
			12 => "condition",
			13 => "documents",
			14 => "house_type",
			15 => "",
		),
		"DETAIL_META_KEYWORDS" => "-",
		"DETAIL_META_DESCRIPTION" => "-",
		"DETAIL_BROWSER_TITLE" => "-",
		"LINK_IBLOCK_TYPE" => "company",
		"LINK_IBLOCK_ID" => "3",
		"LINK_PROPERTY_SID" => "",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
		"USE_STORE" => "N",
		"PAGER_TEMPLATE" => "realty-table",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "�����������",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "-",
		"MESS_BTN_BUY" => "������",
		"MESS_BTN_ADD_TO_BASKET" => "� �������",
		"MESS_BTN_COMPARE" => "���������",
		"MESS_BTN_DETAIL" => "���������",
		"MESS_NOT_AVAILABLE" => "��� � �������",
		"DETAIL_USE_VOTE_RATING" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"TOP_VIEW_MODE" => "BANNER",
		"DETAIL_DISPLAY_NAME" => "Y",
		"DETAIL_DETAIL_PICTURE_MODE" => "IMG",
		"DETAIL_ADD_DETAIL_TO_SLIDER" => "N",
		"DETAIL_DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"TEMPLATE_THEME" => \Citrus\Realty\Helper::getTheme(),
		"DETAIL_USE_COMMENTS" => "N",
		"DETAIL_BRAND_USE" => "N",
		"FILTER_NAME" => "f",
		"FILTER_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_PROPERTY_CODE" => array(
			0 => "district",
			1 => "rooms",
			2 => "common_area",
			3 => "balcony",
			4 => "wc",
			5 => "house_type",
			6 => "",
		),
		"FILTER_PRICE_CODE" => array(
			0 => "cost",
		),
		"SECTIONS_HIDE_SECTION_NAME" => "N",
		"TOP_ROTATE_TIMER" => "30",
		"SEF_URL_TEMPLATES" => array(
			"sections" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"element" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#/",
			"favourites" => "favourites/",
		)
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>