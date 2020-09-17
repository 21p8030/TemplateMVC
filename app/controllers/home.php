<?php

class Home extends Controller
{

    public function index($name = '')
    {
        $this->view('home/index');
    }

    public function save()
    {
        $first_name = $_POST["first"];
        $last_name = $_POST['last'];
        $this->model('hinzufugen')->input($first_name, $last_name);
    }
    
    public function show()
    {
        $this->save();
        $retour = $this->model('output')->out();
        $this->view('home/show', ['response' => $retour]);
    }
}
