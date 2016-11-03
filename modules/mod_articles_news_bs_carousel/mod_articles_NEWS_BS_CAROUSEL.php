<?php
/**
 * Bootstrap Slideshow
 *
 * @author    Alvaro Guachilema http://lafabricadelinternet.com
 * @copyright Copyright (C) 2016 - 2017 Alvaro Guachilema
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 
 * Parts of this software are based on Articles Newsflash standard module and Advanced Newsflash  
 * 
*/

defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once __DIR__ . '/helper.php';

$menu = JMenu::getInstance('site');

$app    = JFactory::getApplication(); 
$document =& JFactory::getDocument();

$list = modArticlesNewsHelper::getList($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$layout = $params->get('layout');
require JModuleHelper::getLayoutPath('mod_articles_news_bs_carousel',$layout);
