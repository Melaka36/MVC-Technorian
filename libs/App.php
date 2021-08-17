<?php
//All the logics in the mvc is written here. All the mvc architecture will be 
//controlled by this App.php
class App{
private $_url=null;
private $_controller=null;

function __construct()
{
    $this->_getURL();
    if(empty($this->_url[0])){
        $this->_loadDefaultController();
        return false;
    }
    if($this->_loadController()){
        $this->_loadControllerMethod();
    }
}

private function _getURL(){
    $url = isset($_GET['url'])? $_GET['url'] : null;
    #browser link eke base eken pasuw athi tika $url ekt set kara genima

    $url= rtrim($url,'/'); // remove the backslash at the r-right hand side in the url

    $url=  filter_var($url,FILTER_SANITIZE_URL); //
    //sanitize the url. remove special charaters and etc. ex:- % & signs
    
    $this->_url= explode('/',$url); // divide url into parts by '/' and assign them into an array
    print_r($this->_url);
    //print_r($this->$url); //printing the url as an array
}

//when u enter a url without a controller this default controller should execute
//ex:- RAD/MVC-Tech  instead of RAD/MVC-Tech/Controller
private function _loadDefaultController(){
    require 'controllers/index.php';

    $this->_controller=new Index();
    $this->_controller->index();
}

private function _loadController(){
    $file='controllers/'.$this->_url[0].'.php';// https:MVCTech/ Eken passe indn count wei.
    if(file_exists($file)){
        require $file;
        $this->_controller=new $this->_url[0];
        return true;
    }
    else{
       echo "Sorry page not found";
       return false;
    }
}
private function _loadControllerMethod(){
    $urlLength=count($this->_url); //checking the lenght of the url
    if($urlLength>1){  //urllenght=1 means there is only the '/Controller ' in the url
        if(!method_exists($this->_controller,$this->_url[1])){
            echo "Sorry requested method not found";
            exit;
        }
    }
        switch ($urlLength) { 
            // $this->_url[0]= 'controller' ,  _url[1]='Method', _url[2]= parameters
            case 6:
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4], $this->_url[5]);
                break;
            case 5:
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]);
                break;
            case 4:
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
                break;
            case 3:
                $this->_controller->{$this->_url[1]}($this->_url[2]); //length =3 . so 1 parameter --> ($this->_url[2])
                break;
            case 2:
                $this->_controller->{$this->_url[1]}();//length =2 . so no parameters --> ()
                break;
            default:
                $this->_controller->index();
                break; 
    }
}

}

?>