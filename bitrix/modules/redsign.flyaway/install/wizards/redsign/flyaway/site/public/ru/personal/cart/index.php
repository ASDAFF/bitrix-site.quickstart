<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket", 
	"flyaway", 
	array(
	    "COMPONENT_TEMPLATE" => "flyaway",
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
		"COLUMNS_LIST" => array(
			0 => "NAME",
			1 => "DISCOUNT",
			2 => "WEIGHT",
			3 => "PROPS",
			4 => "DELETE",
			5 => "DELAY",
			6 => "TYPE",
			7 => "PRICE",
			8 => "QUANTITY",
			9 => "SUM",
			10 => "PROPERTY_CML2_ARTICLE",
			11 => "PROPERTY_ACTION_ITEM",
			12 => "PROPERTY_BEST_SELLER",
			13 => "PROPERTY_NEW_ITEM",
			14 => "PROPERTY_BRAND",
			15 => "PROPERTY_MOSHNOST",
			16 => "PROPERTY_DIAMETR",
			17 => "PROPERTY_vote_count",
			18 => "PROPERTY_vote_sum",
			19 => "PROPERTY_rating",
			20 => "PROPERTY_FORUM_TOPIC_ID",
			21 => "PROPERTY_FORUM_MESSAGE_CNT",
			22 => "PROPERTY_AKKUMULATOR",
			23 => "PROPERTY_31",
			24 => "PROPERTY_32",
			25 => "PROPERTY_33",
			26 => "PROPERTY_HOD",
			27 => "PROPERTY_35",
			28 => "PROPERTY_36",
			29 => "PROPERTY_37",
			30 => "PROPERTY_WE_RECCOMENDED",
			31 => "PROPERTY_SIMILAR_PRODUCTS",
			32 => "PROPERTY_DOCS",
			33 => "PROPERTY_COLOR_KORPUS",
			34 => "PROPERTY_DATE_SALE",
			35 => "PROPERTY_FOR_TAB_SOSTAV",
			36 => "PROPERTY_ACCESSORIES",
			37 => "PROPERTY_MORE_PHOTO",
			38 => "PROPERTY_COLOR_HL",
			39 => "PROPERTY_COLOR_DIRECTORY",
			40 => "PROPERTY_SKU_FASOVKA",
			41 => "PROPERTY_SKU_SIZE",
		),
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"PATH_TO_ORDER" => "/personal/order/make/",
		"HIDE_COUPON" => "N",
		"QUANTITY_FLOAT" => "N",
		"PRICE_VAT_SHOW_VALUE" => "Y",
		"TEMPLATE_THEME" => "site",
		"SET_TITLE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"OFFERS_PROPS" => array(
			0 => "COLOR_DIRECTORY",
			1 => "SKU_FASOVKA",
			2 => "SKU_SIZE",
		),
		"USE_PREPAYMENT" => "N",
		"ACTION_VARIABLE" => "action",
		"AUTO_CALCULATION" => "Y",
		"RSFLYAWAY_PROP_ARTICLE" => "CML2_ARTICLE",
		"RSFLYAWAY_PROP_SKU_ARTICLE" => "",
		"USE_GIFTS" => "Y",
		"GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_TEXT_LABEL_GIFT" => "Подарок",
		"GIFTS_PRODUCT_QUANTITY_VARIABLE" => "undefined",
		"GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
		"GIFTS_SHOW_OLD_PRICE" => "N",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_NAME" => "Y",
		"GIFTS_SHOW_IMAGE" => "Y",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MESS_BTN_DETAIL" => "Подробнее",
		"GIFTS_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_CONVERT_CURRENCY" => "N",
		"GIFTS_HIDE_NOT_AVAILABLE" => "N",
		"RSFLYAWAY_AVAL_BASKET" => "Y"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>