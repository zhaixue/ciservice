<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Test_service extends  CI_Service{
    public  function __construct()
    {
        parent::__construct();

    }
    public function getuser(){
         $this->load->database('default');
        $query = $this->db->query("select * from users");
        $arr = $query->result_array();
        return $arr;
}
}