 <?php 

$controllers=array(
	'administrador'=>['index','register','save','show','updateshow','update','delete','search','error'],
	'clientes'=>['index','register','save','show','show2','show3','updateshow','update','delete','search','error'],
	'pedidos'=>['index','register','save','show','updateshow','updateshow2','update','delete','search','error'],
	'modelo'=>['index','register','save','show','updateshow','update','delete','search','error'],
	
);

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	} 
	else{
		echo '<script>
        alert("ERROR");
         location.href="ir-registro.php";
        </script>';
		call('administrador','error');
		call('clientes','error');
		call('pedidos','error');
		
	}		
}else{
	
	echo("error");
} 

function call($controller, $action){
	require_once('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
	
        
            
        case 'clientes':
		require_once('Model/Clientes.php');
		require_once('Model/Medidas.php');
		require_once('Model/Pedidos.php');
		$controller= new ClientesController();
		break;

		case 'medidas':
		require_once('Model/Medidas.php');
		$controller= new MedidasController();
		break;
        
        case 'administrador':
		require_once('Model/Administrador.php');
		$controller= new AdministradorController();
		break;
        
        
       
		case 'pedidos':
		require_once('Model/Pedidos.php');
		require_once('Model/Clientes.php');
		require_once('Model/Medidas.php');
		require_once('Model/Modelo.php');
		$controller= new PedidosController();
		break;

        

		default:
				# code...
		break;

	}
	$controller->{$action}();
}

?>