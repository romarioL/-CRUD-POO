<?php

require_once 'DB.php';

abstract class crud  extends DB{

	protected $table;

	abstract public function insert();
	abstract public function update($id);


	public function find($id) {
      

      $sql = "SELECT * FROM $this->table  WHERE id = :id";
      $statement= DB::prepare($sql);
      $statement->bindParam(':id', $id, PDO::PARAM_INT);
      $statement->execute();

      return $statement->fetch();
	}

	public function findAll() {
      

      $sql = "SELECT * FROM $this->table";
      $statement= DB::prepare($sql);
      $statement->execute();

      return $statement->fetchAll();
	}


	public function delete($id) {

	  $sql = "DELETE  FROM $this->table  WHERE id = :id";
      $statement= DB::prepare($sql);
      $statement->bindParam(':id', $id, PDO::PARAM_INT);
      $statement->execute();

	}

}

 ?>