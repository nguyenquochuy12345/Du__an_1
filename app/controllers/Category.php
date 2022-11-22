<?php
class Car extends Controller{
    public $model_category;
    public $data =[];

    public function __construct()
    {
        $this->model_car = $this->model('m_category');
    }

    public function index(){

        // echo 'Trang chu';
        $dataProduct = $this->model_car->show_Product();
        $categoryProduct = $this->model_car->show_category_Product();

        // $this->data['data_list'] = $dataIndex;
        $this->data['sub_content']['car'] = $dataProduct;
        $this->data['sub_content']['category_car'] = $categoryProduct;
        $this->data['category'] = 'car/index';

        $this->render('layouts/client_layout3',$this->data);
    }

}