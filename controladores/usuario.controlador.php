<?php


class UsuarioControlador{

    /*====================
    login de usuarios
    ======================== */
  
    public function login(){

        if(isset($_POST["loginUsuario"])){

            $usuario = $_POST["loginUsuario"];
            $password = crypt($_POST["loginPassword"],'$2a$07$azybxcags23425sdg23sdfhsd$');

            $respuesta = UsuarioModelo::mdlIniciarSesion($usuario, $password);

            if(count($respuesta) > 0){

                $_SESSION["usuario"] = $respuesta[0];

                echo '
                    <script>
                        window.location = "http://localhost/OTROS/tienda/";
                    </script>
                
                ';
            }else{

                echo '
                    <script>
                        fncSweetAlert("error","Usuario y/o password inválido","http://localhost/OTROS/tienda/");
                    </script>
                
                ';
            }

        }
    }

    static public function ctrObtenerMenuUsuario($id_usuario){

        $menuUsuario = UsuarioModelo::mdlObtenerMenuUsuario($id_usuario);

        return $menuUsuario;
    }

    static public function ctrObtenerSubMenuUsuario($idMenu,$id_perfil_usuario){

        $subMenuUsuario = UsuarioModelo::mdlObtenerSubMenuUsuario($idMenu, $id_perfil_usuario);
        
        return $subMenuUsuario ;
    
    }


}