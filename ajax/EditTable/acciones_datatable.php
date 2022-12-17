<?php

require_once "../../modelos/conexion.php";

if ($_POST['action'] == 'edit') {
    $data = array(
        'codigo_producto' => $_POST['codigo_producto'],
        'cantidad' => $_POST['cantidad'],
        'id' => $_POST['id']
    );

    $statment = Conexion::conectar()->prepare("call prc_ActualizarDetalleVenta(:p_codigo_producto, :p_cantidad, :p_id)");
    $statment -> bindParam(":p_codigo_producto", $data["codigo_producto"], PDO::PARAM_STR);
    $statment -> bindParam(":p_cantidad", $data["cantidad"], PDO::PARAM_STR);
    $statment -> bindParam(":p_id", $data["id"], PDO::PARAM_STR);

    $statment->execute();

    echo json_encode($_POST);
}