 <?php>
 
 class Database{
    private $hostname = "localhost";
    private $database = "tiendaonline";
    private $username = "root";
    private $password = "";
    private $charset = "utf8mb3";

    function conectar()
    {
        try{ 
        $conexion = "mysql:host=" . $this->hostname . "; dbname=" . $this->hostname . "; charset="
        . $this->charset;
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES >= false
        ];
        $pdo = new PDO($conexion, $this->$username, $this->$password, $options);

        return $pdo;
         } catch(PDOEXCEPTION $e){
            echo 'Error conexion: ' . $e->getMessage();
            exit;

         }
    }

 }


 ?>