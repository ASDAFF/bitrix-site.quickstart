<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<pre><?print_r($arrFilter);?></pre>
<script type="text/javascript">
$(function() {
	$('a.zoom_pic').fancybox({
		'transitionIn': 'elastic',
		'transitionOut': 'elastic',
		'speedIn': 600,
		'speedOut': 400,
		'overlayShow': false,
		'cyclic' : true,
		'padding': 20,
		'titlePosition': 'over',
		'onComplete': function() {
			$("#fancybox-title").css({ 'top': '100%', 'bottom': 'auto' });
		}
	});
});
</script>
<table width="100%" cellpadding="0" cellspacing="0" border="0"><tr valign="top"><td>
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="margin:10px 0;">
	<tr><td class="new-block-top">&nbsp;</td></tr>
	<tr><td class="new-block-bg">
<table cellpadding="0" cellspacing="0" border="0" width="100%">
<?$count = -1;?>
		<?foreach($arResult["ITEMS"] as $cell=>$arElement):?>
<?$count++;?>
		<?
		$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
		?>
		<?if($cell%$arParams["LINE_ELEMENT_COUNT"] == 0):?>
		<tr>
		<?endif;?>

		<td valign="top" width="<?=round(100/$arParams["LINE_ELEMENT_COUNT"])?>%" id="<?=$this->GetEditAreaId($arElement['ID']);?>">

       <table class="content" cellspacing="5" cellpadding="0" border="0">
       <tr valign="middle">
<?if(is_array($arElement["PREVIEW_PICTURE"])||is_array($arElement["DETAIL_PICTURE"])):?>
<td valign="top">
<table width="110px" height="110px" cellspacing="0" cellpadding="0">
<tr><td colspan="3" height="8px" style="background: url('<?=$templateFolder?>/images/top1.png') left top no-repeat;"></td></tr>
<tr>
<td width="1px" style="background: url('<?=$templateFolder?>/images/left.png') top left repeat-y;"></td>
<?if(is_array($arElement["PREVIEW_PICTURE"])):?>
          <?$arPicture = $arElement["PREVIEW_PICTURE"];
