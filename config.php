<?php
    class config {
        private static $pdo = NULL ;
        public static function getConnexion() {
            if (!isset(self::$pdo)) {
                try {
                      self::$pdo = new PDO('mysql:host=localhost;dbname=transport', 'root', '',
                        [
                            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                        ]
                        );
                }
                catch (Exception $e) {
                    die('Erreur:' .$e->getMessage()) ;
                }
            }
            return self::$pdo ;
        }
    }
?>
<?php
Class dbObj{
/* Database connection start */
var $dbhost = "localhost";
var $username = "root";
var $password = "";
var $dbname = "produits";
var $conn;
function getConnstring() {
$con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
} else {
$this->conn = $con;
}
return $this->conn;
}
}
?>