<?php
class Login {
    public $user = "";
    public $password = "";
    public $usu = "sumama@gmail.com";
    public $pass = "sapo";
    public $cadena1 = "true";
    public $cadena2 = "false";

    function entrarDatos($variable1, $variable2){
        $this->user = $variable1;
        $this->password = $variable2;
    }

    function loguear(){

        $us = $this->usu;
        $ps = $this->pass;

        $us1 = $this->user;
        $pas1 = $this->password;

        if (($us === $us1) && ($ps === $pas1 )) {
            return $this->cadena1;
        } else {
            return $this->cadena2;
        }
    }
}
?>