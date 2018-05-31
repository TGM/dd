<?php

if (!function_exists('d') || !function_exists('dd'))
{
	function d($var)
	{
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
	}
	
	function dd($var)
	{
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
	
		die();
	}	
}
	else
{
	trigger_error ('d() or dd() already exist as functions. debug-die cannot be used.', E_USER_ERROR);
}