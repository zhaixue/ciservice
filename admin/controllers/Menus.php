<?php
/**
 * Created by PhpStorm.
 * User: 10252
 * Date: 2017/9/2
 * Time: 22:33
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Menus extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //加载数据模型
        $this->load->model('menus_model');


    }

    public function lists()
    {
        //根据数据模型获取数据
        $data['nb']=$this->menus_model->get();
        //加载视图文件
        $this->load->view('Menus/lists',$data);
    }
}
