<?php
/**
 * Created by PhpStorm.
 * User: Админ
 * Date: 31.05.2017
 * Time: 21:53
 */
?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?> <?use Bitrix\Main\Localization\Loc; Loc::loadMessages(__FILE__); $arTemplate = Array( "NAME" => Loc::getMessage("TEMPLATE_DESCRIPTION_NAME"), "DESCRIPTION" => Loc::getMessage("TEMPLATE_DESCRIPTION_DESC") ); ?>
