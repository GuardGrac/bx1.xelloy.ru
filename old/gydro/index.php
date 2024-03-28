<? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');?>
<?use \Bitrix\Main\Config\Option?>

<?
$arId = Array();

foreach(Option::getForModule('hellodigital.turbosite') as $key => $option) {
	if (str_contains($key, 'BlockId')) $arId[$key] = $option;
}
asort($arId)
?>


<div style="display: flex; flex-direction: column;" class="main">
	<div style="order: 0">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.include",
			".default",
			Array(
				"AREA_FILE_SHOW" => "file",
				"PATH" => SITE_DIR."include/main_page/header/block.php"
			),
		false,
		Array(
			'ACTIVE_COMPONENT' => 'Y',
			'HIDE_ICONS' => 'Y'
		)
		);?>
	</div>

	<div style="order: <?=$arId['prosBlockId']?>;" class="box" data-name="Тизеры">
		<?if (COption::GetOptionString($moduleID, "prosBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/pros/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
			);?>

			<?if (COption::GetOptionString($moduleID, "prosBlockHr") == 'Y'):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>
		<?endif;?>
	</div>
		
	<div style="order: <?=$arId['aboutBlockId']?>;" class="box" data-name="О нас">
		<?if (COption::GetOptionString($moduleID, "aboutBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/about/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
			);?>

			<?if (COption::GetOptionString($moduleID, "aboutBlockHr") == 'Y'):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>
		<?endif;?>
	</div>

	<div style="order: <?=$arId['servicesBlockId']?>;" class="box" data-name="Услуги">
		<?if (COption::GetOptionString($moduleID, "servicesBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/services/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
		);?>

			<?if (COption::GetOptionString($moduleID, "servicesBlockHr") == 'Y'):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>
		<?endif;?>
	</div>

	<div style="order: <?=$arId['worksBlockId']?>;" class="box" data-name="Фотогалерея">
		<?if (COption::GetOptionString($moduleID, "worksBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/works/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
			);?>

			<?if (COption::GetOptionString($moduleID, "worksBlockHr") == 'Y'):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>
		<?endif;?>
	</div>

	<div style="order: <?=$arId['feedbackBlockId']?>;" class="box" data-name="Оставить заявку">
		<?if (COption::GetOptionString($moduleID, "feedbackBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/feedback/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
			);?>

			<?if (COption::GetOptionString($moduleID, "feedbackBlockHr") == 'Y'):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>
		<?endif;?>
	</div>
		
	<div style="order: <?=$arId['objectBlockId']?>;" class="box" data-name="Объекты">
		<?if (COption::GetOptionString($moduleID, "objectBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/catalog_objects/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
			);?>

			<?if (COption::GetOptionString($moduleID, "objectBlockHr") == 'Y'):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>		
		<?endif;?>
	</div>

	<div style="order: <?=$arId['productsBlockId']?>;" class="box" data-name="Товары">
		<?if (COption::GetOptionString($moduleID, "productsBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/catalog_products/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
		);?>

			<?if (COption::GetOptionString($moduleID, "productsBlockHr") == 'Y'):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>		
		<?endif;?>
	</div>

	<div style="order: <?=$arId['specialistBlockId']?>;" class="box" data-name="Специалисты">
		<?if (COption::GetOptionString($moduleID, "specialistBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/specialists/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
			);?>

			<?if (COption::GetOptionString($moduleID, "specialistBlockHr") == 'Y'):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>		
		<?endif;?>
	</div>

	<div style="order: <?=$arId['newsBlockId']?>;" class="box" data-name="Новости">
		<?if (COption::GetOptionString($moduleID, "newsBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/news/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
		);?>

			<?if (COption::GetOptionString($moduleID, "newsBlockHr") == 'Y'):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>		
		<?endif;?>
	</div>

	<div style="order: <?=$arId['reviewsBlockId']?>;" class="box" data-name="Отзывы">
		<?if (COption::GetOptionString($moduleID, "reviewsBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/reviews/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
			);?>

			<?if (COption::GetOptionString($moduleID, "reviewsBlockHr") == 'Y'):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>
		<?endif;?>
	</div>

	<div style="order: <?=$arId['consultationBlockId']?>;" class="box" data-name="Консультация">
		<?if (COption::GetOptionString($moduleID, "consultationBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/consultation/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
			);?>

			<?if (COption::GetOptionString($moduleID, "consultationBlockHr") == 'Y'):?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>
		<?endif;?>
	</div>

	<div style="order: <?=$arId['companyBlockId']?>;" class="box" data-name="Партнёры">
		<?if (COption::GetOptionString($moduleID, "companyBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/company/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
			);?>

			<?if (COption::GetOptionString($moduleID, "companyBlockHr") == 'Y'):?>	
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>
		<?endif;?>
	</div>

	<div style="order: <?=$arId['bannersBlockId']?>;" class="box" data-name="Баннеры">
		<?if (COption::GetOptionString($moduleID, "bannersBlockDisplay") == 'Y'):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:main.include",
				".default",
				Array(
					"AREA_FILE_SHOW" => "file",
					"PATH" => SITE_DIR."include/main_page/banners/block.php"
				),
			false,
			Array(
				'ACTIVE_COMPONENT' => 'Y',
				'HIDE_ICONS' => 'Y'
			)
			);?>

			<?if (COption::GetOptionString($moduleID, "bannersBlockHr") == 'Y'):?>	
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					Array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_DIR."include/main_page/hr/block.php"
					),
				false,
				Array(
					'ACTIVE_COMPONENT' => 'Y',
					'HIDE_ICONS' => 'Y'
				)
				);?>
			<?endif;?>
		<?endif;?>
	</div>
</div>

<? require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php'); ?>