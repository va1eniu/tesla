<?php

// Datos de los vehículos futuristas
$vehiculo = array(
    array(
        "id" => 1,
        "marca" => "Tesla",
        "modelo" => "Model X",
        "descripcion" => "Un vehículo eléctrico SUV de lujo con tecnología de conducción autónoma y diseño aerodinámico.",
        "anio" => 2025,
        "imagen" => "https://cars.usnews.com/static/images/Auto/izmo/i158896586/2019_tesla_model_x_angularfront.jpg"
    ),
    array(
        "id" => 2,
        "marca" => "Nissan",
        "modelo" => "Evolv",
        "descripcion" => "Un vehículo deportivo eléctrico de alto rendimiento con diseño futurista y tecnología de vanguardia.",
        "anio" => 2024,
        "imagen" => "https://staticeu-h2.izmocars.com/toolkit/commonassets/2023/23nissan/23nissanariyaevevolvesu1b/23nissanariyaevevolvesu1b_pixGallery/_gallerypix/nissan_ariyaevevolvesu1b_concept.jpg"
    ),
    array(
        "id" => 3,
        "marca" => "Mercedes-Benz",
        "modelo" => "Vision AVTR",
        "descripcion" => "Un vehículo conceptual inspirado en la película Avatar, con diseño biométrico y tecnología avanzada de interacción.",
        "anio" => 2023,
        "imagen" => "https://i.pinimg.com/originals/83/c7/6a/83c76acd45da29dcc3d0699f734a1833.png"
    )
);



$server = "localhost";
$user = "root";
$pass = "";
$bd = "carros";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass, $bd)
    or die("Ha sucedido un error inexperado en la conexion de la base de datos");


foreach ($vehiculo as $vehiculos) {

    mysqli_query($conexion, "INSERT INTO vehiculos (id,marca,modelo,descripcion,anio,imagen) 
    VALUES ('" . $vehiculos['id'] . "','" . $vehiculos['marca'] . "','" . $vehiculos['modelo'] . "','" . $vehiculos['descripcion'] . "','" . $vehiculos['anio'] . "', '" . $vehiculos['imagen'] . "')");

}


mysqli_close($conexion);





// Datos de las personas
$persona = array(
    array(


        "id" => 1,
        "nombre" => "Elon Musk",
        "empresa" => "Tesla, SpaceX, Neuralink",
        "descripcion" => "Empresario y visionario tecnológico conocido por su trabajo en vehículos eléctricos y cohetes espaciales.",
        "imagen" => "elon_musk.jpg"
    ),
    array(
        "id" => 2,
        "nombre" => "Jeff Bezos",
        "empresa" => "Amazon, Blue Origin",
        "descripcion" => "Empresario y magnate de los negocios en línea, fundador de Amazon y dedicado a la exploración espacial con Blue Origin.",
        "imagen" => "jeff_bezos.jpg"
    ),

    array(
        "id" => 3,
        "nombre" => "isomorphism",
        "empresa" => "Roro Industry",
        "descripcion" => "un chico muy sano hasta la fecha le apasiona jugar maincra, es prioritario en evitar el consumo de el tabaco en los jovenes",
        "imagen" => "iso.jpg"
        
    )
);



$server = "localhost";
$user = "root";
$pass = "";
$bd = "carros";

//Creamos la conexión
$conexion = mysqli_connect($server, $user, $pass, $bd)
    or die("Ha sucedido un error inexperado en la conexion de la base de datos");


foreach ($persona as $personas) {

    mysqli_query($conexion, "INSERT INTO personas (id,nombre,empresa,descripcion,imagen) 
    VALUES ('" . $personas['id'] . "','" . $personas['nombre'] . "','" . $personas['empresa'] . "','" . $personas['descripcion'] . "','" . $personas['imagen'] . "')");

}


mysqli_close($conexion);


?>