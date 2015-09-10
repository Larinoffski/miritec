<?php

class User extends Controller{

    public function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('user_id');
        if($logged == false) {
            Session::destroy();
            header('Location: ../index');
            exit();
        }
    }

    public function index()
    {
//        require 'models/';
        $model = new User_Model();
        $arrUser = $model->getUser(1);
        $this->view->user =  $arrUser;
        $this->view->render('user/index');

    }

    public function logout() {
        Session::destroy();
        header('Location: ../index');
        exit();
    }



}