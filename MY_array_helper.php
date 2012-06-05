<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * CodeIgniter Array Helpers
 *
 * @package		OpenReceptor CMS
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Dimitris Krestos
 * @link		http://vdw.staytuned.gr
 */

// ------------------------------------------------------------------------

/**
 * Compare
 *
 * Compares two arrays using their common (intersection) keys.
 *
 * @access	public
 * @param	array	a flat associative array
 * @param	array	a flat associative array
 * @return	bool
 */
if ( ! function_exists('compare'))
{
	function compare($array1, $array2)
	{

		$common_keys = array_intersect_key($array2, $array1);

		$common_values = array_intersect_assoc($array2, $array1);

		$against = array_intersect_key($common_keys, $common_values);

		if ($common_keys == $against) {

			return TRUE;

		} else {

			return FALSE;

		}

	}
}

/* End of file MY_array_helper.php */
/* Location: ./application/helpers/MY_array_helper.php */