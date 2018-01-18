<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������");
?> <?$APPLICATION->IncludeComponent("bitrix:catalog", ".default", array(
	"IBLOCK_TYPE" => "#igrushka_IBLOCK_TYPE#",
	"IBLOCK_ID" => "#igrushka_IBLOCK_ID#",
	"BASKET_URL" => "#SITE_DIR#personal/cart/",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"SEF_MODE" => "Y",
	"SEF_FOLDER" => "#SITE_DIR#catalog/",
	"AJAX_MODE" => "N",
	"AJAX_OPTION_JUMP" => "N",
	"AJAX_OPTION_STYLE" => "Y",
	"AJAX_OPTION_HISTORY" => "N",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_FILTER" => "N",
	"CACHE_GROUPS" => "Y",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "Y",
	"USE_FILTER" => "Y",
	"FILTER_NAME" => "",
	"FILTER_FIELD_CODE" => array(
		0 => "NAME",
		1 => "",
	),
	"FILTER_PROPERTY_CODE" => array(
		0 => "NEWPRODUCT",
		1 => "SALELEADER",
		2 => "SPECIALOFFER",
		3 => "SEX",
		4 => "SIZE",
		5 => "HEIGHT",
		6 => "MANUFACTURER",
		7 => "",
	),
	"FILTER_PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_REVIEW" => "Y",
	"MESSAGES_PER_PAGE" => "10",
	"USE_CAPTCHA" => "Y",
	"REVIEW_AJAX_POST" => "Y",
	"PATH_TO_SMILE" => "/bitrix/images/forum/smile/",
	"FORUM_ID" => "#forum_1#",
	"URL_TEMPLATES_READ" => "",
	"SHOW_LINK_TO_FORUM" => "N",
	"POST_FIRST_MESSAGE" => "N",
	"USE_COMPARE" => "Y",
	"COMPARE_NAME" => "CATALOG_COMPARE_LIST",
	"COMPARE_FIELD_CODE" => array(
		0 => "NAME",
		1 => "DETAIL_PICTURE",
		2 => "",
	),
	"COMPARE_PROPERTY_CODE" => array(
		0 => "SEX",
		1 => "AGE",
		2 => "MANUFACTURER",
		3 => "SIZE",
		4 => "",
	),
	"COMPARE_ELEMENT_SORT_FIELD" => "sort",
	"COMPARE_ELEMENT_SORT_ORDER" => "asc",
	"DISPLAY_ELEMENT_SELECT_BOX" => "N",
	"PRICE_CODE" => array(
		0 => "BASE",
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"SHOW_TOP_ELEMENTS" => "N",
	"PAGE_ELEMENT_COUNT" => "10",
	"LINE_ELEMENT_COUNT" => "1",
	"ELEMENT_SORT_FIELD" => "sort",
	"ELEMENT_SORT_ORDER" => "asc",
	"LIST_PROPERTY_CODE" => array(
		0 => "AGE",
		1 => "MANUFACTURER",
		2 => "SEX",
		3 => "SIZE",
		4 => "HEIGHT",
		5 => "COLOR",
	),
	"INCLUDE_SUBSECTIONS" => "Y",
	"LIST_META_KEYWORDS" => "UF_KEYWORDS",
	"LIST_META_DESCRIPTION" => "UF_DESCRIPTION",
	"LIST_BROWSER_TITLE" => "NAME",
	"DETAIL_PROPERTY_CODE" => array(
		0 => "ARTNUMBER",
		1 => "AGE",
		2 => "MANUFACTURER",
		3 => "SEX",
		4 => "SIZE",
		5 => "HEIGHT",
		6 => "COLOR",
		7 => "MATERIAL",
		8 => "RECOMMEND",
		9 => "MORE_PHOTO",		
	),
	"ADD_PROP_TO_CART" => array(		
		0 => "SIZE",
		1 => "HEIGHT",
		2 => "COLOR",		
	),
	"DETAIL_META_KEYWORDS" => "keywords",
	"DETAIL_META_DESCRIPTION" => "description",
	"DETAIL_BROWSER_TITLE" => "NAME",
	"LINK_IBLOCK_TYPE" => "",
	"LINK_IBLOCK_ID" => "",
	"LINK_PROPERTY_SID" => "",
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
	"USE_ALSO_BUY" => "Y",
	"ALSO_BUY_ELEMENT_COUNT" => "3",
	"ALSO_BUY_MIN_BUYES" => "2",
	"DISPLAY_TOP_PAGER" => "Y",
	"DISPLAY_BOTTOM_PAGER" => "Y",
	"PAGER_TITLE" => "",
	"PAGER_SHOW_ALWAYS" => "N",
	"PAGER_TEMPLATE" => "",
	"PAGER_DESC_NUMBERING" => "N",
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
	"PAGER_SHOW_ALL" => "N",
	"PATH_TO_SHIPPING" => "#SITE_DIR#about/delivery/",
	"DISPLAY_IMG_WIDTH" => "100",
	"DISPLAY_IMG_HEIGHT" => "100",
	"DISPLAY_DETAIL_IMG_WIDTH" => "190",
	"DISPLAY_DETAIL_IMG_HEIGHT" => "198",
	"DISPLAY_MORE_PHOTO_WIDTH" => "64",
	"DISPLAY_MORE_PHOTO_HEIGHT" => "64",
	"SHARPEN" => "30",
	"USE_PRICES_RANGE" => "Y",
	"MAKE_LIST" => array(
		0 => "MANUFACTURER",
		1 => "",
	),
	"PRICES_RANGE" => array(
		0 => "0",
		1 => "100",
		2 => "500",
		3 => "1000",
		4 => "3000",
		5 => "",
	),
	"AJAX_OPTION_ADDITIONAL" => "",
	"SEF_URL_TEMPLATES" => array(
		"sections" => "",
		"section" => "#SECTION_CODE#/",
		"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		"compare" => "compare/",
	)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>