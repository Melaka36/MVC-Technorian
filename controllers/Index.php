<?php
class Index extends Controller{
 
    function __construct()
    {
       parent::__construct(); // calling the parent because we defined the 
       // functions view,loadModel in the parent Controler's constructor
    }

    function index(){
        echo "Hello Index";
    }
}

?>