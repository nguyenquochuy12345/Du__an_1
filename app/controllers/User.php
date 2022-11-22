<?php
class User extends Controller
{
    public $model_user;

    public function __construct()
    {
        $this->model_user = $this->model('m_user');
    }


    public function index()
    {

        // $this->render('layouts/client_layout', $this->data);

        $this->data['login'] = 'login/index';

        $this->render('layouts/client_login',$this->data);
    }


}
