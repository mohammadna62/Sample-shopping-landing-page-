<?php
    require_once 'admin/model/Mindex.php';
    require_once 'admin/model/Mpro.php';
    $class=new pro();
    $result=$class->pro_list();

/*  $class = new main();
  $menu_list=$class->menu_list();
  $news_list=$class->news_list();*/

    require_once 'view/index/index.php';