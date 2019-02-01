<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="box margin padding">
	<? ShowMessage($arParams["~AUTH_RESULT"]);?>
	<form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
		<? if (strlen($arResult["BACKURL"]) > 0) { ?>
			<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
		<? } ?>
		<input type="hidden" name="AUTH_FORM" value="Y">
		<input type="hidden" name="TYPE" value="SEND_PWD">
		<p><?=GetMessage("AUTH_FORGOT_PASSWORD_1")?></p>
		<table class="data-table bx-auth-table bx-forgotpass-table">
			<thead>
				<tr> 
					<td colspan="2"><b><?=GetMessage("AUTH_GET_CHECK_STRING")?></b><br /><br /></td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="bx-auth-label"><?=GetMessage("AUTH_LOGIN")?></td>
					<td><input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" />
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="padding: 10px 0;"><?=GetMessage("AUTH_OR")?></td>
				</tr>
				<tr> 
					<td class="bx-auth-label"><?=GetMessage("AUTH_EMAIL")?></td>
					<td>
						<input type="text" class="bx-auth-input" name="USER_EMAIL" maxlength="255" />
					</td>
				</tr>
			</tbody>
			<tfoot>
				<tr> 
					<td colspan="2" align="center">
						<input type="submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" />
					</td>
				</tr>
			</tfoot>
		</table>
		<br /><p><a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a></p> 
	</form>
	<script type="text/javascript">
		document.bform.USER_LOGIN.focus();
	</script>
</div>