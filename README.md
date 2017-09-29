### 基于CI框架新增功能：
    1. 新增server层
    2. 新增类似laravel的.env环境变量配置
### sevice层使用：
    1. 目录service下面新建service文件，命名：Test_service.php 首字母大写，类名称与文件名字一样。
    2. 在控制器内部引入service
       $this->load->service('Test_service');//引入service
	3. 使用:
	   $userinfo = $this->Test_service->getuser();//调用service层函数
### .env文件使用：
    1. composer install  安装需要的第三方包
	2. 在Index.php 引入该配置，OK
