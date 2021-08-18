<?php
class Employees_Model extends Model{
    function __construct()
    {
        parent::__construct();
    }
    function getData(){
        $sql="SELECT * from users";
        return $this->db->selectAllUsers($sql);
    }
}

?>