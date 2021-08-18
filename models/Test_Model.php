<?php
class Test_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }
    function index(){
        
        $this->model->printSomething();
    }
}

?>