<?php
namespace jakaria\To_Do_List;

/**
 * 
 */
class View
{
	
	function __construct()
	{
		# code...
	}

	public function index(){
		include TDL . '/Views/to-do-html.php';
	}
}