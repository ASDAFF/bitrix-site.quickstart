<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

__IncludeLang($_SERVER["DOCUMENT_ROOT"].$templateFolder."/lang/".LANGUAGE_ID."/template.php");

/*$arID = array();
if(isset($_REQUEST["ID"]))
{
	$arID = $_REQUEST["ID"];
	if(!is_array($arID))
		$arID = array($arID);
}

if ($_REQUEST["action"]=="DELETE_FROM_COMPARE_RESULT")
{
	if(count($arID)>0)
		foreach($arID as $ID)
		unset($_SESSION[$arParams["COMPARE_NAME"]][$arParams["IBLOCK_ID"]]["ITEMS"][$ID]);
}**/


if (count($arResult['IDS']) > 0 && CModule::IncludeModule('sale'))
{
	$arItemsInCompare = array();
	foreach ($arResult['IDS'] as $ID)
	{
		if (isset(
			$_SESSION[$arParams["COMPARE_NAME"]][$arParams["IBLOCK_ID"]]["ITEMS"][$ID]
		))
			$arItemsInCompare[] = $ID;
	}

	$dbBasketItems = CSaleBasket::GetList(
		array(
			"ID" => "ASC"
		),
		array(
			"FUSER_ID" => CSaleBasket::GetBasketUserID(),
			"LID" => SITE_ID,
			"ORDER_ID" => "NULL",
			),
		false,
		false,
		array()
	);

	$arPageItems = array();
	$arPageItemsDelay = array();
	while ($arItem = $dbBasketItems->Fetch())
	{
		if (in_array($arItem['PRODUCT_ID'], $arResult['IDS']))
		{
			if($arItem["DELAY"] == "Y")
				$arPageItemsDelay[] = $arItem['PRODUCT_ID'];
			else
				$arPageItems[] = $arItem['PRODUCT_ID'];
		}
	}
	
	if (count($arPageItems) > 0 || count($arPageItemsDelay) > 0)
	{
		echo '<script type="text/javascript">$(function(){'."\r\n";
		foreach ($arPageItems as $id) 
		{
			echo "disableAddToCart('catalog_add2cart_link_".$id."', 'list', '".GetMessage("CATALOG_IN_CART")."');\r\n";
		}
		foreach ($arPageItemsDelay as $id) 
		{
			echo "disableAddToCart('catalog_add2cart_link_".$id."', 'list', '".GetMessage("CATALOG_IN_CART_DELAY")."');\r\n";
		}
		echo '})</script>';
	}
	
	if (count($arItemsInCompare) > 0)
	{
		echo '<script type="text/javascript">$(function(){'."\r\n";
		foreach ($arItemsInCompare as $id) 
		{
			echo "disableAddToCompare('catalog_add2compare_link_".$id."', '".GetMessage("CATALOG_IN_COMPARE")."',".$id.", '".htmlspecialchars($APPLICATION->GetCurPageParam("action=DELETE_FROM_COMPARE_RESULT&IBLOCK_ID=".$arParams['IBLOCK_ID']."&ID[]=".$id,array("action", "IBLOCK_ID", "ID")))."');\r\n";
		}
		echo '})</script>';
	}
}
?>