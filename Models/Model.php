<?php 

class Model{

	private $bd;

	private static $instance = null;

	/**
	 * Constructeur créant l'objet PDO et l'affectant à $bd
	 */
	private function __construct(){
		$dsn   = 'mysql:host=localhost;dbname=db_simpson'; //A renseigner
		$login = 'root'; //A renseigner
		$mdp   = ''; //A renseigner
		$this->bd = new PDO($dsn,$login,$mdp);
		$this->bd->query("SET NAMES 'utf8'");
        // Activation des erreurs PDO
  		$this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public function get_all(){
		$r = $this->bd->prepare("Select * from personnages");
		$r->execute();
		return $r->fetchall(PDO::FETCH_ASSOC);
	}
	public function get_family($nom){
		$r = $this->bd->prepare("Select * from personnages where nom = :n");
		//$r->bindValue(':n', $nom);
		$r->execute(array(':n'=>$nom));
		return $r->fetchall(PDO::FETCH_ASSOC);

	}
	public static function get_model(){
		if(is_null(self::$instance))
			self::$instance = new Model();
		return self::$instance;

	}
}
