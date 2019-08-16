<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>
</div>
</div>
<div class="side">
  <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"vertical_menu",
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "vertical_menu"
	),
	false
);?>
<div class="sb_event">
  <div class="sb_event_header"><h4>Ближайшие события</h4></div>
  <?$APPLICATION->IncludeComponent(
  	"bitrix:main.include",
  	"",
  	Array(
  		"AREA_FILE_RECURSIVE" => "Y",
  		"AREA_FILE_SHOW" => "sect",
  		"AREA_FILE_SUFFIX" => "inc",
  		"EDIT_TEMPLATE" => "",
  		"PATH" => ""
  	)
  );?>
</div>
<div class="sb_action">
  <a href=""><img src="/local/templates/exam1/content/11.png" alt=""/></a>
  <h4>Акция</h4>
  <h5><a href="">Мебельная полка всего за 560 Р </a></h5>
  <a href="" class="sb_action_more">Подробнее &rarr;</a>
</div>
<div class="sb_text_block">
  Покупая мебель в нашем Интернет-магазине, вы можете быть уверены в качестве мебели - ведь мы работаем только с крупными и проверенными производителями.
</div>
<div class="item-wrap">
  <div class="rew-footer-carousel">
  <?$APPLICATION->IncludeComponent("bitrix:news", "menu", Array(
  	"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
  		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
  		"AJAX_MODE" => "N",	// Включить режим AJAX
  		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
  		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
  		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
  		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
  		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
  		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
  		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
  		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
  		"CACHE_TYPE" => "A",	// Тип кеширования
  		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
  		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
  		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
  		"DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
  		"DETAIL_FIELD_CODE" => array(	// Поля
  			0 => "DATE_ACTIVE_FROM",
  			1 => "",
  		),
  		"DETAIL_PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
  		"DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
  		"DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
  		"DETAIL_PROPERTY_CODE" => array(	// Свойства
  			0 => "POSITION",
  			1 => "COMPANY",
  			2 => "",
  		),
  		"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
  		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
  		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
  		"DISPLAY_NAME" => "Y",	// Выводить название элемента
  		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
  		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
  		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
  		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
  		"IBLOCK_ID" => "6",	// Инфоблок
  		"IBLOCK_TYPE" => "reviews",	// Тип инфоблока
  		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
  		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
  		"LIST_FIELD_CODE" => array(	// Поля
  			0 => "",
  			1 => "",
  		),
  		"LIST_PROPERTY_CODE" => array(	// Свойства
  			0 => "POSITION",
  			1 => "COMPANY",
  			2 => "",
  		),
  		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
  		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
  		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
  		"NEWS_COUNT" => "2",	// Количество новостей на странице
  		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
  		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
  		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
  		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
  		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
  		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
  		"PAGER_TITLE" => "Новости",	// Название категорий
  		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
  		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
  		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
  		"SET_STATUS_404" => "N",	// Устанавливать статус 404
  		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
  		"SHOW_404" => "N",	// Показ специальной страницы
  		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
  		"SORT_BY2" => "NAME",	// Поле для второй сортировки новостей
  		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
  		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
  		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела
  		"USE_CATEGORIES" => "N",	// Выводить материалы по теме
  		"USE_FILTER" => "N",	// Показывать фильтр
  		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
  		"USE_RATING" => "N",	// Разрешить голосование
  		"USE_REVIEW" => "N",	// Разрешить отзывы
  		"USE_RSS" => "N",	// Разрешить RSS
  		"USE_SEARCH" => "N",	// Разрешить поиск
  		"USE_SHARE" => "N",	// Отображать панель соц. закладок
  		"COMPONENT_TEMPLATE" => ".default",
  		"VARIABLE_ALIASES" => array(
  			"SECTION_ID" => "SECTION_ID",
  			"ELEMENT_ID" => "ELEMENT_ID",
  		)
  	),
  	false
  );?>
</div>
</div>
</div>
<div class="clearboth"></div>

</div>
</div>

<div class="ft_footer">
<div class="ft_container">
<div class="ft_about">
<h4>О магазине</h4>
<?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_THEME" => "site",
		"ROOT_MENU_TYPE" => "bottom",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
</div>
<div class="ft_catalog">
<h4>Каталог товаров</h4>
<ul>
  <li><a href="">Кухни</a></li>
  <li><a href="">Кровати и кушетки</a></li>
  <li><a href="">Гарнитуры</a></li>
  <li><a href="">Тумобчки и прихожие</a></li>
  <li><a href="">Спальни и матрасы</a></li>
  <li><a href="">Аксессуары</a></li>
  <li><a href="">Столы и стулья</a></li>
  <li><a href="">Каталоги мебели</a></li>
  <li><a href="">Раскладные диваны</a></li>
  <li><a href="">Кресла</a></li>
</ul>

</div>
<div class="ft_contacts">
<h4><?=GetMessage("kontact_info");?></h4>
<!-- vCard        http://help.yandex.ru/webmaster/hcard.pdf      -->
<p class="vcard">
  <span class="adr">
    <span class="street-address">ул. Летняя стр.12, офис 512</span>
  </span>
  <span class="tel">
    <?$APPLICATION->IncludeComponent(
    	"bitrix:main.include",
    	"",
    	Array(
    		"AREA_FILE_SHOW" => "page",
    		"AREA_FILE_SUFFIX" => "inc",
    		"EDIT_TEMPLATE" => "",
    		"PATH" => ""
    	)
    );?>
  </span>
  <strong>Время работы:</strong> <br/> <span class="workhours">ежедневно с 9-00 до 18-00</span><br/>
</p>
<ul class="ft_solcial">
  <li><a href="" class="fb"></a></li>
  <li><a href="" class="tw"></a></li>
  <li><a href="" class="ok"></a></li>
  <li><a href="" class="vk"></a></li>
</ul>
<div class="ft_copyright">© 2000 - 2012 "Мебельный магазин" </div>


</div>

<div class="clearboth"></div>
</div>
</div>
</div>
</body>
</html>
