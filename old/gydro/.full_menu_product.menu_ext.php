<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections", 
	"full_menu", 
	array(
		"ID" => $_REQUEST["ELEMENT_ID"],
		"IBLOCK_TYPE" => "turbosite_content",
		"IBLOCK_ID" => "206",
		"DEPTH_LEVEL" => "2",
		"SECTION_URL" => SITE_DIR."catalog_products/#SECTION_CODE#/",
		"CACHE_TIME" => "3600",
		"COMPONENT_TEMPLATE" => "full_menu",
		"IS_SEF" => "N",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>