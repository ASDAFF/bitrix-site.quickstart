<?$IS_AJAX = isset($_SERVER['HTTP_X_REQUESTED_WITH']) || isset($_REQUEST['AJAX_CALL']) && 'Y' == $_REQUEST['AJAX_CALL'];
if ($IS_AJAX) {
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
} else {
	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
	$APPLICATION->SetTitle("Хотите дешевле?");
}
?> 

<?$APPLICATION->IncludeComponent(
	"redsign:recall2", 
	"cheaper", 
	array(
		"ALFA_EMAIL_TO" => "",
		"SHOW_FIELDS" => array(
			0 => "RS_AUTHOR_NAME",
			1 => "RS_COMPANY_NAME",
			2 => "RS_AUTHOR_PHONE",
			3 => "RS_AUTHOR_COMMENT",
		),
		"REQUIRED_FIELDS" => array(
			0 => "RS_AUTHOR_NAME",
			1 => "RS_AUTHOR_PHONE",
		),
		"ALFA_USE_CAPTCHA" => "Y",
		"ALFA_MESSAGE_AGREE" => "Ваша заявка принята! В ближайшее время с вами свяжется наш оператор.",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "3600",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>

<?if(!$IS_AJAX):?>
<?require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');?>
<?endif;?>