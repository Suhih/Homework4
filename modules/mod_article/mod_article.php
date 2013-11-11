<?php
/**
 * @package     Joomla.Tutorials
 * Created by JetBrains PhpStorm.
 * @subpackage  Module
 * @copyright   (C) 2012 http://jomla-code.ru
 * @license     License GNU General Public License version 2 or later; see LICENSE.txt
 * User: satoru
 * Date: 11.11.13
 * Time: 15:01
 * To change this template use File | Settings | File Templates.
 */

defined('_JEXEC') or die('Restricted access');

$option = JRequest::getCmd('option');
$view = JRequest::getCmd('view');
if ($option=="com_content" && $view=="article") {
    $ids = explode(':',JRequest::getString('id'));
    $article_id = $ids[0];
    $article = & JTable::getInstance("content");
    $article->load($article_id);
    echo $article->get("title");
}
else {
    echo "Статті не знайдено";
}
?>