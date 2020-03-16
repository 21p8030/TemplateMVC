<?php

Class Home extends Controller {

   public function index($name = ''){
      //echo "Hallo ".$name;
      $user = $this->model('User');
      $user->name = $name;
      $this->view('home/index', ['user' => $user]);
   }
}
?>
