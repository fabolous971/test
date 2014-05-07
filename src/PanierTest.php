<?php

class PanierTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testCartNotEmpty()
    {
        $prod = new \classe\Product(2,'test2',70);
        $cart = new \classe\Panier($prod);
        $cart->get_cart();
        $this->assertGreaterThanOrEqual(count($cart->get_cart()), 1);
    }

    
}
