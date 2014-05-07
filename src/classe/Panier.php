<?php

include_once 'Product.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Panier
 *
 * @author Administrateur
 */
class Panier {
    //put your code here
    protected $_id;
    protected $_montant = 0;
    protected $_nbArticle = 0;
    protected $_date;
    protected $_nbPanier = 0;
    protected $_cart = array();

        
     public function __construct(Product $prod) {
        $this->addItemsToCart($prod);
        //var_dump($prod);
    }
    
        
    public function get_cart() {
        return $this->_cart;
    }

    public function set_cart($_cart) {
        $this->_cart = $_cart;
    }
    
    public function get_nbPanier() {
        return $this->_nbPanier;
    }

    public function set_nbPanier($_nbPanier) {
        $this->_nbPanier = $_nbPanier;
    }

    
   

        public function get_id() {
        return $this->_id;
    }

    public function get_montant() {
        return $this->_montant;
    }

    public function get_nbArticle() {
        return $this->_nbArticle;
    }

    public function get_date() {
        return $this->_date;
    }

    public function set_id($_id) {
        $this->_id = $_id;
    }

    public function set_montant($_montant) {
        $this->_montant = $_montant;
    }

    public function set_nbArticle($_nbArticle) {
        $this->_nbArticle = $_nbArticle;
    }

    public function set_date($_date) {
        $this->_date = $_date;
    }

    
    
    
    public function addItemsToCart(Product $product){
        $this->_montant += $product->get_price();
        $this->_nbArticle += 1;
        $this->_cart [] = $product ;
        return $this;
    }
    
    public function getCart($id){
        if(isset($_SESSION['cart']))
             return $this->_cart ;
        else{
            foreach ($this->_cart as $key => $cart) {
                if($key == $id)
                    return $cart;
            }
        }
    }
    
    public function deleteItemsToCart($id){
        return $this;
    }

    public function deleteCart($id){
         if(isset($_SESSION['cart']))
             unset($_SESSION['cart']);
         else
            $cart = $this->getCart($id);
             unset($cart);
         
        return $this;
    }
}
