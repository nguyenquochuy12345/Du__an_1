<?php
class Car extends Controller{
    public $model_car;
    public $data =[];

    public function __construct()
    {
        $this->model_car = $this->model('m_car');
    }

    public function index(){

        // echo 'Trang chu';
        $dataProduct = $this->model_car->show_Product();
        $categoryProduct = $this->model_car->show_category_Product();

        // $this->data['data_list'] = $dataIndex;
        $this->data['sub_content']['car'] = $dataProduct;
        $this->data['sub_content']['category_car'] = $categoryProduct;
        $this->data['content'] = 'car/index';

        $this->render('layouts/client_layout3',$this->data);
    }

    public function list_car(){
        echo 'Trang chu';
        $dataProduct = $this->model_car->list_Product();
        // $datagaeProduct = $this->model_car->page_Product();
        $this->data['content'] = 'car/index';
        $this->data['car_p']['data_list'] = $dataProduct;

        // $this->data['page_taitle'] = $datagaeProduct;

        $this->render('car/list', $this->data);

    }
    public function detail($id=0){
        // echo 'Trang chu';
        $this->data['info'] = $this->model_car->page_Product($id);
        $this->data['content'] = 'car/detail';

        $this->render('layouts/client_layout3',$this->data);


    }

    public function checkout(){
        // echo 'Home';
        // $this->data['content'] = 'car/detail';
        $this->data['content'] = 'car/checkout';
        $this->render('layouts/client_layout2',$this->data);
    }



 
}