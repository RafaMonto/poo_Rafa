<?php

class Objeto {

    public $array = array(

        "item1"=>array(
            "name"=> "Home",
            "icon"=> "icon"
        ),
        "item2"=>array(
            "name"=> "Dashboard",
            "icon"=> "icon2"
        )
        );

    function retornar(){
        return $this->array;
    } 
}

?>