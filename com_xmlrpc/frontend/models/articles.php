<?php
/**
 * 			XMLRPC Component Articles Model
 * @version		2.0.2
 * @package		XMLRPC for Joomla!
 * @copyright		Copyright (C) 2007 - 2012 Yoshiki Kozaki All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 *
 * @author		Yoshiki Kozaki  info@joomler.net
 * @link 			http://www.joomler.net/
 */

/**
* @package		Joomla
* @copyright		Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL
*/


// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;

JFactory::getLanguage()->load('com_content', JPATH_ADMINISTRATOR);

// Base this model on the backend version.
require_once JPATH_ADMINISTRATOR.'/components/com_content/models/articles.php';

/**
 * This models supports retrieving lists of articles.
 *
 * @package		com_xmlrpc
 */
class XMLRPCModelArticles extends ContentModelArticles
{

	protected function getListQuery()
	{
		$db = $this->getDbo();

		$query  = parent::getListQuery();

		if(strpos((string)$query->__get('select'), 'introtext') === false)
		{
			$query->select('a.'. $db->quoteName('introtext'));
		}

//		$query->select('CASE WHEN CHAR_LENGTH(a.'. $db->quoteName('introtext').') > 0 THEN a.'
//				. $db->quoteName('introtext'). ' ELSE a.'. $db->quoteName('fulltext'). ' END AS description');

		return $query;
	}
}
