<?php
   class modelo{
    private $id;
    private $imagen;
    
   
    
    
       
    function __construct($id,$imagen)
	{
		$this->setId($id);
		$this->setImagen($imagen);		
		
		
	} 
       
    public function getId(){
		return $this->id;
	}
 
	public function setId($id){
		$this->id = $id;
	}
    
    public function getImagen(){
		return $this->imagen;
	}
 
	public function setImagen($imagen){
		$this->imagen = $imagen;
	}
   

       
   
    
    
       
    public static function save($modelo){
		$db=Db::getConnect();
		
		$insert=$db->prepare('INSERT INTO modelo VALUES (:id, :imagen)');
        $insert->bindValue('id',$modelo->getId());
		$insert->bindValue('imagen',$modelo->getImagen());
		
	
		
		$insert->execute();
	}
 
	public static function all(){
		$db=Db::getConnect();
		$listaModelo=[];
 
		$select=$db->query('SELECT * FROM modelo order by id');
 
		foreach($select->fetchAll() as $modelo){
			$listaModelo[]=new modelo($modelo['id'],$modelo['imagen']);
		}
		return $listaModelo;
	}
 
	public static function searchById($id){
		$db=Db::getConnect();
		$select=$db->prepare('SELECT * FROM modelo WHERE id_Modelo=:id_Modelo');
		$select->bindValue('id_Modelo',$id_Modelo);
		$select->execute();
 
		$modeloDb=$select->fetch();
 
 
		$modelo = new modelo($modeloDb['id_Modelo'],$modeloDb['imagen']);
		
		return $modelo;
 
	}
 
	public static function update($modelo){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE modelo SET id_Modelo=:id_Modelo,  imagen=:imagen');
		$update->bindValue('id_Modelo',$modelo->getId_Modelo());
		$update->bindValue('imagen',$modelo->getImagen());
		
		
		$update->execute();
	}
 
	public static function delete($id){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM modelo WHERE id_Modelo=:id_Modelo');
		$delete->bindValue('id_Modelo',$id_Modelo);
		$delete->execute();		
	}
}
?>