<?php

Class Santosh{

	private $host="localhost";
	private $dbname="nita";
	private $username="root";
	private $password="a";
	public $connection="";


	public function __construct(){
		$this->connection = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->username,$this->password);
		$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->connection->exec("SET NAMES 'utf8'");
		//var_dump($this->connection);
	}
	public function create($name, $address, $father_name, $mother_name){
		$sql = "INSERT INTO binod(name, address, father_name, mother_name) VALUES (:name, :address, :father_name, :mother_name)";
		$query = $this->connection->prepare($sql);
		$submit=$query->execute(array(':name'=>$name,
									':address'=>$address,
							  ':father_name'=>$father_name,
							  ':mother_name'=>$mother_name
							  ));
	}
	

	Public function read(){
		$sql="SELECT * FROM binod";
		$query=$this->connection->query($sql);
		$query-> execute();
		$submit=$query->fetchAll(PDO::FETCH_ASSOC);
		return $submit;


	}
	public function getValueById($id){
		$sql="SELECT FROM binod WHERE id=:id";
		$query=$this->connection->prepare($sql);
		$query->execute(array(':id'=>$id));
		$submit=$query->fetch("PDO::FETCH_ASSOC");
		return $sumbit;

	}
	public function update($id,$name,$address,$father_name,$mother_name){
		$sql="UPDATE binod SET name=:name,address=:address,father_name=:father_name,mother_name=:mother_name";
		$query=$this->connection->prepare($sql);
		$query->execute(array(':id'=>$id,
								':name'=>$name,
								':address'=>$address,
								':father_name'=>$father_name,
								':mother_name'=>$mother_name
									));
	}







	public function Delete($id){
		$sql="DELETE FROM binod WHERE id=:id";
		$query=$this->connection->prepare($sql);
		$query->execute(array(':id'=>$id));
		return true;
	}
}
?>
		