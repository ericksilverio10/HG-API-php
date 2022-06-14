<?php

class HG_API {
    private $key = null;
    private $error = false;

    function __construct($key = null)
    {
        if(!empty($key)) {
            $this -> key = $key;
        }
    }

    function request ($endpoint = '', $params = array())
    {
        $uri = 'https://api.hgbrasil.com/' . $endpoint . '?key=' . $this -> key . "&format=json";
    }


}




?>