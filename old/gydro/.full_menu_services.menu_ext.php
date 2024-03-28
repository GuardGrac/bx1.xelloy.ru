<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

if(CModule::IncludeModule("iblock")) { 
   $arSelect = Array("ID", "IBLOCK_ID", "NAME");
   $arFilter = Array("IBLOCK_ID"=>'222', "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
   $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>10), $arSelect);

   $aMenuLinksExt1 = [];
   while ($ob = $res->GetNextElement()) { 
      $arFields = $ob->GetFields();  
      $arField = array(
         0 => $arFields['NAME'],
         1 => SITE_DIR.'services/?ELEMENT_ID='.$arFields['ID'],
         2 => Array(
            0 => SITE_DIR.'services/?ELEMENT_ID='.$arFields['ID'],
         ),
      );
      array_push($aMenuLinksExt1, $arField);
   }

   $aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt1);
}
?>