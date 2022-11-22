<?php
class Home extends Controller
{
    public $model_home;

    public function __construct()
    {
        $this->model_home = $this->model('m_home');
    }


    public function index()
    {

        // $this->render('layouts/client_layout', $this->data);
        
        $this->data['content'] = 'home/index';
        // $this->data['s_p']['content'] = 'home/index';


        $this->render('layouts/client_layout',$this->data);
    }

    public function car_detail()
    {
        // echo 'Trang chu';
        // $data = $this->model_home->getList();
        // echo '<pre>';
        // print_r($data);
        // echo '<pre>';
        require_once 'app/view/car/detail.index.php';
    }
}
