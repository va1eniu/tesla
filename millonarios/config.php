<?


require_once("./backend/config/coneccion.php");

class Millonarios extends Conectar
{
    private $id;
    private $nombre;
    private $empresa;
    private $descripcion;
    private $imagen;
    protected $dbCnx;

    public function __construct($id = 0, $nombre = "", $empresa = "", $descripcion = "", $imagen = "", $dbCnx = "")
    {

        $this->id = $id;
        $this->nombre = $nombre;
        $this->empresa = $empresa;
        $this->descripcion = $descripcion;
        $this->imagen = $imagen;
        parent::__construct($dbCnx);
    }


    //SETERS
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setempresa($empresa)
    {
        $this->empresa = $empresa;
    }

    public function setdescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }


    // GETTERS
    public function getId()
    {
        return $this->id;
    }



    public function getnombre()
    {
        return $this->nombre;
    }


    public function getempresa()
    {
        return $this->empresa;
    }

    public function getdescripcion()
    {
        return $this->descripcion;
    }


    public function getImagen()
    {
        return $this->imagen;
    }


    ///////////////


    public function insertData()
    {
        try {
            $stm = $this->dbCnx->prepare("INSERT INTO personas (nombre ,empresa, descripcion, imagen) values(?,?,?,?)");
            $stm->execute([$this->nombre, $this->empresa, $this->descripcion, $this->imagen,]);
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    public function delete()
    {
        try {
            $stm = $this->dbCnx->prepare("DELETE FROM personas WHERE id = ?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
            /*                 echo "<script> alert('los datos fueron eliminados sastifactoriamente');document.location = 'personas.php'</script>";
             */
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }



    public function selectOne()
    {
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM personas WHERE id= ?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update()
    {
        try {
            $stm = $this->dbCnx->prepare("UPDATE personas SET nombre = ?,empresa = ?, descripcion = ?, imagen = ? WHERE id= ?");
            $stm->execute([$this->nombre, $this->empresa, $this->descripcion, $this->imagen, $this->id]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }



    public function obtainAll()
    {
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM personas");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}



////////////////////////




class Vehiculos extends Conectar
{
    private $id;
    private $marca;
    private $modelo;
    private $descripcion;
    private $anio;
    private $imagen;
    protected $dbCnx;

    public function __construct($id = 0, $marca = "", $modelo = "", $descripcion = "", $anio = "",$imagen = "", $dbCnx = "")
    {

        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->descripcion = $descripcion;
        $this->anio = $anio;
        $this->imagen = $imagen;
        parent::__construct($dbCnx);
    }


    //SETERS
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setmarcas($marca)
    {
        $this->marca = $marca;
    }

    public function setmodelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function setdescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    public function setanio($anio)
    {
        $this->anio = $anio;
    }

    public function setimagen($imagen)
    {
        $this->imagen = $imagen;
    }


    // GETTERS
    public function getId()
    {
        return $this->id;
    }



    public function getmarca()
    {
        return $this->marca;
    }


    public function getmodelo()
    {
        return $this->modelo;
    }

    public function getdescripcion()
    {
        return $this->descripcion;
    }


    public function getanio()
    {
        return $this->anio;
    }

    public function getimagen()
    {
        return $this->imagen;
    }


    ///////////////


    public function insertData()
    {
        try {
            $stm = $this->dbCnx->prepare("INSERT INTO vehiculos (marca ,modelo, descripcion, anio, imagen) values(?,?,?,?,?)");
            $stm->execute([$this->marca, $this->modelo, $this->descripcion, $this->anio, $this->imagen,]);
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    public function delete()
    {
        try {
            $stm = $this->dbCnx->prepare("DELETE FROM vehiculos WHERE id = ?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
            /*                 echo "<script> alert('los datos fueron eliminados sastifactoriamente');document.location = 'vehiculos.php'</script>";
             */
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }



    public function selectOne()
    {
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM vehiculos WHERE id= ?");
            $stm->execute([$this->id]);
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update()
    {
        try {
            $stm = $this->dbCnx->prepare("UPDATE vehiculos SET marca = ?,modelo = ?, descripcion = ?, anio = ? ,imagen = ? WHERE id= ?");
            $stm->execute([$this->marca, $this->modelo, $this->descripcion, $this->anio, $this->imagen, $this->id]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }



    public function obtainAll()
    {
        try {
            $stm = $this->dbCnx->prepare("SELECT * FROM vehiculos");
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

}