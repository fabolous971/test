<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author Administrateur
 */
class Product {
    //put your code here
    protected $_id;
    protected $_name;
    protected $_price;
    
 

        
    public function __construct($_id , $_name , $_price) {
        $this->set_id($_id);
        $this->set_name($_name);
        $this->set_price($_price);
    }

    public function get_id() {
        return $this->_id;
    }

    public function get_name() {
        return $this->_name;
    }

    public function set_id($_id) {
        $this->_id = $_id;
    }

    public function set_name($_name) {
        $this->_name = $_name;
    }


       public function get_price() {
        return $this->_price;
    }

    public function set_price($_price) {
        $this->_price = $_price;
    }
}
