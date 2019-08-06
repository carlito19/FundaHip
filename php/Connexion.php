<?php
//session_start();
$HostServer="localhost";
$UserServer ="root";
$ServerPass="";
$BDServer = "fundahip";

$Conexion = mysqli_connect($HostServer, $UserServer, $ServerPass, $BDServer);

if(!$Conexion)
{
    die('<strong> No pudo conectarse:</strong>'.mysqli_connect_error());

}else
{
    //echo "CONECTADO A: SERVER & DB <br/>";
}

//$Conecion->mysqli_close();

/*require_once './php/Config.php';

class Connexion extends mysqli
{
    protected $Connexion;
    protected $DB;

    public function Connectar()
    {
        $this->Connexion = mysqli_connect(HostServer, UserServer, PassServer);
        if ($this->Connexion) 
        {

        }else
        {
          echo "No CONECTADO AL SERVER ".mysqli_connect_error();
        }
        //$Connexion = $this->Connexion;
        $this->DB = mysqli_select_db($this->Connexion, DBServer);
        if($this->DB) die ("No CONECTADO A LA DB".mysqli_connect_error());
        $this->set_charset('utf-8');
        $m = "CONECTADO A DB";
        echo $m;
    }

    public function Desconnexion()
    {
        if ($this->Connectar->Connexion)
        {
            $Connexion = $this->Connexion;
            mysqli_close($this->$Connexion);
        }
    }

    public function Registar()
    {
        $tabla4 = "exploracionfisica";
        $query = mysqli_query("SELECT count(*) from $tabla4", $this->conexion);
        if ($query == 0) echo "Sentencia incorrecta llamado a tabla: $tabla4.";
        else {
            $nregistrostotal = mysql_result($query, 0, 0);
            echo "Hay $nregistrostotal registros en la tabla: $tabla4.";
            mysql_free_result($query);
        }
    }
}*/


?>