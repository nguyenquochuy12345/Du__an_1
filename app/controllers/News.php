<?php
class News extends Controller
{
    public $model_new;

    public function __construct()
    {
        $this->model_new = $this->model('m_new');
    }


    public function index()
    {

        // $this->render('layouts/client_layout', $this->data);

        $this->data['content'] = 'news/index';

        $this->render('layouts/client_layout2',$this->data);
    }

    public function car_detail()
    {
        // echo 'Trang chu';
        // $data = $this->model_new->getList();
        // echo '<pre>';
        // print_r($data);
        // echo '<pre>';
        require_once 'app/view/car/detail.index.php';
    }
}
