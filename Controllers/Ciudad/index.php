<?php
/**
 *
 */

error_reporting(E_ALL ^ E_NOTICE);

class Index extends Controllers
{
    public $response;

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $userName = Session::getSession("Usuario");
        if ($userName != "" && $userName["id_rol"] == 1){
            header("Location: " .URL. "Ciudad/Principal/principal");
        }else{
            $this->view->render('Home', $this,'index','');
        }
        //var_dump($this->view);
    }
    /*
    public function sigIn(){
        $this->view->render($this,'sigIn','');
    }
    */
}