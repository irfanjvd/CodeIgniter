<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2006, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Number Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/number_helper.html
 */

// ------------------------------------------------------------------------

/**
 * Formats a numbers as bytes, based on size, and adds the appropriate suffix
 *
 * @access	public
 * @param	mixed	// will be cast as int
 * @return	string
 */
if ( ! function_exists('byte_format'))
{
	function byte_format($num)
	{
		$num = (int) $num;
		
		if ($num >= 1000000000) 
		{
			$num = round($num/107374182)/10;
			$unit  = 'GB';
		}
		elseif ($num >= 1000000) 
		{
			$num = round($num/104857)/10;
			$unit  = 'MB';
		}
		elseif ($num >= 1000) 
		{
			$num = round($num/102)/10;
			$unit  = 'KB';
		}
		else
		{
			$unit = 'Bytes';
		}

		return number_format($num, 1).' '.$unit;
	}	
}

/* End of file number_helper.php */
/* Location: ./system/helpers/number_helper.php */