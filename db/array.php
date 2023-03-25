<?php

class Arreglo {

    public $array = array(

        "item1"=>array(
            "name"=> "Product",
            "icon"=> 'bx bx-box'
        ),
        "item2"=>array(
            "name"=> "Order list",
            "icon"=> 'bx bx-list-ul'
        ),
        "item3"=>array(
            "name"=> "Analytics",
            "icon"=> 'bx bx-pie-chart-alt-2'
        ),
        "item4"=>array(
            "name"=> "Stock",
            "icon"=> 'bx bx-coin-stack'
        ),
        "item5"=>array(
            "name"=> "Total order",
            "icon"=> 'bx bx-book-alt'
        ),
        "item6"=>array(
            "name"=> "Team",
            "icon"=> 'bx bx-user'
        ),
        "item7"=>array(
            "name"=> "Messages",
            "icon"=> 'bx bx-message'
        ),
        "item8"=>array(
            "name"=> "Favorites",
            "icon"=> 'bx bx-heart'
        ),
        "item9"=>array(
            "name"=> "Setting",
            "icon"=> 'bx bx-cog'
        ),
        "item10"=>array(
            "name"=> "Log out",
            "icon"=> 'bx bx-log-out'
        )
        );

    function returnDashboard(){
        return $this->array;
    } 
}

?>