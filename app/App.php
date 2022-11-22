<?php
class C_App
{
    private $__controller, $__action, $__params, $__routes;
    function __construct()
    {

        global $routes;
        global $config;

        $this->__routes =   new Route();

        if (!empty($routes['default_controller'])) {

            $this->__controller = $routes['default_controller'];
        };
        $this->__action = 'index';
        $this->__params = [];
        
        // echo '<pre>';
        // print_r($config);
        // echo '<pre>';
    }
    
    function getUrl()
    {
        if (!empty($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = " / ";
        }
        return $url;
    }

    public function handleUrl()
    {

        $url = $this->getUrl();
        // echo $url;

        $url = $this->__routes->handleRoute($url);

        // echo $url;

        $urlArr = array_filter(explode('/', $url));
        $urlArr = array_values($urlArr);
        $urlCheck = '';

        foreach ($urlArr as $key => $item) {
            $urlCheck .= $item . '/';

            $fileCheck = rtrim($urlCheck, '/');


            $fileArr = explode('/', $fileCheck);
            $fileArr[count($fileArr) - 1] = ucfirst($fileArr[count($fileArr) - 1]);
            $fileCheck = implode('/', $fileArr);

            // unset($urlArr[$key]);
            if (!empty($urlArr[$key - 1])) {
                unset($urlArr[$key - 1]);
            }

            if (file_exists('app/controllers/' . ($fileCheck) . '.php')) {
                $urlCheck = $fileCheck;
                $urlArr = array_values($urlArr);
                break;
            }
        }

        // Xu ly controller
        if (!empty($urlArr[0])) {
            $this->__controller = ucfirst($urlArr[0]);
        } else {
            $this->__controller = ucfirst($this->__controller);
        }
     
        $urlCheck = '';
        if(empty($urlCheck)){
            $urlCheck = $this->__controller;
        }
        


        if (file_exists('app/controllers/' . $urlCheck . '.php')) {
            require_once  'controllers/' . $urlCheck . '.php';


            // Kiểm tra class this->__controlller tồn tại
            if (class_exists($this->__controller)) {
                $this->__controller = new $this->__controller();
                unset($urlArr[0]);
            } else {
                echo 'Lỗi';
            }
        } else {
            // $this->loadError();
            echo 'Loi';
        }




        // else{
        //     $this->__controller =  ucfirst($this->__controller) ;
        // }

        // Xu ly action
        if (!empty($urlArr[1])) {
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        }

        // Xu ly param
        $this->__params = array_values($urlArr);

        call_user_func_array([$this->__controller, $this->__action], $this->__params);
    }
    // public function loadError($name='404'){
    //     echo require_once 'app/errors/'.$name.'.php';
    // }
}
