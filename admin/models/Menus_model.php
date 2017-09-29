<?php
/**
 * Created by PhpStorm.
 * User: 10252
 * Date: 2017/9/2
 * Time: 22:16
 */
class menus_model extends CI_Model {

    public function __construct()
    {
        //连接数据库
        $this->load->database();
    }

    public function get(){
        //查询数据库
        $query=$this->db->get('menus');
        //以数组形式返回查询结果
        return $query->result_array();
    }
}