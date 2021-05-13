<?php
   class Clientes{
    private $id_Cliente;
    private $nombre;
    private $telefono;
    private $direccion;
    private $n_pagina;
    
    function __construct($id_Cliente,$nombre,$telefono,$direccion,$n_pagina)
	{
		$this->setId_cliente($id_Cliente);
		$this->setNombre($nombre);
		$this->setTelefono($telefono);
		$this->setDireccion($direccion);
		$this->setNpagina($n_pagina);
	
	}
    public function getId_cliente(){
		return $this->Id_cliente;
	}
	public function setId_cliente($id_Cliente){
		return $this->Id_cliente=$id_Cliente;
	}
 

 	public function getNombre(){
		return $this->nombre;
	}
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}


    public function getTelefono(){
		return $this->telefono;
	}
 	public function setTelefono($telefono){
		$this->telefono = $telefono;
	}


    public function getDireccion(){
		return $this->direccion;
	}
 
	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}
 

	public function getNpagina(){
		return $this->n_pagina;
	}
 
	public function setNpagina($n_pagina){
		$this->n_pagina = $n_pagina;
	}
    
    public static function save($clientes){
		$db=Db::getConnect();
		//var_dump($galpon);
 		//die();
		$insert=$db->prepare('INSERT INTO clientes  VALUES (:id_Cliente, :nombre,:telefono, :direccion, :n_pagina )');
		$insert->bindValue('id_Cliente',$clientes->getId_cliente());
		$insert->bindValue('nombre',$clientes->getNombre());
		$insert->bindValue('telefono',$clientes->getTelefono());
        $insert->bindValue('direccion',$clientes->getDireccion());
        $insert->bindValue('n_pagina',$clientes->getNpagina());
		$insert->execute();
	}


	
    public static function all(){
		$db=Db::getConnect();
		$listaCliente=[];
  
		$select=$db->query('SELECT * FROM clientes  order by id_Cliente');
 
		foreach($select->fetchAll() as $clientes){
			$listaCliente[]=new Clientes($clientes['id_Cliente'],$clientes['nombre'],$clientes['telefono'],$clientes['direccion'],$clientes['n_pagina']);
		}
		return $listaCliente;
	}

	
 
	public static function searchById($id_Cliente){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM clientes WHERE id_Cliente=:id_Cliente');
		$select->bindValue('id_Cliente',$id_Cliente);
		$select->execute();
 
		$clientesDb=$select->fetch();
 
 
		$cliente = new Clientes($clientesDb['id_Cliente'],$clientesDb['nombre'],$clientesDb['telefono'],$clientesDb['direccion'],$clientesDb['n_pagina']);
		//var_dump($lote);
		//die();
		return $cliente;
 
	}
	public static function searchByNombre($nombre){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM clientes WHERE nombre=:nombre');
		$select->bindValue('nombre',$nombre);
		$select->execute();
 
		$clientesDb=$select->fetch();
 
 
		$cliente = new Clientes($clientesDb['id_Cliente'],$clientesDb['nombre'],$clientesDb['telefono'],$clientesDb['direccion'],$clientesDb['n_pagina']);
 
	}

	



 
	public static function update($clientes){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE clientes  SET nombre=:nombre, telefono=:telefono,  direccion=:direccion, n_pagina=:n_pagina WHERE id_Cliente=:id_Cliente ');
		$update->bindValue('id_Cliente',$clientes->getId_cliente());
		$update->bindValue('nombre',$clientes->getNombre());
		$update->bindValue('telefono',$clientes->getTelefono());
        $update->bindValue('direccion',$clientes->getDireccion());
        $update->bindValue('n_pagina',$clientes->getNpagina());
        $update->execute();

	}
 
	public static function delete($id_Cliente){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM clientes WHERE id_Cliente=:id_Cliente');
		$delete->bindValue('id_Cliente',$id_Cliente);
		$delete->execute();		
	}
    
}
?>s