<?php
   class Medidas {
    private $id_Medidas;
    private $cliente;
    private $b;
    private $c;
    private $k;
    private $td;
    private $te;
    private $lp;
    private $sp;
    private $ap;
    private $ae;
    private $h;
    private $im;
    private $am;
    private $lm;
    private $app;
    private $lb;
    private $lpp;
    private $ar;
    private $ab;
    private $lf;
    private $es;
    private $lsh;

    function __construct($id_Medidas, $cliente, $b , $c,$k,$td,$te,$lp,$sp,$ap,$ae,$h,$im,$am,$lm,$app,$lb,$lpp,$ar,$ab,$lf,$es,$lsh)
	{
		$this->setId_Medidas($id_Medidas);
		$this->setCliente($cliente);
		$this->setB($b);
		$this->setC($c);
		$this->setK($k);
		$this->setTd($td);
		$this->setTe($te);
		$this->setLp($lp);
		$this->setSp($sp);
		$this->setAp($ap);
		$this->setAe($ae);
		$this->setH($h);
		$this->setIm($im);
		$this->setAm($am);
		$this->setLm($lm);
		$this->setApp($app);
		$this->setLb($lb);
		$this->setLpp($lpp);
		$this->setAr($ar);
		$this->setAb($ab);
		$this->setLf($lf);
		$this->setEs($es);
		$this->setLsh($lsh);
	}
    public function getId_Medidas(){
		return $this->id_Medidas;
	} 
	public function setId_Medidas($id_Medidas){
		$this->id_Medidas = $id_Medidas;
	}
	// ----------------------------------

	public function getCliente(){
		return $this->cliente;
	} 
	public function setCliente($cliente){
		$this->cliente = $cliente;
	}
	// -----------------------------------


    public function getB(){
		return $this->b;
	} 
	public function setB($b){
		$this->b = $b;
	}

    public function getC(){
		return $this->c;
	} 
	public function setC($c){
		$this->c = $c;
	}
 

	public function getK(){
		return $this->k;
	}
 
	public function setK($k){
		$this->k = $k;
	}



	public function setTd($td){
		$this->td = $td;
	}
    public function getTd(){
		return $this->td;
	}
 
	public function setTe($te){
		$this->te = $te;
	}
 

	public function getTe(){
		return $this->te;
	}
 
	public function setLp($lp){
		$this->lp = $lp;
	}
	public function getLp(){
		return $this->lp;
	}
	public function setSp($sp){
		$this->sp = $sp;
	}
	public function getSp(){
		return $this->sp;
	}
	public function setAp($ap){
		$this->ap = $ap;
	}
	public function getAp(){
		return $this->ap;
	}

	public function setAe($ae){
		$this->ae = $ae;
	}
	public function getAe(){
		return $this->ae;
	}

	public function setH($h){
		$this->h = $h;
	}
	public function getH(){
		return $this->h;
	}

	public function setIm($im){
		$this->im = $im;
	}
	public function getIm(){
		return $this->im;
	}

	public function setAm($am){
		$this->am = $am;
	}
	public function getAm(){
		return $this->am;
	}

	public function setLm($lm){
		$this->lm = $lm;
	}
	public function getLm(){
		return $this->lm;
	}

	public function setApp($app){
		$this->app = $app;
	}
	public function getApp(){
		return $this->app;
	}

	public function setLb($lb){
		$this->lb = $lb;
	}
	public function getLb(){
		return $this->lb;
	}
    
    public function setLpp($lpp){
		$this->lpp = $lpp;
	}
	public function getlpp(){
		return $this->lpp;
	}

	public function setAr($ar){
		$this->ar = $ar;
	}
	public function getAr(){
		return $this->ar;
	}

	public function setAb($ab){
		$this->ab = $ab;
	}
	public function getAb(){
		return $this->ab;
	}
	public function setLf($lf){
		$this->lf = $lf;
	}
	public function getLf(){
		return $this->lf;
	}
	public function setEs($es){
		$this->es = $es;
	}
	public function getEs(){
		return $this->es;
	}
	public function setLsh($lsh){
		$this->lsh = $lsh;
	}
	public function getLsh(){
		return $this->lsh;
	}
    public static function save($medidas){
		$db=Db::getConnect();
		//var_dump($galpon);
 		//die();
		$insert=$db->prepare('INSERT INTO medidas VALUES (:id_Medidas, :cliente,:b ,:c, :k, :td ,:te ,:lp ,:sp, :ap, :ae,:h, :im ,:am ,:lm, :app, :lb ,:lpp, :ar, :ab, :lf, :es, :lsh)');
		
		$insert->bindValue('id_Medidas',$medidas->getid_Medidas());
		$insert->bindValue('cliente',$medidas->getCliente());
		$insert->bindValue('b',$medidas->getB());
        $insert->bindValue('c',$medidas->getC());
        $insert->bindValue('k',$medidas->getK());
        $insert->bindValue('td',$medidas->getTd());
        $insert->bindValue('te',$medidas->getTe());
        $insert->bindValue('lp',$medidas->getLp());
        $insert->bindValue('sp',$medidas->getSp());
        $insert->bindValue('ap',$medidas->getAp());
        $insert->bindValue('ae',$medidas->getAe());
        $insert->bindValue('h',$medidas->getH());
        $insert->bindValue('im',$medidas->getIm());
        $insert->bindValue('am',$medidas->getAm());
        $insert->bindValue('lm',$medidas->getLm());
        $insert->bindValue('app',$medidas->getApp());
        $insert->bindValue('lb',$medidas->getLb());
        $insert->bindValue('lpp',$medidas->getLpp());
        $insert->bindValue('ar',$medidas->getAr());
        $insert->bindValue('ab',$medidas->getAb());
        $insert->bindValue('lf',$medidas->getLf());
        $insert->bindValue('es',$medidas->getEs());
        $insert->bindValue('lsh',$medidas->getLsh());
		$insert->execute();
	}
    public static function all(){
		$db=Db::getConnect();
		$listaMedida=[];
 
		$select=$db->query('SELECT * FROM medidas order by id_Medidas');
 
		foreach($select->fetchAll() as $medidas){
			$listaMedida[]=new Medida($medidas['id_Medidas'],$medidas['cliente'],$medidas['b'],$medidas['c'],$medidas['k'],$medidas['td'],$medidas['te'],$medidas['lp'],$medidas['sp'],$medidas['ap'],$medidas['ae'],$medidas['h'],$medidas['im'],$medidas['am'],$medidas['lm'],$medidas['app'],$medidas['lb'],$medidas['lpp'],$medidas['ar'],$medidas['ab'],$medidas['lf'],$medidas['es'],$medidas['lsh']);
		}
		return $listaMedida;
	}
 
	public static function searchById($id_Cliente){
		
		
		$db=Db::getConnect();
		$select=$db->prepare("SELECT * FROM medidas WHERE cliente = '$id_Cliente' ");
				

		$select->bindValue('cliente',$id_Cliente);
		$select->execute();
 
		$medidasDb=$select->fetch();
 
 
		$medidas = new Medidas($medidasDb['id_Medidas'],$medidasDb['cliente'],$medidasDb['b'],$medidasDb['c'],$medidasDb['k'],$medidasDb['td'],$medidasDb['te'],$medidasDb['lp'],$medidasDb['sp'],$medidasDb['ap'],$medidasDb['ae'],$medidasDb['h'],$medidasDb['im'],$medidasDb['am'],$medidasDb['lm'],$medidasDb['app'],$medidasDb['lb'],$medidasDb['lpp'],$medidasDb['ar'],$medidasDb['ab'],$medidasDb['lf'],$medidasDb['es'],$medidasDb['lsh']);
		//var_dump($lote);
		//die();
		return $medidas;
		
 
	}

	



 
	public static function update($medidas){
		$db=Db::getConnect();
		$update=$db->prepare('UPDATE medidas SET cliente=:cliente, b=:b, c=:c, k=:k, td=:td, te=:te, lp=:lp,
																   sp=:sp, ap=:ap, ae=:ae, h=:h, im=:im,
																   am=:am, lm=:lm, app=:app, lb=:lb, lpp=:lpp,
																   ar=:ar, ab=:ab, lf=:lf, es=:es, lsh=:lsh 
																   WHERE  id_Medidas =:id_Medidas ');
		
		$update->bindValue('id_Medidas',$medidas->getId_Medidas());
		$update->bindValue('cliente',$medidas->getCliente());
		$update->bindValue('b',$medidas->getB()); 
        $update->bindValue('c',$medidas->getC());
        $update->bindValue('k',$medidas->getK());
        $update->bindValue('td',$medidas->getTd());
        $update->bindValue('te',$medidas->getTe());
        $update->bindValue('lp',$medidas->getLp());
        $update->bindValue('sp',$medidas->getSp());
        $update->bindValue('ap',$medidas->getAp());
        $update->bindValue('ae',$medidas->getAe());
        $update->bindValue('h',$medidas->getH());
        $update->bindValue('im',$medidas->getIm());
        $update->bindValue('am',$medidas->getAm());
        $update->bindValue('lm',$medidas->getLm());
        $update->bindValue('app',$medidas->getApp());
        $update->bindValue('lb',$medidas->getLb());
        $update->bindValue('lpp',$medidas->getLpp());
        $update->bindValue('ar',$medidas->getAr());
        $update->bindValue('ab',$medidas->getAb());
        $update->bindValue('lf',$medidas->getLf());
        $update->bindValue('es',$medidas->getEs());
        $update->bindValue('lsh',$medidas->getLsh());
		$update->execute();
	}
 
	public static function delete($id_Medidas){
		$db=Db::getConnect();
		$delete=$db->prepare('DELETE  FROM medidas WHERE  id_Medidas=:id_Medidas');
		$delete->bindValue('id_Medidas',$id_Medidas);
		$delete->execute();		
	}
    
}
?>