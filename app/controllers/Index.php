<?php
    class Index extends MainController{

        public function __construct(){
            $this->UsuariosModelo = $this->model("UsuariosModel");
        }

        public function index(){

            $usuarios = $this->UsuariosModelo->obtener_usuarios();


            $parameters = [
                'usuarios' => $usuarios
            ];

            $this->view('pages/index', $parameters);
        }

       public function guardar(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $usuario['nombre'] = $_POST['nombre'];
                $usuario['apellido'] = $_POST['apellido'];
                $usuario['edad'] = $_POST['edad'];
                $usuario['correo'] = $_POST['correo'];

                if($this->UsuariosModelo->guardar($usuario)){
                    header('location: '.ROUTE_URL);

                } else {
                    echo "Error: Algo salio mal";
                }

            }
       }

       public function update($id = 0){

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $usuario ['nombre'] = $_POST['nombre']; 
                $usuario ['apellido'] = $_POST['apellido']; 
                $usuario ['edad'] = $_POST['edad']; 
                $usuario ['correo'] = $_POST['correo']; 

                if($this->UsuariosModelo->actualizar($id, $usuario)){
                    header('location: '.ROUTE_URL);
                    echo "Error: Algo salio mal";

                } 
            }else{
                $usuario = $this->UsuariosModelo->obtener_usuario($id);

                if(!$usuario){
                    header('location: '.ROUTE_URL);
                }
                $parameters = [
               'usuario' =>$usuario
           ];
           $this->view('pages/update' , $parameters);
            }
           
           
       }


       public function delete($id = 0){
        if($this->UsuariosModelo->delete($id)){
            header('location: '.ROUTE_URL);

       }
    }

       
    }
?>