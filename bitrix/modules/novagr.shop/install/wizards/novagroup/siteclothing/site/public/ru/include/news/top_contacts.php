<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "top_contacts",
    Array(
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "system",
		"IBLOCK_ID" => "#SYSTEM_IBLOCK_ID#",
        "ELEMENT_ID" => '',
        "ELEMENT_CODE" => "block-contacts",
        "CHECK_DATES" => "Y",
        "FIELD_CODE" => array(),
        "PROPERTY_CODE" => array(),
        "IBLOCK_URL" => "",
        "META_KEYWORDS" => "-",
        "META_DESCRIPTION" => "-",
        "BROWSER_TITLE" => "-",
        "SET_TITLE" => "N",
        "SET_STATUS_404" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "USE_PERMISSIONS" => "N",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "36000000",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => GetMessage("T_PAGER_TITLE"),
        "PAGER_TEMPLATE" => "",
        "PAGER_SHOW_ALL" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "AJAX_OPTION_HISTORY" => "N",
    	"IS_MOBILE" => isMobile()
    ),
false
);?>