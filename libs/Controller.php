<?php
class Controller{
    function __construct()
    {
        $this->view=new View(); //now we can acces the view functions
    }
    public function loadModel($modelName){
        $path='models/'.$modelName.'_Model.php';
        if(file_exists($path)){
            require $path;
            $className= $modelName.'_Model.php';
            $this->model= new $className(); //From here we can acces the model functions
        }

    }

}

?>