<?php

class DB{
    protected $table;
    protected $dsn="mysql:host=localhost;charset=utf8;dbname=db04";
    protected $links;
    protected $pdo;

function __construct($table){
    $this->table=$table;
    $this->pdo=new PDO($this->dsn,'root','');
}

function all(...$arg){
    $sql=$this->sql_all(" select *from $this->table",...$arg);
}



// tools
protected function a2s($array){
    foreach($array as $key => $val){
        if($key!='id'){
            $tmp[]="`$key`=`$val`";
        }
    }
}

}