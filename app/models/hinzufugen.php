<?php

class hinzufugen{

    public function input(){
        $first_name = $_POST["first"];
        $last_name = $_POST['last'];
        
        
        $name_input = array($first_name, $last_name);
        $eintrag = implode(";", $name_input);
        
        file_put_contents('../app/data/user.txt', "\n".$eintrag, FILE_APPEND);
    }

   
}

?>