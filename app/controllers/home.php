<?php

    class Home extends Controller {
    
        public function index($name = null){
            echo "Hallo"+$name;
        }
    }
?>
