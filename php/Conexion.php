<?php
require_once "Config.php";

class DBConexion
{
    private $Conexion;
    private $DB;

    // Metodo que crea y retorna la conexion a la BD.
    public function Conectar()
    {
        $Conexion = $this->Conexion = new mysqli(HostServer, UserServer, PassServer, DBServer);
        if ($this->Conexion)
        {
            echo "CONECTADO A: SERVER & DB";
        }
    }

     //Metodo que cierra la conexion a la BD
     public function Desconexion()
     {
        mysqli_close($this->Conexion);
     }

     public function query()
    {
        //return $this->DB->query();
    }

    //Metodo que ejecuta un query sql
    // Retorna un resultado si es un SELECT
    public function ExecuteQuery($Sql)
    {
        $result = $this->Conexion->query($Sql);
        return $result;
    }


      /*public function Registrar()
     {
         $Conexion =  $this->Conexion;
         $tabladb2 = "apnpdb";
         $Query = mysqli_query($this->Conexion, "SELECT count(*) from $tabladb2");
         if ($Query)
         {
             echo "Sentencia incorrecta llamado a tabla: $tabladb2.";
         }
         else
         {
             $Conexion = $this->Conexion;
             $result = mysqli_query($Conexion, $Query);
             echo "Hay $result registros en la tabla: $tabladb2.";
             mysqli_free_result($Query);
         }
     }

    /* public function Update()
     {
         $Conexion =  $this->Conexion;
         $tabladb2 = "apnpdb";
         $Query = mysqli_query($Conexion, "SELECT count(*) from $tabladb2");
         if ($Query)
         {
             echo "Sentencia incorrecta llamado a tabla: $tabladb2.";
         }
         else
         {
             $result = mysqli_result($Query);
             echo "Hay $result registros en la tabla: $tabladb2.";
             mysqli_free_result($Query);
         }
     }*/
}
?>






