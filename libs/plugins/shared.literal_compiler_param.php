<?php
/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsShared
 */

/**
 * evaluate compiler parameter
 *
 * @param array   $params  parameter array as given to the compiler function
 * @param integer $index   array index of the parameter to convert
 * @param mixed   $default value to be returned if the parameter is not present
 *
 * @return mixed evaluated value of parameter or $default
 * @throws SmartyException if parameter is not a literal (but an expression, variable, …)
 * @author Rodney Rehm
 */
function