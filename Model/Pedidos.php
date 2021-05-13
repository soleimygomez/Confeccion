<?php
   class Pedidos{
    private $id_pedido;
    private $cliente;
    private $precio;
    private $abono;
    private $fecha_inicio;
    private $fecha_entrega;
    private $modelo;
    
    private $observacion;
    
    function __construct($id_pedido,$cliente,$precio,$abono,$fecha_inicio,$fecha_entrega, $modelo,$observacion)
	{
		$this->setId_pedido($id_pedido);
		$this->setCliente($cliente);
		$this->setPrecio($precio);
        $this->setAbono($abono);
        $this->setFecha_inicio($fecha_inicio);
        $this->setFecha_entrega($fecha_entrega);
        $this->setModelo($modelo);
		
		$this->setObservacion($observacion);	
	} 
       
    public function getId_pedido(){
		return $this->id_pedido;
	} 
	public function setId_pedido($id_pedido){
		$this->id_pedido = $id_pedido;
	}

    

    public function getCliente(){
		return $this->cliente;
	}
	public function setCliente($cliente){
		$this->cliente = $cliente;
	}



	 public function getPrecio(){
		return $this->precio;
	} 
	public function setPrecio($precio){
		$this->precio = $precio;
	}



    public function getAbono(){
		return $this->abono;
	}
	public function setAbono($abono){
		$this->abono = $abono;
	}



	public function getFecha_inicio(){
		return $this->fecha_inicio;
	}
	public function setFecha_inicio($fecha_inicio){
		$this->fecha_inicio = $fecha_inicio;
	}


    
    public function getFecha_entrega(){
		return $this->fecha_entrega;
	} 
	public function setFecha_entrega($fecha_entrega){
		$this->fecha_entrega = $fecha_entrega;
	}

	 public function getModelo(){
		return $this->modelo;
	} 
	public function setModelo($modelo){
		$this->modelo = $modelo;
	}


	public function setObservacion($observacion){
		$this->observacion=$observacion;
	}
    
    public function getObservacion(){
		return $this->observacion;
	} 

    public static function save($pedidos){
		$db=Db::getConnect();
		//var_dump($granja);
		//die();
		$insert=$db->prepare('INSERT INTO pedidos VALUES (:id_pedido, :cliente,:precio,:abono,:fecha_inicio,:fecha_entrega,:modelo,:observacion)');
        $insert->bindValue('id_pedido',$pedidos->getId_pedido());
		$insert->bindValue('cliente',$pedidos->getCliente());
		$insert->bindValue('precio',$pedidos->getPrecio());
        $insert->bindValue('abono',$pedidos->getAbono());
        $insert->bindValue('fecha_inicio',$pedidos->getFecha_inicio());
		$insert->bindValue('fecha_entrega',$pedidos->getFecha_entrega());
		$insert->bindValue('modelo',$pedidos->getModelo());
		
		$insert->bindValue('observacion',$pedidos->getObservacion());
		$insert->execute();
	}
 
	public static function all(){
		$db=Db::getConnect();
		$listaPedidos=[];
 
		$select=$db->query('SELECT * FROM pedidos ');
 
		foreach($select->fetchAll() as $pedidos){
			$listaPedidos[]=new Pedidos($pedidos['id_Pedido'] ,$pedidos['cliente'],$pedidos['precio'],$pedidos['abono'],$pedidos['fecha_inicio'],$pedidos['fecha_entrega'],$pedidos['modelo'],$pedidos['observacion']);
		}
		return $listaPedidos;
	}
 
	public static function searchById($id_pedido){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM pedidos WHERE id_Pedido=:id_pedido');
		$select->bindValue('id_pedido',$id_pedido);
		$select->execute();
 
		$pedidosDb=$select->fetch();
 
 
		$pedidos = new Pedidos($pedidosDb['id_Pedido'] ,$pedidosDb['cliente'],$pedidosDb['precio'],$pedidosDb['abono'],$pedidosDb['fecha_inicio'],$pedidosDb['fecha_entrega'],$pedidosDb['modelo'],$pedidosDb['observacion']);
		//var_dump($granja);
		//die();
		return $pedidos;
 
	}
 
	public static function update($pedidos){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE pedidos SET id_pedido=:id_pedido, cliente=:cliente, precio=:precio, abono=:abono, fecha_inicio=:fecha_inicio, fecha_entrega=:fecha_entrega, modelo=:modelo, observacion=:observacion WHERE id_pedido=:id_pedido');
		$update->bindValue('id_pedido', $pedidos->getId_pedido());
		$update->bindValue('cliente', $pedidos->getCliente());
		$update->bindValue('precio', $pedidos->getPrecio());
		$update->bindValue('abono',$pedidos->getAbono());
		$update->bindValue('fecha_inicio', $pedidos->getFecha_inicio());
        $update->bindValue('fecha_entrega',$pedidos->getFecha_entrega());
        $update->bindValue('modelo',$pedidos->getModelo());
       
        $update->bindValue('observacion',$pedidos->getObservacion());
		$update->execute();
	}
 
	public static function delete($id_pedido){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM pedidos WHERE id_pedido=:id_pedido');
		$delete->bindValue('id_pedido',$id_pedido);
		$delete->execute();		
	}
}
?>
