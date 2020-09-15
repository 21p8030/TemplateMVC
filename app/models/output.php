<?php

class output{

    public function out(){
        $names = explode("\n", file_get_contents('../app/data/user.txt'));

        for ($zeile = 0; $zeile < count($names); $zeile++) {

            $arrayn = explode(";", $names[$zeile]);

            for ($i = 0; $i < count($arrayn); $i += 2) {
                $response[$zeile] = array("firstname" => $arrayn[$i], "lastname" => $arrayn[$i + 1]);
            }

        }
        return $response;
    }

   
}

?>