$arImg = CFile::ResizeImageGet($arElement["PREVIEW_PICTURE"]["ID"], Array("width"=>"100","height"=>"100"), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>


        <?elseif(is_array($arElement["DETAIL_PICTURE"])):?>
          <?$arPicture = $arElement["DETAIL_PICTURE"];
$arImg = CFile::ResizeImageGet($arElement["DETAIL_PICTURE"]["ID"], Array("width"=>"90","height"=>"90"), BX_RESIZE_IMAGE_PROPORTIONAL, true);?>

        <?endif;?>
<td align="right" valign="bottom" style="background: url(<?=$arImg["src"]?>) center no-repeat;">

<?if($arElement["PROPERTIES"]["SPECIALOFFER"]["VALUE"][0]):?>
  <div class="sticker-spec"></div>
<?endif;?>

<a href="<?=$arPicture["SRC"];?>" class="zoom_pic" style="margin-right: 8px;"><img src="<?=$templateFolder?>/images/zoom.png" /></a>
</td>
<td width="1px;" style="background: url('<?=$templateFolder?>/images/right1.png') top right repeat-y;"></td>
</tr>
<tr height="8px" style="background: url('<?=$templateFolder?>/images/bot1.png') bottom left;"><td colspan="3"></td></tr>
</table>

</td>
<td width="5px"></td>
<?endif;?>

              <td align="left" valign="top">
        <a href="<?=$arElement["DETAIL_PAGE_URL"]?>"><?=$arElement["NAME"]?></a>
                 <br />
<?if($arElement["PREVIEW_TEXT"]):
  $prev = $arElement["PREVIEW_TEXT"];
  if(strlen($prev)>200){
    $prev = substr($arElement["PREVIEW_TEXT"],0,200)."...";
  }
  echo $prev;
elseif($arElement["DETAIL_TEXT"]):
  $prev = $arElement["DETAIL_TEXT"];
  if(strlen($prev)>200){
    $prev = substr($arElement["DETAIL_TEXT"],0,200)."...";
  }
  echo $prev;
endif;?>
<br />
                 <?if(is_array($arElement["DISPLAY_PROPERTIES"])):?>
                   <?foreach($arElement["DISPLAY_PROPERTIES"] as $arProp):?>
                     <?=$arProp["NAME"]?> : <?=$arProp["VALUE"]?><br />
                   <?endforeach;?>
                 <?endif;?>
                 <br />
                    <?foreach($arElement["PRICES"] as $code=>$arPrice):?>
				<?if($arPrice["CAN_ACCESS"]):?>
					<p style="margin: 0; padding: 0;">
					<?if($arPrice["DISCOUNT_VALUE"] < $arPrice["VALUE"]):?>
						<span class="catalog-price"><span class="text"><?=$arPrice["PRINT_DISCOUNT_VALUE"]?> (<s><?=$arPrice["PRINT_VALUE"]?></s>)</span></span>
					<?else:?><span class="catalog-price"><span class="text"><?=$arPrice["PRINT_VALUE"]?></span></span><?endif;?>
					</p>
                    <?if($arElement["CAN_BUY"]):?>
				<?if($arParams["USE_PRODUCT_QUANTITY"] || count($arElement["PRODUCT_PROPERTIES"])):?>
					<form action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data">
					<table border="0" cellspacing="0" cellpadding="0">
					<?if($arParams["USE_PRODUCT_QUANTITY"]):?>
					<tr>
<td colspan="2" style="padding-top: 5px;" valign="bottom">


<a href="<?echo $arElement["ADD_URL"]?>" class="tobasket" rel="nofollow"  onclick="return addToCart(this, 'catalog_list_image_<?=$arElement['ID']?>', 'list', '');" id="catalog_add2cart_link_<?=$arElement['ID']?>"><img src="<?=$templateFolder?>/images/basket.png" /></a>
<input type="hidden" name="<?echo $arParams["ACTION_VARIABLE"]?>" value="BUY">
					<input type="hidden" name="<?echo $arParams["PRODUCT_ID_VARIABLE"]?>" value="<?echo $arElement["ID"]?>">
</td>
						</tr>
					<?endif;?>
					</table>


					</form>
				<?else:?>
					<noindex>
					<a href="<?echo $arElement["ADD_URL"]?>" class="tobasket" rel="nofollow"  onclick="return addToCart(this, 'catalog_list_image_<?=$arElement['ID']?>', 'list', '');" id="catalog_add2cart_link_<?=$arElement['ID']?>"><img src="<?=$templateFolder?>/images/basket.png" /></a>
					</noindex>
				<?endif;?>
			<?elseif((count($arResult["PRICES"]) > 0) || is_array($arElement["PRICE_MATRIX"])):?>
				<?=GetMessage("CATALOG_NOT_AVAILABLE")?>
			<?endif?>
				<?endif;?>
			<?endforeach;?>
			<?if(is_array($arElement["PRICE_MATRIX"])):?>
				<table cellpadding="0" cellspacing="0" border="0" width="100%" class="data-table">
				<thead>
				<tr>
					<?if(count($arElement["PRICE_MATRIX"]["ROWS"]) >= 1 && ($arElement["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_FROM"] > 0 || $arElement["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_TO"] > 0)):?>
						<td valign="top" nowrap><?= GetMessage("CATALOG_QUANTITY") ?></td>
					<?endif?>
					<?foreach($arElement["PRICE_MATRIX"]["COLS"] as $typeID => $arType):?>
						<td valign="top" nowrap><?= $arType["NAME_LANG"] ?></td>
					<?endforeach?>
				</tr>
				</thead>
				<?foreach ($arElement["PRICE_MATRIX"]["ROWS"] as $ind => $arQuantity):?>
				<tr>
					<?if(count($arElement["PRICE_MATRIX"]["ROWS"]) > 1 || count($arElement["PRICE_MATRIX"]["ROWS"]) == 1 && ($arElement["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_FROM"] > 0 || $arElement["PRICE_MATRIX"]["ROWS"][0]["QUANTITY_TO"] > 0)):?>
						<th nowrap><?
							if (IntVal($arQuantity["QUANTITY_FROM"]) > 0 && IntVal($arQuantity["QUANTITY_TO"]) > 0)
								echo str_replace("#FROM#", $arQuantity["QUANTITY_FROM"], str_replace("#TO#", $arQuantity["QUANTITY_TO"], GetMessage("CATALOG_QUANTITY_FROM_TO")));
							elseif (IntVal($arQuantity["QUANTITY_FROM"]) > 0)
								echo str_replace("#FROM#", $arQuantity["QUANTITY_FROM"], GetMessage("CATALOG_QUANTITY_FROM"));
							elseif (IntVal($arQuantity["QUANTITY_TO"]) > 0)
								echo str_replace("#TO#", $arQuantity["QUANTITY_TO"], GetMessage("CATALOG_QUANTITY_TO"));
						?></th>
					<?endif?>
					<?foreach($arElement["PRICE_MATRIX"]["COLS"] as $typeID => $arType):?>
						<td><?
							if($arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["DISCOUNT_PRICE"] < $arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"]):?>
								<s><?=FormatCurrency($arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"], $arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"])?></s><span class="catalog-price"><?=FormatCurrency($arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["DISCOUNT_PRICE"], $arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"]);?></span>
							<?else:?>
								<span class="catalog-price"><?=FormatCurrency($arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["PRICE"], $arElement["PRICE_MATRIX"]["MATRIX"][$typeID][$ind]["CURRENCY"]);?></span>
							<?endif?>&nbsp;
						</td>
					<?endforeach?>
				</tr>
				<?endforeach?>
				</table><br />
			<?endif?>
                  </td>
                  </tr>
            </table>
            <div style="margin-bottom: 10px;"></div>
		</td>

		<?$cell++;
		if($cell%$arParams["LINE_ELEMENT_COUNT"] == 0):?>
			</tr>
		<?endif?>

		<?endforeach; // foreach($arResult["ITEMS"] as $arElement):?>

		<?if($cell%$arParams["LINE_ELEMENT_COUNT"] != 0):?>
			<?while(($cell++)%$arParams["LINE_ELEMENT_COUNT"] != 0):?>
				<td>&nbsp;</td>
			<?endwhile;?>
			</tr>
		<?endif?>

</table>

	<tr><td class="new-block-bottom">&nbsp;</td></tr>
</table>
</td>
<td width="20px"></td>
<td width="250px">
<?$APPLICATION->IncludeComponent("bitrix:search.title", "template1", array(
	"NUM_CATEGORIES" => "3",
	"TOP_COUNT" => "5",
	"USE_LANGUAGE_GUESS" => "Y",
	"CHECK_DATES" => "Y",
	"SHOW_OTHERS" => "Y",
	"PAGE" => "#SITE_DIR#search/index.php",
	"CATEGORY_0_TITLE" => "",
	"CATEGORY_0" => array(
	),
	"CATEGORY_1_TITLE" => "",
	"CATEGORY_1" => array(
	),
	"CATEGORY_2_TITLE" => "",
	"CATEGORY_2" => array(
	),
	"CATEGORY_OTHERS_TITLE" => "",
	"SHOW_INPUT" => "Y",
	"INPUT_ID" => "title-search-input",
	"CONTAINER_ID" => "title-search"
	),
	$component
);?>
<?$APPLICATION->IncludeComponent("bitrix:catalog.filter", ".default", array(
	"IBLOCK_TYPE" => "catalog",
	"IBLOCK_ID" => "3",
	"FILTER_NAME" => "arrFilter",
	"FIELD_CODE" => array(
		0 => "NAME",
		1 => "",
	),
	"PROPERTY_CODE" => array(
		0 => "MANUFACTURER",
		1 => "",
	),
	"LIST_HEIGHT" => "5",
	"TEXT_WIDTH" => "15",
	"NUMBER_WIDTH" => "2",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "3600",
	"CACHE_GROUPS" => "Y",
	"SAVE_IN_SESSION" => "N",
	"PRICE_CODE" => array(
		0 => "BASE",
	)
	),
	$component
);?>
</td>
</tr></table>
<br/>