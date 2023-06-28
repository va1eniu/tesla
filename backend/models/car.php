<?php


class Car extends conectar
{


    public function get_car()
    {
        try {
            $conectar = parent::conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT * FROM vehiculos");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }

    public function get_car_id($id)
    {

        try {
            $conectar = parent::conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT * FROM vehiculos WHERE id = ?");
            $stm->bindValue(1, $id);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $th) {
            return $th->getMessage();
        }

    }


    public function insert_car($id, $marca, $modelo, $descripcion, $anio, $imagen, )
    {
        $conectar = parent::conexion();
        parent::set_name();
        $stm = "INSERT INTO vehiculos(id,marca,modelo,descripcion,anio,imagen) VALUES(?,?,?,?,?,?)";
        $stm = $conectar->prepare($stm);
        $stm->bindValue(1, $id);
        $stm->bindValue(2, $marca);
        $stm->bindValue(3, $modelo);
        $stm->bindValue(4, $descripcion);
        $stm->bindValue(5, $anio);
        $stm->bindValue(6, $imagen);


        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


}

class per extends conectar
{


    public function get_per()
    {
        try {
            $conectar = parent::conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT * FROM personas");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $th) {
            return $th->getMessage();
        }
    }

    public function get_per_id($id)
    {

        try {
            $conectar = parent::conexion();
            parent::set_name();
            $stm = $conectar->prepare("SELECT * FROM personas WHERE id = ?");
            $stm->bindValue(1, $id);
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $th) {
            return $th->getMessage();
        }

    }
    public function insert_per($id, $nombre, $empresa, $descripcion, $imagen )
    {
        $conectar = parent::conexion();
        parent::set_name();
        $stm = "INSERT INTO personas(id,nombre,empresa,$descripcion,$imagen) VALUES(?,?,?,?,?)";
        $stm = $conectar->prepare($stm);
        $stm->bindValue(1, $id);
        $stm->bindValue(2, $nombre);
        $stm->bindValue(3, $empresa);
        $stm->bindValue(4, $descripcion);
        $stm->bindValue(5, $imagen);


        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);

    }


}