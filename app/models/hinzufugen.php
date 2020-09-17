<?php

class hinzufugen{

    public function input($first_name, $last_name){
        
        $name_input = array($first_name, $last_name);
        $eintrag = implode(";", $name_input);
        
        file_put_contents('../app/data/user.txt', "\n".$eintrag, FILE_APPEND);
    }

   
}

?>