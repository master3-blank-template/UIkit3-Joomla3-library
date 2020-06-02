<?php defined('JPATH_PLATFORM') or die;
/**
 * @package     Joomla.Libraries
 * @subpackage  HTML
 * @copyright   Copyright (C) Aleksey A. Morozov. All rights reserved.
 * @license     GNU General Public License version 3 or later; see http://www.gnu.org/licenses/gpl-3.0.txt
 */

use Joomla\CMS\HTML\HTMLHelper;

/**
 * Utility class for Uikit behaviors
 *
 * @since  3.0
 */
abstract class JHtmlUikit3
{
	/**
	 * @var    array  Array containing information for loaded files
	 */
	protected static $loaded = [];

	/**
	 * Method to load the UIkit JavaScript & CSS framework into the document head
	 *
	 * @param   boolean  $icons       True to load UIkit icons [optional]
	 * @param   mixed    $css         True to load UIkit styles [optional]
	 * @param   boolean  $rtl         True to enable RTL mode in styles [optional]
	 * @param   boolean  $min         True to enable the minimized version [optional]
	 *
	 * @return  void
	 */
	public static function framework($icons = true, $css = true, $rtl = false, $min = true)
	{
		if (!empty(static::$loaded[__METHOD__])) {
			return;
		}

		HTMLHelper::_('script', 'uikit3/dist/uikit' . ($min ? '.min' : '') . '.js', array('version' => 'auto', 'relative' => true));

		if ($icons) {
			HTMLHelper::_('script', 'uikit3/dist/uikit-icons' . ($min ? '.min' : '') . '.js', array('version' => 'auto', 'relative' => true));
		}

		if ($css) {
			HTMLHelper::_('stylesheet', 'uikit3/dist/uikit' . ($rtl ? '-rtl' : '') . ($min ? '.min' : '') . '.css', array('version' => 'auto', 'relative' => true));
		}

		static::$loaded[__METHOD__] = true;

		return;
	}

	/**
	 * Method to load the UIkit JavaScript clean framework into the document head
	 *
	 * @param   boolean  $min         True to enable the minimized version [optional]
	 *
	 * @return  void
	 */
	public static function js($min = true)
	{
		if (!empty(static::$loaded[__METHOD__])) {
			return;
		}

		HTMLHelper::_('script', 'uikit3/dist/uikit' . ($min ? '.min' : '') . '.js', array('version' => 'auto', 'relative' => true));

		static::$loaded[__METHOD__] = true;

		return;
	}

	/**
	 * Method to load the UIkit.Icons JavaScript framework into the document head
	 *
	 * @param   boolean  $min         True to enable the minimized version [optional]
	 *
	 * @return  void
	 */
	public static function icons($min = true)
	{
		if (!empty(static::$loaded[__METHOD__])) {
			return;
		}

		HTMLHelper::_('script', 'uikit3/dist/uikit-icons' . ($min ? '.min' : '') . '.js', array('version' => 'auto', 'relative' => true));

		static::$loaded[__METHOD__] = true;

		return;
	}

	/**
	 * Method to load the UIkit CSS framework into the document head
	 *
	 * @param   boolean  $rtl         True to enable RTL mode in styles [optional]
	 * @param   boolean  $min         True to enable the minimized version [optional]
	 *
	 * @return  void
	 */
	public static function css($rtl = false, $min = true)
	{
		if (!empty(static::$loaded[__METHOD__])) {
			return;
		}

		HTMLHelper::_('stylesheet', 'uikit3/dist/uikit' . ($rtl ? '-rtl' : '') . ($min ? '.min' : '') . '.css', array('version' => 'auto', 'relative' => true));

		static::$loaded[__METHOD__] = true;

		return;
	}
}
