<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������� ������ � ���� ��������");
?> 
<p align="justify">��������� ������������! 
  <br />
 <strong>��������� �������� ������ � ����� ����������� ���������� 5 000 ������ ������� ���������</strong>. ��, �� ����� ���� ���������� ������ ��������� ��������� ������� ����� ������ ��� ������� ������. ������� �� ����� ����������� �� ��� ���� ������������� ������, ��� ����� ��������� ������� ����������� � ����� �����. ��� �� ����� ������� ��������� ����� �� ������������� ������. ����� ������� �� ������� ��� ������ ��������� ������� ������ ������ ����������. 
  <br />
 
  <br />
 </p>
 
<?$APPLICATION->IncludeComponent("bitrix:catalog", "template1", Array(
	"IBLOCK_TYPE" => "avtoservice",	// ��� ���������
	"IBLOCK_ID" => "#KUZOV__IBLOCK_ID#",	// ��������
	"BASKET_URL" => "/personal/basket.php",	// URL, ������� �� �������� � �������� ����������
	"ACTION_VARIABLE" => "action",	// �������� ����������, � ������� ���������� ��������
	"PRODUCT_ID_VARIABLE" => "id",	// �������� ����������, � ������� ���������� ��� ������ ��� �������
	"SECTION_ID_VARIABLE" => "SECTION_ID",	// �������� ����������, � ������� ���������� ��� ������
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",	// �������� ����������, � ������� ���������� ���������� ������
	"SEF_MODE" => "N",	// �������� ��������� ���
	"SEF_FOLDER" => "/",	// ������� ��� (������������ ����� �����)
	"AJAX_MODE" => "N",	// �������� ����� AJAX
	"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
	"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
	"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
	"CACHE_TYPE" => "A",	// ��� �����������
	"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
	"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
	"CACHE_GROUPS" => "Y",	// ��������� ����� �������
	"SET_TITLE" => "Y",	// ������������� ��������� ��������
	"SET_STATUS_404" => "N",	// ������������� ������ 404, ���� �� ������� ������� ��� ������
	"USE_FILTER" => "N",	// ���������� ������
	"USE_COMPARE" => "N",	// ������������ ��������� ���������
	"PRICE_CODE" => "",	// ��� ����
	"USE_PRICE_COUNT" => "N",	// ������������ ����� ��� � �����������
	"SHOW_PRICE_COUNT" => "1",	// �������� ���� ��� ����������
	"PRICE_VAT_INCLUDE" => "Y",	// �������� ��� � ����
	"PRICE_VAT_SHOW_VALUE" => "N",	// ���������� �������� ���
	"USE_PRODUCT_QUANTITY" => "N",	// ��������� �������� ���������� ������
	"SHOW_TOP_ELEMENTS" => "N",	// �������� ��� ���������
	"SECTION_COUNT_ELEMENTS" => "N",	// ���������� ���������� ��������� � �������
	"PAGE_ELEMENT_COUNT" => "30",	// ���������� ��������� �� ��������
	"LINE_ELEMENT_COUNT" => "3",	// ���������� ���������, ��������� � ����� ������ �������
	"ELEMENT_SORT_FIELD" => "sort",	// �� ������ ���� ��������� ������ � �������
	"ELEMENT_SORT_ORDER" => "asc",	// ������� ���������� ������� � �������
	"LIST_PROPERTY_CODE" => array(	// ��������
		0 => "PRICHINA",
		1 => "PRICE",
		2 => "",
	),
	"INCLUDE_SUBSECTIONS" => "Y",	// ���������� �������� ����������� �������
	"LIST_META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� �������� �������
	"LIST_META_DESCRIPTION" => "-",	// ���������� �������� �������� �� �������� �������
	"LIST_BROWSER_TITLE" => "-",	// ���������� ��������� ���� �������� �� �������� �������
	"DETAIL_PROPERTY_CODE" => array(	// ��������
		0 => "",
		1 => "",
	),
	"DETAIL_META_KEYWORDS" => "-",	// ���������� �������� ����� �������� �� ��������
	"DETAIL_META_DESCRIPTION" => "-",	// ���������� �������� �������� �� ��������
	"DETAIL_BROWSER_TITLE" => "-",	// ���������� ��������� ���� �������� �� ��������
	"LINK_IBLOCK_TYPE" => "",	// ��� ���������, �������� �������� ������� � ������� ���������
	"LINK_IBLOCK_ID" => "",	// ID ���������, �������� �������� ������� � ������� ���������
	"LINK_PROPERTY_SID" => "",	// ��������, � ������� �������� �����
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",	// URL �� �������� ��� ����� ������� ������ ��������� ���������
	"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
	"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
	"PAGER_TITLE" => "������",	// �������� ���������
	"PAGER_SHOW_ALWAYS" => "Y",	// �������� ������
	"PAGER_TEMPLATE" => "",	// �������� �������
	"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
	"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
	"PAGER_SHOW_ALL" => "Y",	// ���������� ������ "���"
	"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
	"VARIABLE_ALIASES" => array(
		"SECTION_ID" => "SECTION_ID",
		"ELEMENT_ID" => "ELEMENT_ID",
	)
	),
	false
);?>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>