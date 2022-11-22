<?php
class About extends Controller
{
    public $model_about;

    public function __construct()
    {
        // $this->model_about = $this->model('m_new');
    }


    public function index()
    {


        // $this->render('layouts/client_layout', $this->data);

        $this->data['content'] = 'about/conten';

        $this->render('layouts/client_layout2',$this->data);
    }

    public function car_detail()
    {
        // echo 'Trang chu';
        // $data = $this->model_contact->getList();
        // echo '<pre>';
        // print_r($data);
        // echo '<pre>';
        require_once 'app/view/car/detail.index.php';
    }
}
