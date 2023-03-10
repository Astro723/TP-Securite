<?php


class Users
{
    public $Id;
    public $user_name;
    public $user_password;
    
    
    public function __toString()
    {
        return "<a>" . print_r($this, True) . "</a>";
    }
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";

class Connexion
	{
		private static $instance = null;
		private static $pdoInstance = null;
		private static $HOST = 'localhost';
	
                private static $DB = 'testDB';
		private static $USER = 'root';
		private static $PWD = '';

		private function __construct()
		{
			$dsn = "mysql:host=" . self::$HOST . ";dbname=" . self::$DB . ";user=" . self::$USER . ";password=" . self::$PWD;

			try
			{
				self::$pdoInstance = new PDO($dsn);
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
			}
		}

		public static function getInstance()
		{
			if(is_null(self::$instance))
			{
				self::$instance = new Connexion();
			}

			return self::$instance;
		}

		public function query($query)
		{
			return self::$pdoInstance->query($query);
		}
	}

	$pdo = Connexion::getInstance();
        
      
?>