<?php 

class ClientesController
{
	
	function __construct()
	{
		
	}

	function index(){

		$listaCliente=Clientes::all();

		require_once('../../../Views/admin/inicio.php');
	}

	function register(){
		$listaCliente=Clientes::all();
		require_once('../../../Views/admin/cliente/register.php');
	}

	function save(){
		//alimentamos el generador de aleatorios
		mt_srand (time());
		//generamos un número aleatorio
		$id_Cliente = mt_rand(0,500000); 
		//
		$id_Medidas = mt_rand(0,500000); 


		$clientes=new Clientes($id_Cliente,$_POST['nombre'],$_POST['telefono'],$_POST['direccion'],$_POST['n_pagina']);
		Clientes::save($clientes);
		// --------------------------------------------------------------------------------------------------------------------------
		$medidas= new Medidas($id_Medidas,$id_Cliente,
									$_POST['b'],$_POST['c'],
									 $_POST['k'],$_POST['td'],
									  $_POST['te'],$_POST['lp'],
									   $_POST['sp'],$_POST['ap'],
				 					    $_POST['ae'],$_POST['h'],
									     $_POST['im'],$_POST['am'],
									      $_POST['lm'],$_POST['app'],
									       $_POST['lb'],$_POST['lpp'],
									        $_POST['ar'],$_POST['ab'],
									         $_POST['lf'], 
									          $_POST['es'], 
									           $_POST['lsh']);
		
		Medidas::save($medidas);
		// ---------------------------------------------------------------------------------------------------------------------------
		echo '<script>
        alert("Registrado correctamente");
         location.href="ir-registro.php";
        </script>';
	
	}

	function show(){
		$listaCliente=Clientes::all();

    require_once('../../../Views/admin/cliente/show.php');

	}

 	function show2(){
		$listaCliente=Clientes::all();
		$listaPedido=Pedidos::all();
    require_once('../../../Views/admin/cliente/show2.php');

	}
	function show3(){
		$id_Cliente = $_GET['id_Cliente'];
		
		$cliente = Clientes::searchById($id_Cliente);
		$medida  = Medidas::searchById($id_Cliente);

		require_once('../../../Views/admin/cliente/show3.php');
	}
	
	

	function updateshow(){
		 
		$id_Cliente = $_GET['id_Cliente'];
		
		$cliente = Clientes::searchById($id_Cliente);
		$medida  = Medidas::searchById($id_Cliente);

		require_once('../../../Views/admin/cliente/updateshow.php');
		
	}


	

	function update(){
		$clientes=new Clientes($_POST['id_Cliente'],$_POST['nombre'],$_POST['telefono'],$_POST['direccion'],$_POST['n_pagina']);
		Clientes::update($clientes);
		// --------------------------------------------------------------------------------------------------------------------------
		$medidas= new Medidas($_POST['id_Medidas'],
								   $_POST['id_Cliente'],
									$_POST['b'],$_POST['c'],
									 $_POST['k'],$_POST['td'],
									  $_POST['te'],$_POST['lp'],
									   $_POST['sp'],$_POST['ap'],
				 					    $_POST['ae'],$_POST['h'],
									     $_POST['im'],$_POST['am'],
									      $_POST['lm'],$_POST['app'],
									       $_POST['lb'],$_POST['lpp'],
									        $_POST['ar'],$_POST['ab'],
									         $_POST['lf'], 
									          $_POST['es'], 
									           $_POST['lsh']);
		
		Medidas::update($medidas);
		// ---------------------------------------------------------------------------------------------------------------------------
		
		echo '<script>
        		alert("Datos Actualizados");
        	  </script>';
	    $this->show();
		
	}
	function delete(){
		$id_Cliente=$_GET['id_Cliente'];
		Clientes::delete($id_Cliente);
		$this->show();
	}

	function search(){
		if (!empty($_POST['id_Cliente'])) {
			$id_Cliente=$_POST['id_Cliente'];
			$clientes=Cliente::searchById($id_Cliente);
			$listaCliente[]=$cliente;
			//var_dump($id);
			//die();
			require_once('../../../Views/admin/cliente/show.php');
		} else {
			$listaCliente=Cliente::all();

			require_once('../../../Views/admin/cliente/show.php');
		}
		
		
	}

	function error(){
		require_once('../../../Views/admin/cliente/error.php');
	}

}

?>