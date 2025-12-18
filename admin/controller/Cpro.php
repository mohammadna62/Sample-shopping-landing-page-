<?php
require_once 'model/Mpro.php';

    $class = new pro();
    switch($action){
        case 'list':
         $pro=$class->pro_list();
        break;
        case 'add':
            $res=$class->procat_list();
            if($_POST){
                $data=$_POST['frm'];
                $exts=array('image/jpeg','image/png');
                if($_FILES['image1']['name']){
                   $to[0]= $class->uploaderImage('image1','../public/uploader',$exts);
                }else{$to[0]='';}
                if($_FILES['image2']['name']){
                    $to[1]= $class->uploaderImage('image1','../public/uploader',$exts);
                }else{$to[1]='';}
                if($_FILES['image3']['name']){
                    $to[2]= $class->uploaderImage('image1','../public/uploader',$exts);
                }else{$to[2]='';}
                $class->pro_add($data,$to);


            }
        break;
        case 'delete':
            $id=$_GET['id'];
            $class->pro_delete($id);
            header("location:index.php?c=pro&a=list");
        break;
        case 'edit':
            $id=$_GET['id'];
            $results=$class->pro_showEdit($id);
            $res=$class->promaincat_list();
            if($_POST){
                $data=$_POST['frm'];
                $class->pro_edit($data,$id);
                //header("location:index.php?c=pro&a=list");
            }
        break;
    }
   require_once 'view/'.$controller."/".$action.'.php';