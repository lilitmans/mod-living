<?php
    namespace Core;
    
    final Class Conf
    {
        
        const base_url = '';


        function __construct() {
            $this->base_url = "http://".$_SERVER['HTTP_HOST'];
        }
    }
    
?>