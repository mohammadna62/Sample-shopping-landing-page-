# Shopping Landing Project


___
![](https://www.smartsight.in/wp-content/uploads/2020/11/php-300x165.png)

<p>A fully functional e-commerce training website built with PHP backend. Features include user authentication, product management, shopping cart, order processing, and a simple admin panel. This project serves as a practical exercise for learning PHP, MySQL, and core web development concepts in a real-world scenario.</p>


`Author:`
```json
{
"firstName"  : "Mohammad"
"lastName"   : "Naghavi Olyaei"
"userName"   : "mohammadna62"
}
```
___

`Sample Code`
``` php
<?php
include_once 'Mindex.php';
class basket extends main{

       public function basket_list($id){
        $results=$this->db->query("SELECT * FROM basket_tbl where user_id='$id'");
        $results=$results->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function basket_add($user_id,$pro_id){
    $this->db->query("insert into basket_tbl (user_id,pro_id) values ('$user_id','$pro_id')");
    }
    public function basket_delete($id){
       $this->db->query("delete from basket_tbl where id='$id'");
    }
}
___
```
##  List 
Ordered:
1. PHP
2. Javascript
3. JQuery
4. MySQL

Unordered:
- BackEnd (`PHP`)
- FrontEnd  (`HTML` - `CSS` - `JAVASCRIPT` - `JQUERY`)
___

[learn about backend](https://www.php.net/)

[learn about javascript](https://www.javascript.com/)

[learn about Data Base](https://www.mysql.com/)
___
##image

![Github-mage](https://octodex.github.com/images/dojocat.jpg)