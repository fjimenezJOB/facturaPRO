<?php

namespace models;

 require_once 'vendor/autoload.php';


class Login{

    public function Login($email){

            $registro = fopen('assets/txt/registro.txt','a+');

            $array = file ('assets/txt/registro.txt',FILE_IGNORE_NEW_LINES);
            
            $noregistrado = 0;

            foreach($array as $valor){

                if($email == $valor){

                    header('location: factura.php');

                }else{ $noregistrado +1;}
                
            }

        if($noregistrado = 1 && isset($email)){

            echo 'Usted no esta registrado, por favor registrese:<br>';

            echo '<a class="boton" href="registrarse.php">REGISTRARME</a>';
        }

        
    }

}