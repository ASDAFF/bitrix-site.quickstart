<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$shopOfName = $wizard->GetVar('shopOfName');
COption::SetOptionString('store', 'shopOfName', $shopOfName, false, WIZARD_SITE_ID);
$shopLocation = $wizard->GetVar('shopLocation');
COption::SetOptionString('store', 'shopLocation', $shopLocation, false, WIZARD_SITE_ID);
$shopINN = $wizard->GetVar('shopINN');
COption::SetOptionString('store', 'shopINN', $shopINN, false, WIZARD_SITE_ID);
$shopKPP = $wizard->GetVar('shopKPP');
COption::SetOptionString('store', 'shopKPP', $shopKPP, false, WIZARD_SITE_ID);
$shopNS = $wizard->GetVar('shopNS');
COption::SetOptionString('store', 'shopNS', $shopNS, false, WIZARD_SITE_ID);
$shopBANK = $wizard->GetVar('shopBANK');
COption::SetOptionString('store', 'shopBANK', $shopBANK, false, WIZARD_SITE_ID);
$shopBANKREKV = $wizard->GetVar('shopBANKREKV');
COption::SetOptionString('store', 'shopBANKREKV', $shopBANKREKV, false, WIZARD_SITE_ID);
$shopKS = $wizard->GetVar('shopKS');
COption::SetOptionString('store', 'shopKS', $shopKS, false, WIZARD_SITE_ID);
$siteStamp = $wizard->GetVar('siteStamp');
COption::SetOptionString('store', 'siteStamp', $siteStamp, false, WIZARD_SITE_ID);
$shopAdr = $wizard->GetVar('shopAdr');
COption::SetOptionString('store', 'shopAdr', $shopAdr, false, WIZARD_SITE_ID);
$siteTelephoneCode = $wizard->GetVar('siteTelephoneCode');
$siteTelephone = $wizard->GetVar('siteTelephone');
$phone = '('.$siteTelephoneCode.') '.$siteTelephone;
COption::SetOptionString('store', 'siteTelephone', $phone, false, WIZARD_SITE_ID);
$shopEmail = $wizard->GetVar('shopEmail');
COption::SetOptionString('store', 'shopEmail', $shopEmail, false, WIZARD_SITE_ID);
$siteName = $wizard->GetVar('siteName');
COption::SetOptionString('store', 'siteName', $siteName, false, WIZARD_SITE_ID);
COption::SetOptionString('main', 'site_name', $siteName);