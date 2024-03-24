<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?$APPLICATION->ShowHead();?>
    <title>
        <?$APPLICATION->ShowTitle();?>
    </title>
    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/2.7b1f77b4.chunk.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/main.4df3732a.chunk.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css/custom.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/css2");
    Asset::getInstance()->addString('<link rel="icon" href="https://ivkovic.me/themes/min/favicon.ico">');
    Asset::getInstance()->addString('<link rel="icon" href="https://ivkovic.me/themes/min/logo192.png');
    Asset::getInstance()->addString('<link rel="manifest" href="https://ivkovic.me/themes/min/manifest.json">');
    ?>
</head>
<body data-new-gr-c-s-check-loaded="14.1155.0" data-gr-ext-installed=""><noscript>You need to enable JavaScript to runthis app.</noscript>
<div id="panel">
			<?$APPLICATION->ShowPanel();?>
</div>				