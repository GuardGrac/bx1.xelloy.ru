<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>
	<div class="page_notfound">	
		<div class="container">
			<h1>404</h1>
			<h2>Страница не найдена</h2>
			<p>Неправильно набран адрес или такой страницы не существует</p>

			<a href="<?=SITE_DIR?>" class="button__fill_curve">НА ГЛАВНУЮ</a>
		</div>
	</div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>