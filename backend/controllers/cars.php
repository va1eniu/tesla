<?php
header('content-type: application/json');
require_once("../config/Coneccion.php");
require_once("../models/car.php");


$carro = new Car();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["op"]) {

    case "GetAll":
        $datoss = $carro->get_car();
        echo json_encode($datoss);
        break;

    case 'GetId':
        $datoss = $carro->get_car_id($body["id"]);
        print_r($datos);
        echo json_encode($datoss);
        break;

    case 'insert':
        $datoss = $carro->insert_car($body["id"], $body["marca"], $body["modelo"], $body["descripcion"], $body["anio"], $body["imagen"]);

        echo json_encode("insertado correctamente");
        break;


}



$persona = new per();

$body = json_decode(file_get_contents("php://input"), true);

switch ($_GET["opp"]) {

    case "GetAll":
        $datos = $persona->get_per();
        echo json_encode($datos);
        break;

    case 'GetId':
        $datos = $persona->get_per_id($body["id"]);
        echo json_encode($datos);
        break;

    case 'insert':
        $datos = $persona->insert_per($body["id"], $body["nombre"], $body["empresa"],$body["descripcion"], $body["imagen"]);

        echo json_encode("insertado correctamente");
        break;


}
?>