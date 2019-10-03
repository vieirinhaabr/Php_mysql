<?php

require $_SERVER['DOCUMENT_ROOT']."/aulaphp/data/DataBase.php";

class CategoriaModel{
	
	private $database;

	function __construct(){
		$this->database = new DataBase();
	}
	
	public function todos(){
		$conn = $this->database->getConnection();
			
		$query = $conn->query("SELECT * FROM categoria order by descricao");
	
		$categorias = $query->fetchAll();
			
		return $categorias;
	}
	

	
	public function porId($id){
		$conn = $this->database->getConnection();
		
		$query = $conn->prepare("SELECT * FROM categoria WHERE idCategoria = :idCategoria");
		
		$query->bindParam(":idCategoria", $id);
		
		$query->execute();
					
		$categoria = $query->fetch();
		
		return $categoria;
	}
	
	public function inserir($descricao){
	
		$conn = $this->database->getConnection();

		$query = $conn->prepare("INSERT INTO categoria (descricao) VALUES (:descricao)");
				
		$query->bindParam(":descricao", $descricao);
				
		$query->execute();
	}


	public function alterar($idCategoria, $descricao){

		$conn = $this->database->getConnection();
				
		$query = $conn->prepare("UPDATE categoria set descricao = :descricao where idCategoria = :idCategoria");
				
		$query->bindParam(":descricao", $descricao);
		
		$query->bindParam(":idCategoria", $idCategoria);
				
		$query->execute();
			
	}
	
	public function excluir($id){

		$conn = $this->database->getConnection();
	
		$query = $conn->prepare("DELETE FROM categoria WHERE idCategoria = :idCategoria");
	
		$query->bindParam(":idCategoria", $id);
	
		$query->execute();
	}
}