<?php

require_once "../controladores/roles_modulos.controlador.php";
require_once "../modelos/roles_modulos.modelo.php";

class AjaxRolesModulo{

    public function ajaxRegistrarPerfilModulo($array_idModulos, $idPerfil, $id_modulo_inicio){

        $registroPerfilModulo = RolesModuloControlador::ctrRegistrarPerfilModulo($array_idModulos, $idPerfil, $id_modulo_inicio);

        echo json_encode($registroPerfilModulo);
    }

   
}

if(isset($_POST['accion']) && $_POST['accion'] == 1){ //

    $registroPerfilModulo = new AjaxRolesModulo;    
    $registroPerfilModulo->ajaxRegistrarPerfilModulo($_POST['id_modulosSeleccionados'],$_POST['id_Perfil'], $_POST['id_modulo_inicio']);

}