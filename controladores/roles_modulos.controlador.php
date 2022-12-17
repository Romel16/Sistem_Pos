<?php

class RolesModuloControlador{


    static public function ctrRegistrarPerfilModulo($array_idModulos, $idPerfil, $id_modulo_inicio){

        $registroPerfilModulo = RolesModuloModelo::mdlRegistrarPerfilModulo($array_idModulos, $idPerfil, $id_modulo_inicio);

        return $registroPerfilModulo;
    }

}