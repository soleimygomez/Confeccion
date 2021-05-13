<?php 

class MedidaController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('../../../Views/admin/inicio.php');
	}

	function register(){
		require_once('../../../Views/admin/medida/register.php');
	}

	function save(){

		$medidas= new Medida($_POST['id_Medidas'],$_POST['cliente'],$_POST['b'],$_POST['c'],$_POST['k'],$_POST['td'],$_POST['te'],$_POST['lp'],$_POST['sp'],$_POST['ap'],$_POST['ae'],$_POST['h'],$_POST['im'],$_POST['am'],$_POST['lm'],$_POST['app'],$_POST['lb'],$_POST['lpp'],$_POST['ar'],$_POST['ab'],$_POST['lf'],$_POST['es'],$_POST['lsh']);
		$clientes=new Cliente($_POST['id_Cliente'],$_POST['nombre'],$_POST['telefono'],$_POST['direccion'],$_POST['n_pagina']);
		Medida::save($medidas);
		echo '<script>
        alert("Registrado correctamente");
         location.href="ir-registro.php";
        </script>';
	}
	

	function show(){
		$listaMedida=Medida::all();

		require_once('../../../Views/admin/medida/show.php');
	}
 
	function updateshow(){
		$id_Medidas=$_GET['id_Medidas'];
		require_once('../../../Views/admin/medida/updateshow.php');
	}

	function update(){
		$medidas= new Medida($_POST['id_Medidas'],$_POST['cliente'],$_POST['b'],$_POST['c'],$_POST['k'],$_POST['td'],$_POST['te'],$_POST['lp'],$_POST['sp'],$_POST['ap'],$_POST['ae'],$_POST['h'],$_POST['im'],$_POST['am'],$_POST['lm'],$_POST['app'],$_POST['lb'],$_POST['lpp'],$_POST['ar'],$_POST['ab'],$_POST['lf'],$_POST['es'],$_POST['lsh']);
	$clientes=new Cliente($_POST['id_Cliente'],$_POST['nombre'],$_POST['telefono'],$_POST['direccion'],$_POST['n_pagina']);
		Medida::update($medidas);
		$this->show();
	}
	function delete(){
		$id_Medidas=$_GET['id_Medidas'];
		Medida::delete($id_Medidas);
		$this->show();
	}

	function search(){
		if (!empty($_POST['$id_Medidas'])) {
			$$id_Medidas=$_POST['$id_Medidas'];
			$medidas=Medida::searchById($$id_Medidas);
			$listaMedida[]=$medidas;
			//var_dump($id);
			//die();
			require_once('../../../Views/admin/medida/show.php');
		} else {
			$listaMedida=Medida::all();

			require_once('../../../Views/admin/medida/show.php');
		}
		
		
	}

	function error(){
		require_once('../../../Views/admin/medida/error.php');
	}

}

?>