<?php

class Model
{
    private $connection;
    protected $server =  'localhost',
        $user = 'root',
        $password = '',
        $dbName = 'for_mvc',
        $charset = 'utf8';

    function __construct()
    {
        $dsn = "mysql:host=".$this->server.";dbname=".$this->dbName.";charset=".$this->charset.";";
        try{
            $this->connection = new PDO($dsn, $this->user, $this->password);
            $this->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            return true;
        }catch (PDOException $e){
            $this->errorLog($e);
            return false;
        }
    }

    protected function query($sql, $params = false)
    {
        try{
            $sth = $this->connection->prepare($sql);
            if($params == false){
                $sth->execute();
                $ins = $sth->fetchAll(PDO::FETCH_ASSOC);
            }else{
                $sth->execute($params);
                $ins = $sth->fetchAll(PDO::FETCH_ASSOC);
            }
            return $ins;
        }catch(PDOException $e){
            $this->errorLog($e);
            return false;
        }
    }

    private function errorLog($e){
        file_put_contents('PDOErrors.txt', date('d-m-Y G:i:s',time())." ".$e->getMessage()." File:".$e->getFile()." Line:".$e->getLine(), FILE_APPEND);
        file_put_contents('PDOErrors.txt', "\r\n", FILE_APPEND);
    }

    protected function lastInsertId(){
        return $this->connection->lastInsertId();
    }

    protected function errorInfo(){
        return $this->connection->errorInfo();
    }
}