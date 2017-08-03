<?php
include "libs/Smarty.class.php";

function my_get_sysos(){
	if(stripos($_SERVER["HTTP_USER_AGENT"],"Windows"))
	{
		return 'w';
	}
	else if(stripos($_SERVER["HTTP_USER_AGENT"],"android"))
	{
		return 'a';
	}
	else if(stripos($_SERVER["HTTP_USER_AGENT"],"iphone"))
	{
		return 'i';
	}
}

$samre = new Smarty;
switch(my_get_sysos())
{
		case 'w':
			$samre->display('w.html');
	break;

		case 'a':
			$samre->display('m.html');
	break;

		case 'i':
			$samre->display('m.html');
	break;
	default:
		$samre->display('m.html');
}
?>