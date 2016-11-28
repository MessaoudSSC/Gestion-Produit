<?php
class DataBase{
	private $SGBD;
	private $Server;
	private $DataBaseName;
	private $Login;
	private $Pswd;
	public $Conex;
	
	public function __construct(){
		$Param = parse_ini_file("Config/Config.ini");		
		$this->SGBD = $Param["SGBD"];
		$this->Server = $Param["Server"];
		$this->DataBaseName = $Param["DateBaseName"];
		$this->Login = $Param["Login"];
		$this->Pswd = $Param["Pswd"];
		
		$this->Conex = new PDO("$this->SGBD:host=$this->Server;dbname=$this->DataBaseName", $this->Login, $this->Pswd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		
		
	}
}
?>