<?php

class MainController extends Controller
{
    function __construct(){
        $this->model = new Main();
    }

    public function actionIndex(){
        $this->render('index.php', $this->model->getData());
    }

    public function actionEdit($id=null){
        $data = [];
        if(isset($_POST['id'])){
            $lang = $this->model->getById($_POST['id']);
            $data['id'] = $_POST['id'];
            foreach($lang[0] as $l=>$k){
                if(!empty($_POST[$l])){
                    $data[$l] = $_POST[$l];
                }else{
                    $data[$l] = $lang[0][$l];
                }
            }
            $res = $this->model->editData($data);
            if(!$res) {
                $this->redirect();
            }else{
                $this->render('error.php');
            }

        }else{
            $this->render('edit.php', $this->model->getById($id));
        }
    }

    public function actionDelete($id){
        $this->model->deleteData($id);
        $this->redirect();
    }

    public function actionAdd(){
        $data = [];
        if(isset($_POST['title']) && isset($_POST['market']) && isset($_POST['in_projects']) && isset($_POST['satisfaction_index'])){
            $data['title'] = $_POST['title'];
            $data['market'] = $_POST['market'];
            $data['in_projects'] = $_POST['in_projects'];
            $data['satisfaction_index'] = $_POST['satisfaction_index'];
            $res = $this->model->addData($data);
            if(!$res) {
                $this->redirect();
            }else{
                $this->render('error.php');
            }
        }else{
            $this->render('add.php');
        }
    }
}