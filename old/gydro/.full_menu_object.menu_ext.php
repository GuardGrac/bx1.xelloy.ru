<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"bitrix:menu.sections", 
	"full_menu", 
	array(
		"ID" => $_REQUEST["ELEMENT_ID"],
		"IBLOCK_TYPE" => "turbosite_catalog",
		"IBLOCK_ID" => "207",
		"DEPTH_LEVEL" => "2",
		"SECTION_URL" => SITE_DIR."objects/?SECTION_ID=#SECTION_ID#/",
		"CACHE_TIME" => "3600",
		"COMPONENT_TEMPLATE" => "full_menu",
		"IS_SEF" => "Y",
		"SEF_BASE_URL" => SITE_DIR."objects/",
		"SECTION_PAGE_URL" => "#SECTION_CODE#/",
		"DETAIL_PAGE_URL" => "#SECTION_CODE#/#ELEMENT_CODE#/",
		"CACHE_TYPE" => "A",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>