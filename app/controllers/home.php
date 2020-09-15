<?php

class Home extends Controller
{

    public function index($name = '')
    {
        $this->view('home/index');
    }

    public function save()
    {
        $this->model('hinzufugen')->input();
    }
    
    public function show()
    {
        $this->save();
        $retour = $this->model('output')->out();
        $this->view('home/show', ['response' => $retour]);
    }
}
