<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
if (count($arResult["ITEMS"]) < 1)
	return;
?>

<ul class="news lsnn" >

<?foreach($arResult["ITEMS"] as $arItem):?>
<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('NEWS_ELEMENT_DELETE_CONFIRM')));
	
?>
	<li class="post"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">

		<?if($arParams["DISPLAY_PICTURE"]=="Y" && $arItem["PREVIEW_PICTURE"]):?>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"  width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"  height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>" class="picture" />
		<?endif?>

		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<div class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></div>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<h3><a name="<?=$arItem["CODE"]?>"></a>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || $arResult["USER_HAVE_ACCESS"]):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
			<?else:?>
				<?echo $arItem["NAME"]?>
			<?endif;?>
			</h3>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<p><?echo $arItem["PREVIEW_TEXT"];?></p>
		<?endif;?>

		<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || $arResult["USER_HAVE_ACCESS"]):?>
		<a class="further" href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo GetMessage("NEWS_FURTHER")?></a>
			<?endif;?>
		<div style="clear:both;"></div>

	</li>
<?endforeach;?>
</ul>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>