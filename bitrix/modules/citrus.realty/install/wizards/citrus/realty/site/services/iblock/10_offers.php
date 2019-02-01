<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (!\Bitrix\Main\Loader::includeModule("citrus.realty"))
	return;

WizardServices::IncludeServiceLang(pathinfo(__FILE__, PATHINFO_BASENAME));

$params = array(
	"site" => WIZARD_SITE_ID,
	"file" => WIZARD_SERVICE_RELATIVE_PATH."/xml/" . LANGUAGE_ID . "/10_realty_offers.xml",
	"xmlId" => 'citrus_realty_offers',
	"code" => 'offers',
	"type" => 'realty',
	// ���� ����� �������������� ��������
	"formFields" => array (
		'tabs' => GetMessage("CITRUS_FORM_FIELDS_TABS"),
	),
	// ���� ������ ��������
	"sectionListFields" => array (
		'columns' => 'NAME,ACTIVE,SORT,UF_TYPE,TIMESTAMP_X,ID',
		'by' => 'timestamp_x',
		'order' => 'desc',
		'page_size' => '20',
	),
	// ���� ������ ���������
	"elementListFields" => false,
	// ���� ������ ����������� ��������� ��������� � ��������
	"combinedListFields" => false,
);
$params["iblockFields"] = array('IBLOCK_SECTION'=>array('IS_REQUIRED'=>'Y','DEFAULT_VALUE'=>'',),'ACTIVE'=>array('IS_REQUIRED'=>'Y','DEFAULT_VALUE'=>'Y',),'ACTIVE_FROM'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>'',),'ACTIVE_TO'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>'',),'SORT'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>'0',),'NAME'=>array('IS_REQUIRED'=>'Y','DEFAULT_VALUE'=>'',),'PREVIEW_PICTURE'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>array('FROM_DETAIL'=>'N','SCALE'=>'N','WIDTH'=>'','HEIGHT'=>'','IGNORE_ERRORS'=>'N','METHOD'=>'resample','COMPRESSION'=>95,'DELETE_WITH_DETAIL'=>'N','UPDATE_WITH_DETAIL'=>'N','USE_WATERMARK_TEXT'=>'N','WATERMARK_TEXT'=>'','WATERMARK_TEXT_FONT'=>'','WATERMARK_TEXT_COLOR'=>'','WATERMARK_TEXT_SIZE'=>'','WATERMARK_TEXT_POSITION'=>'tl','USE_WATERMARK_FILE'=>'N','WATERMARK_FILE'=>'','WATERMARK_FILE_ALPHA'=>'','WATERMARK_FILE_POSITION'=>'tl','WATERMARK_FILE_ORDER'=>NULL,),),'PREVIEW_TEXT_TYPE'=>array('IS_REQUIRED'=>'Y','DEFAULT_VALUE'=>'text',),'PREVIEW_TEXT'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>'',),'DETAIL_PICTURE'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>array('SCALE'=>'N','WIDTH'=>'','HEIGHT'=>'','IGNORE_ERRORS'=>'N','METHOD'=>'resample','COMPRESSION'=>95,'USE_WATERMARK_TEXT'=>'N','WATERMARK_TEXT'=>'','WATERMARK_TEXT_FONT'=>'','WATERMARK_TEXT_COLOR'=>'','WATERMARK_TEXT_SIZE'=>'','WATERMARK_TEXT_POSITION'=>'tl','USE_WATERMARK_FILE'=>'N','WATERMARK_FILE'=>'','WATERMARK_FILE_ALPHA'=>'','WATERMARK_FILE_POSITION'=>'tl','WATERMARK_FILE_ORDER'=>NULL,),),'DETAIL_TEXT_TYPE'=>array('IS_REQUIRED'=>'Y','DEFAULT_VALUE'=>'html',),'DETAIL_TEXT'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>'',),'XML_ID'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>'',),'CODE'=>array('IS_REQUIRED'=>'Y','DEFAULT_VALUE'=>array('UNIQUE'=>'Y','TRANSLITERATION'=>'Y','TRANS_LEN'=>100,'TRANS_CASE'=>'L','TRANS_SPACE'=>'-','TRANS_OTHER'=>'-','TRANS_EAT'=>'Y','USE_GOOGLE'=>'N',),),'TAGS'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>'',),'SECTION_NAME'=>array('IS_REQUIRED'=>'Y','DEFAULT_VALUE'=>'',),'SECTION_PICTURE'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>array('FROM_DETAIL'=>'N','SCALE'=>'N','WIDTH'=>'','HEIGHT'=>'','IGNORE_ERRORS'=>'N','METHOD'=>'resample','COMPRESSION'=>95,'DELETE_WITH_DETAIL'=>'N','UPDATE_WITH_DETAIL'=>'N','USE_WATERMARK_TEXT'=>'N','WATERMARK_TEXT'=>'','WATERMARK_TEXT_FONT'=>'','WATERMARK_TEXT_COLOR'=>'','WATERMARK_TEXT_SIZE'=>'','WATERMARK_TEXT_POSITION'=>'tl','USE_WATERMARK_FILE'=>'N','WATERMARK_FILE'=>'','WATERMARK_FILE_ALPHA'=>'','WATERMARK_FILE_POSITION'=>'tl','WATERMARK_FILE_ORDER'=>NULL,),),'SECTION_DESCRIPTION_TYPE'=>array('IS_REQUIRED'=>'Y','DEFAULT_VALUE'=>'html',),'SECTION_DESCRIPTION'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>'',),'SECTION_DETAIL_PICTURE'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>array('SCALE'=>'N','WIDTH'=>'','HEIGHT'=>'','IGNORE_ERRORS'=>'N','METHOD'=>'resample','COMPRESSION'=>95,'USE_WATERMARK_TEXT'=>'N','WATERMARK_TEXT'=>'','WATERMARK_TEXT_FONT'=>'','WATERMARK_TEXT_COLOR'=>'','WATERMARK_TEXT_SIZE'=>'','WATERMARK_TEXT_POSITION'=>'tl','USE_WATERMARK_FILE'=>'N','WATERMARK_FILE'=>'','WATERMARK_FILE_ALPHA'=>'','WATERMARK_FILE_POSITION'=>'tl','WATERMARK_FILE_ORDER'=>NULL,),),'SECTION_XML_ID'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>'',),'SECTION_CODE'=>array('IS_REQUIRED'=>'Y','DEFAULT_VALUE'=>array('UNIQUE'=>'N','TRANSLITERATION'=>'Y','TRANS_LEN'=>100,'TRANS_CASE'=>'L','TRANS_SPACE'=>'-','TRANS_OTHER'=>'-','TRANS_EAT'=>'Y','USE_GOOGLE'=>'Y',),),'LOG_SECTION_ADD'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>NULL,),'LOG_SECTION_EDIT'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>NULL,),'LOG_SECTION_DELETE'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>NULL,),'LOG_ELEMENT_ADD'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>NULL,),'LOG_ELEMENT_EDIT'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>NULL,),'LOG_ELEMENT_DELETE'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>NULL,),'XML_IMPORT_START_TIME'=>array('IS_REQUIRED'=>'N','DEFAULT_VALUE'=>NULL,'VISIBLE'=>'N',),);
$iblockId = \Citrus\Realty\Wizard::importIblock($params, WIZARD_REINSTALL_DATA);

