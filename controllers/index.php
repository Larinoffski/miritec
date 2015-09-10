<?php

class Index extends Controller {

      public function __construct() {
          parent::__construct();
      }

      public function index(){
          $this->view->render('index/index');
      }

      public function save_action() {
          $indexModel = new Index_Model();

          if (!$_POST['1st_name'] && !$_POST['mail'] && !$_POST['pass'] && !$_POST['conf_pass'])
          {
              echo "Input required data";
          }

          elseif (!preg_match("/^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/", $_POST['phone'])){
              echo "Incorrect phone nubber";
          }

          elseif($_POST['pass']!=$_POST['conf_pass']){
              echo "Password is not confirmed";
          }
          else
          {
              $arrPost = array(
                  "1_name" => $_POST['1st_name'],
                  "2_name" => $_POST['2nd_name'],
                  "3_name" => $_POST['3rd_name'],
                  "mail" => $_POST['mail'],
                  "phone" => $_POST['phone'],
                  "pass" => $_POST['pass'],
                  "c_pass" => $_POST['conf_pass']
              );

              $uId = $indexModel->insert($arrPost);

              if ($uId)
              {
                      Session::init();
                      Session::set('user_id', $uId);
                      header('Location: ../user');
              }
              else
              {
                      header('Location: ../index');
              }
          }
      }
}