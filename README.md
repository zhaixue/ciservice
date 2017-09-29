### 基于CI框架新增功能：
    1. 新增server层
    2. 新增类似laravel的.env环境变量配置
### sevice层使用：
    1. 目录service下面新建service文件，命名：Test_service.php 首字母大写，类名称与文件名字一样。
    2. 在控制器内部引入service
       >  $this->load->service('Test_service');//引入service
