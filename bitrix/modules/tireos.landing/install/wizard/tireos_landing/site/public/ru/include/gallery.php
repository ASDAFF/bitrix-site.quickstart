<? require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>

			<div class="row" id='gallery'>
				    <?$APPLICATION->IncludeComponent("bitrix:news.list","gallery",Array(
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "AJAX_MODE" => "N",
                    "IBLOCK_TYPE" => "content",
                    "IBLOCK_ID" => COption::GetOptionString("tireos.landing", "IB_GALLERY", "0"),
                    "NEWS_COUNT" => "12",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_ORDER1" => "DESC",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER2" => "ASC",
                    "FILTER_NAME" => "",
                    "FIELD_CODE" => Array("ID"),
                    "PROPERTY_CODE" => Array("PICTURE"),
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "SET_TITLE" => "Y",
                    "SET_STATUS_404" => "Y",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "CACHE_TYPE" => "A",
                    "CACHE_TIME" => "3600",
                    "CACHE_FILTER" => "Y",
                    "CACHE_GROUPS" => "Y",
                    "DISPLAY_TOP_PAGER" => "Y",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "PAGER_TITLE" => "",
                    "PAGER_SHOW_ALWAYS" => "Y",
                    "PAGER_TEMPLATE" => "",
                    "PAGER_DESC_NUMBERING" => "Y",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "Y",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_ADDITIONAL" => ""
                )
            );?>
            </div>
            		<div class="spacer5"></div>
		<div class="text-center">
			<a href="#" class='more pull-none blue-text more-photo'>
				<div class="inside">
					<div class="backside">Просмотреть больше фото</div>
					<div class="frontside">Просмотреть больше фото</div>
				</div>
			</a>
		</div>
       <div class="spacer5"></div>    
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
