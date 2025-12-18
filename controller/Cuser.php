<?php
require_once 'admin/model/Muser.php';

$user = new user();
switch($action){
    case 'register':
       if($_POST){
           $data=$_POST['frm'];
           $data['vc']=uniqid();
           $data['password']=sha1($data['password']);
          $id= $user->user_add($data);
           //mail($data['email'],'vc subject',"<a href='academyit.net/vc.php?vc=$data[vc]'>برای تایید ایمیل بر روی لینک کلیلک کنید</a>");
           $_SESSION['user_id']=$id;   /*برای این که به محض ثبت نام کاربر لاگین هم بشود*/
           $_SESSION['user_name']=$data['name'];
           header("location:admin/index.php?c=index&a=index");
       }

        break;
    case 'login':
        if($_POST){
            $data=$_POST['frm'];
            $password=sha1($data['password']);
            $user=$user->user_login($data);
            if($user['password']==$password){
                $_SESSION['user_id']=$user['id'];
                $_SESSION['user_name']=$user['name'];
                header("location:admin/index.php");
            }else{
                header("location:index.php?c=index&a=index&login=error");
            }

        }

        break;
    case 'logout':
          session_destroy();
          header("location:index.php?c=user&a=login");
        break;
}
require_once 'view/'.$controller.'/'.$action.'.php';