<?php 

require_once 'config.php';

class DB {

	private static $instance;


	private static  function getInstance() {
		if(isset(self::$instance))
		{
             try{
              

               return self::$instance = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);

             }catch(PDOException $e){
                echo $e->getMessage();
             }
		}

		return self::$instance;
	}


	public static function prepare($sql) {
        return self::getInstance()->prepare($sql);
	}
}

?>