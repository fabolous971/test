<!DOCTYPE html>
<?php
include 'src/classe/Product.php';
include 'src/classe/Panier.php';
include 'src/classe/ServiceManager.php';
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       /* $product = new Product(1,'test1',25);
        $product2 = new Product(2,'test2',70);
        $cart = new Panier($product);
        $cart->AddItemsToCart($product2);*/
        $sm = new ServiceManager();
        $param = array(array(
            'nom' => 'montest',
            'path' => 'src/err/pop.php'
        ),
            array(
            'nom' => 'montest2',
            'path' => 'src/err/poddp.php'
        )
            
        );
        
        
        $sm->saveService($param);
        
        echo '<pre>';
            var_dump($sm->getService('montest2'));
        echo '</pre>';
        /*foreach ($cart->get_cart() as $value) {
               
        }*/
        ?>
    </body>
</html>
