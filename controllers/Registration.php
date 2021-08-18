<?php
class Registration extends Controller{
    function __construct()
    {
        parent::__construct(); // calling the parent because we defined the 
                // functions view,loadModel in the parent Controler's constructor
    }
    function index(){
        //echo "dff";
        //$this->model->printSomething();
        $this->view->render('Registration'); // first we have to render the registration form
        if(isset($_POST['submit'])){
            $this->loadRegForm();
        }
        
    }
    function loadRegForm(){
        
        $this->view->regUserData = $this->model->regData();
        echo "Succesfully Submitted";
    }
}

?>