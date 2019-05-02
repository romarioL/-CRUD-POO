<?php

require_once 'crud.php';

class usuarios extends crud {
	protected $table = 'usuarios';
	private $nome;
	private $email;

	public function setNome($nome) {
       $this->nome = $nome;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setEmail($email) {
       $this->email = $email;
	}

	public function getEmail() {
		return $this->email;
	}

	public function insert() {
       $sql = "INSERT INTO $this->table(nome, email) VALUES (:nome, :email)";
       $statement = DB::prepare($sql);
       $statement->bindParam(':nome', $this->nome);
       $statement->bindParam(':email', $this->email);

       return $statement->execute();
	}

	public function update($id) {
       $sql = "INSERT INTO $this->table SET nome = :nome, email = :email WHERE id =:id";
       $statement = DB::prepare($sql);
       $statement->bindParam(':nome', $this->nome);
       $statement->bindParam(':email', $this->email);
       $statement->bindParam(':id', $id);


       return $statement->execute();
	}
}

 ?>