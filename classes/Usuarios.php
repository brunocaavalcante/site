<?php

	require_once 'Crud.php';

	class Usuarios extends Crud
	{
		protected $table = 'usuarios';
		private $id;
		private $endereco;
		private $nome;
		private $telefone;
		private $senha;
		private $email;

		 public function setName($nome){
		 	$this->nome = $nome;
		 }
		 public function getName($nome){
		 	$this->nome = $nome;
		 }
		  public function setEndereco($endereco){
		 	$this->endereco = $endereco;
		 }
		 public function getEndereco($endereco){
		 	$this->endereco = $endereco;
		 }
		  public function setTelefone($telefone){
		 	$this->telefone = $telefone;
		 }
		 public function getTelefone($telefone){
		 	$this->telefone = $telefone;
		 }
		  public function setEmail($email){
		 	$this->email = $email;
		 }
		 public function getEmail($email){
		 	$this->email = $email;
		 }
		 public function insert(){

		 	$sql = "INSERT INTO $this->table (nome, email, endereco, telefone)VALUES (:nome, :email, :endereco, :telefone)";

		 	$stmt = DataBase::prepare($sql);
		 	$stmt->bindParam(':nome', $this->nome);
		 	$stmt->bindParam(':email', $this->email);
		 	$stmt->bindParam(':endereco',$this->$endereco);
		 	$stmt->bindParam(':telefone', $this->telefone);
		 	return $stmt->execute();
		 }
		 public function update($id){
		 	$sql = "UPDATE $this->table SET nome = :nome, email = :email, telefone = :telefone, endereco= :endereco WHERE id = :id";
		 	$stmt = DataBase::prepare($sql);
		 	$stmt->bindParam(':nome', $this->nome);
		 	$stmt->bindParam(':email', $this->email);
		 	$stmt->bindParam(':endereco', $this->endereco);
		 	$stmt->bindParam(':telefone', $this->telefone);
		 	$stmt->bindParam(':id', $id);
		 	return $stmt->execute();
		 }



	}