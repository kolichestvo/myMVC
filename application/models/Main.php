<?php

class Main extends Model
{
    public $error;

    public function getData(){
        $res = $this->query('SELECT * FROM `programming_languages`');
        if($res){
            return $res;
        }else{
            return false;
        }
    }

    public function getById($id){
        $res = $this->query('SELECT * FROM `programming_languages` WHERE `id`=?', [$id]);
        if($res){
            return $res;
        }else{
            return false;
        }
    }

    public function editData($data){
        $res = $this->query('UPDATE `programming_languages` SET `title`=:title, `market`=:market, `in_projects`=:in_projects,
                          `satisfaction_index`=:satisfaction_index WHERE `id`=:id', $data);
        if($res){
            return true;
        }else{
            return false;
        }
    }

    public function addData($data){
        $res = $this->query('INSERT INTO `programming_languages` (`title`, `market`, `in_projects`, `satisfaction_index`)
                VALUE(:title,:market,:in_projects, :satisfaction_index)', $data);
        if($res){
            return true;
        }else{
            return false;
        }
    }

    public function deleteData($id){
        $res = $this->query('DElETE FROM `programming_languages` WHERE `id` = ?', [$id]);
        if($res){
            return true;
        }else{
            return false;
        }
    }
}