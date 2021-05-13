<?php 

class AdministradorController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('../../../Views/admin/inicio.php');
	}

	

	function error(){
		require_once('../../../Views/admin/error.php');
	}

}

?>