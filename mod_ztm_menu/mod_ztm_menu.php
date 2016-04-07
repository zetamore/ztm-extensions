<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$list      = ModBootmenuHelper::getList($params);
$base      = ModBootmenuHelper::getBase($params);
$active    = ModBootmenuHelper::getActive($params);
$active_id = $active->id;
$path      = $base->tree;
$showAll   = $params->get('showAllChildren');
$class_sfx = htmlspecialchars($params->get('class_sfx'));

if (count($list))
{
	require JModuleHelper::getLayoutPath('mod_bootmenu', $params->get('layout', 'default'));
}