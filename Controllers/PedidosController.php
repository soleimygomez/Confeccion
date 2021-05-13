<?php 

class PedidosController
{
	
	function __construct()
	{
		
	}

	function index(){
		require_once('../../../Views/admin/index.php');
	}

	function register(){
		require_once('../../../Views/admin/pedido/register.php');
	}

	function save(){
		//generamos un número aleatorio
		mt_srand (time());
		//Se guarda en una variable
		$id_Pedido = mt_rand(0,500000); 
		// imagen
		$id = mt_rand(0,500000); 


			include("conexion.php");


			$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
			$tipo_tela =addslashes(file_get_contents($_FILES['tipo_tela']['tmp_name']));


			$query = "INSERT INTO modelo(id,imagen) VALUES('$id' , '$imagen', '$tipo_tela')";

			$res = $conexion->query($query);

						
		
$pedido= new Pedidos($id_Pedido,$_POST['id_Cliente'],$_POST['precio'],$_POST['abono'],$_POST['fecha_inicio'],$_POST['fecha_entrega'],$id,$_POST['observacion']);
		Pedidos::save($pedido);
		//-----------------------------------------------------------------------------------------------------------------------
		
		echo '<script>
        alert("Registrado correctamente");
         location.href="../../../Views/admin/pedido/ir-lista-pedido.php";
        </script>';
	
	}

	function show(){
		$listaPedido=Pedidos::all();
		$listaCliente=Clientes::all();
		require_once('../../../Views/admin/pedido/show.php');
	}
 
	function updateshow(){
		$id_Pedido=$_GET['id_Pedido'];
		
		$pedido = Pedidos::searchById($id_Pedido);
		
		require_once('../../../Views/admin/pedido/updateshow.php');
	}

	function updateshow2(){
		$id_Cliente = $_GET['id_Cliente'];
		
		$cliente = Clientes::searchById($id_Cliente);
		$medida  = Medidas::searchById($id_Cliente);

		require_once('../../../Views/admin/pedido/updateshow2.php');
		
	}

	function update(){
		$pedido= new Pedidos($_POST['id_Pedido'],$_POST['precio'],$_POST['abono'],$_POST['fecha_inicio'],$POST['fecha_entrega'],$POST['modelo'],$POST['observacion']);

		Pedidos::update($pedido);
		//-------------------------------------------------------------------------------------------------------------------------------
		
		echo '<script>
        		alert("Datos Actualizados");
        	  </script>';
	    
		$this->show();
	}
	function delete(){
		$id_Pedido=$_GET['id_Pedido'];
		Pedidos::delete($id_Pedido);
		$this->show();
	}
    
	function search(){
		if (!empty($_POST['id_Pedido'])) {
			$id_Pedido=$_POST['id_Pedido'];
			$pedido=Pedido::searchById($id_Pedido);
			$listaPedido[]=$pedido;
			//var_dump($id);
			//die();
			require_once('../../../Views/admin/pedido/show.php');
		} else {
			$listaPedido=Pedido::all();

			require_once('../../../Views/admin/pedido/show.php');
		}
		
		
	}


	function error(){
		require_once('../../../Views/admin/Pedido/error.php');
	}

}

?>