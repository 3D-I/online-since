<?php
/**
*
* @package Online Since
* @copyright (c) 2015 3Di
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace threedi\onlinesince\controller;

/**
* Interface for our admin controller
*
* This describes all of the methods we'll use for the admin front-end of this extension
*/
interface admin_interface
{
	/**
	* Process the onlinesince settings
	*
	* @return null
	* @access public
	*/
	public function onlinesince_settings();

	/**
	* Set page url
	*
	* @param string $u_action Custom form action
	* @return null
	* @access public
	*/
	public function set_page_url($u_action);
}
