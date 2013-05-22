<?php
/**
 * 			XMLRPC View RSD
 * @version		1.0.0
 * @package		XMLRPC for Joomla!
 * @copyright		Copyright (C) 2007 - 2012 Yoshiki Kozaki All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 *
 * @author		Yoshiki Kozaki  info@joomler.net
 * @link 			http://www.joomler.net/
 *
 */

// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die;

jimport('joomla.application.component.view');

/**
 * XML View class for the XMLRPC component
 *
 * @package		com_xmlrpc
 */
class XMLRPCViewRSD extends JView
{
	function display($tpl = null)
	{
		if(!JComponentHelper::getParams('com_xmlrpc')->get('show_rsd', 1)){
			JFactory::getApplication()->redirect('index.php', JText::_('JERROR_ALERTNOAUTHOR'), 'error');
		}

		$xml		= $this->get('xml');

		$this->assign('xml', $xml);

		parent::display($tpl);
	}
}
