<?php
include_once 'Mindex.php';
class user extends main{
  public function __construct()
    {
        global $db;
        $this->db=$db;
    }
    public function user_add($data){
        $this->db->query("insert into user_tbl (name,email,password,status,vc) values ('$data[name]','$data[email]','$data[password]','0','$data[vc]')");
        $id=$this->db->lastInsertId();
        return $id;
    }
    public function user_login($data){
        $result=$this->db->query("select * from user_tbl where email='$data[email]'");
        $row=$result->fetch(PDO::FETCH_ASSOC);
        return $row;

    }




}