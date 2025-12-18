<?php
class main{
    public function __construct()
    {
        global $db;
        $this->db=$db;
    }

    public function uploaderImage($fil,$url,$exts)
    {
        $file=$_FILES[$fil];
        $array=explode(".",$file['name']);
        $newname=rand().".".end($array);
        $from=$file['tmp_name'];
        $to=$url."/".$newname;
        foreach ($exts as $ext){
            if($file['type']==$ext) {
                move_uploaded_file($from, $to);
                return $to;
            }
        }

    }
    public function basket_list($id){
        $results=$this->db->query("SELECT * FROM basket_tbl where user_id='$id'");
        $row=$results->fetchAll(PDO::FETCH_ASSOC);
        return $row;
    }

    public function basket_list_pro($id)
    {
        $results=$this->db->query("SELECT * FROM basket_tbl LEFT JOIN pro_tbl ON basket_tbl.pro_id = pro_tbl.id WHERE basket_tbl.user_id='$id'");
        $results->execute();
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
  }



    /*public function menu_list(){
        $results=$this->db->query("SELECT * FROM menu_tbl");
        return $results;
    }
    public function news_list(){
        $results=$this->db->query("SELECT * FROM news_tbl where status='1'");
        return $results;
    }*/

}