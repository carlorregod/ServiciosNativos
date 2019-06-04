<?php
require 'conexion.php';

class Servicios
{
    public function __construct($rut)
    {
        $this->rut= $rut;
    }
    private function _services()
    {
        try
        {
            //Conexión y query
            $pgsql = Conexion::getConnect();
            $query = "SELECT * FROM ejercicios.persona WHERE rut='$this->rut'";
            $consulta = $pgsql->prepare($query);
            $consulta->execute();
            //Ahora a generar el arreglo de resultado
            // $array = $consulta->fetchAll();
            // $arreglo = $array[0];
            $arreglo = $consulta->fetch(PDO::FETCH_ASSOC);
            //$arreglo = $consulta->fetch();
            //Si no existe, entregará FALSO
            if(!$arreglo)
            {
                $arreglo['salida']=404;
                $arreglo['status']='Not Found';
            }
            else 
            {
                $arreglo['salida']=200;
                $arreglo['status']='OK';
            }

            return json_encode($arreglo, JSON_FORCE_OBJECT);
        }
        catch(Exception $e)
        {
            return 'Error :'.$e->getMessage();
        }
    }

    public function services()
    {
        return $this->_services();
    }
}
if(isset($_GET['rut']))
    $run = $_GET['rut'];
elseif(isset($_POST['rut']))
    $run = $_POST['rut'];
$serv = new Servicios($run);
echo $serv->services();