<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������");
?><?$APPLICATION->IncludeComponent("bitrix:news", "services", Array(
	"IBLOCK_TYPE" => "realty",	// ��� ���������
	"IBLOCK_ID" => "services",	// ��������
	"NEWS_COUNT" => "20",	// ���������� �������� �� ��������
	"USE_SEARCH" => "N",	// ��������� �����
	"USE_RSS" => "N",	// ��������� RSS
	"USE_RATING" => "N",	// ��������� �����������
	"USE_CATEGORIES" => "N",	// �������� ��������� �� ����
	"USE_FILTER" => "N",	// ���������� ������
	"SORT_BY1" => "SORT",	// ���� ��� ������ ���������� ��������
	"SORT_ORDER1" => "ASC",	// ����������� ��� ������ ���������� ��������
	"SORT_BY2" => "ID",	// ���� ��� ������ ���������� ��������
	"SORT_ORDER2" => "ASC",	// ����������� ��� ������ ���������� ��������
	"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
	"SEF_MODE" => "Y",	// �������� ��������� ���
	"SEF_FOLDER" => "#SITE_DIR#services/",	// ������� ��� (������������ ����� �����)
	"AJAX_MODE" => "N",	// �������� ����� AJAX
	"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
	"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
	"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
	"CACHE_TYPE" => "A",	// ��� �����������
	"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
	"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
	"CACHE_GROUPS" => "Y",	// ��������� ����� �������
	"SET_STATUS_404" => "Y",	// ������������� ������ 404, ���� �� ������� ������� ��� ������
	"SET_TITLE" => "Y",	// ������������� ��������� ��������
	"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// �������� �������� � ������� ���������
	"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
	"ADD_ELEMENT_CHAIN" => "N",	// �������� �������� �������� � ������� ���������
	"USE_PERMISSIONS" => "N",	// ������������ �������������� ����������� �������
	"PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
	"LIST_ACTIVE_DATE_FORMAT" => "j F Y",	// ������ ������ ����
	"LIST_FIELD_CODE" => array(	// ����
		0 => "",
		1 => "",
	),
	"LIST_PROPERTY_CODE" => array(	// ��������
		0 => "",
		1 => "",
	),
	"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
	"DISPLAY_NAME" => "Y",	// �������� �������� ��������
	"META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� ��������
	"META_DESCRIPTION" => "-",	// ���������� �������� �������� �� ��������
	"BROWSER_TITLE" => "title",	// ���������� ��������� ���� �������� �� ��������
	"DETAIL_ACTIVE_DATE_FORMAT" => "j F Y",	// ������ ������ ����
	"DETAIL_FIELD_CODE" => array(	// ����
		0 => "",
		1 => "",
	),
	"DETAIL_PROPERTY_CODE" => array(	// ��������
		0 => "",
		1 => "",
	),
	"DETAIL_DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
	"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
	"DETAIL_PAGER_TITLE" => "��������",	// �������� ���������
	"DETAIL_PAGER_TEMPLATE" => "",	// �������� �������
	"DETAIL_PAGER_SHOW_ALL" => "Y",	// ���������� ������ "���"
	"PAGER_TEMPLATE" => "",	// ������ ������������ ���������
	"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
	"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
	"PAGER_TITLE" => "������",	// �������� ���������
	"PAGER_SHOW_ALWAYS" => "N",	// �������� ������
	"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
	"PAGER_SHOW_ALL" => "N",	// ���������� ������ "���"
	"DISPLAY_DATE" => "N",	// �������� ���� ��������
	"DISPLAY_PICTURE" => "N",	// �������� ����������� ��� ������
	"DISPLAY_PREVIEW_TEXT" => "N",	// �������� ����� ������
	"USE_SHARE" => "N",	// ���������� ������ ���. ��������
	"GROUP_BY_MONTH" => "N",	// ������������ ������ �� �������
	"RESIZE_IMAGE_WIDTH" => "150",	// ������ ������-�������� (PREVIEW_PICTURE � DETAIL_PICTURE)
	"RESIZE_IMAGE_HEIGHT" => "150",	// ������ ������-�������� (PREVIEW_PICTURE � DETAIL_PICTURE)
	"MORE_PHOTO" => "",	// �������� �������������� �������� �� �������� (�� ��������� ��������)
	"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
	"SEF_URL_TEMPLATES" => array(
		"news" => "",
		"section" => "",
		"detail" => "#ELEMENT_CODE#/",
	)
	),
	false
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>