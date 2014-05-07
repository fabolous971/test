<?php
namespace classe; 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Personne {
    
    protected $name;
    
    public function getName() {
        return $this->name;
    }

    /**
     * @param string $name
     * @thows \InvalidArgumentException
     */
    public function setName($name) {
        if(!preg_match('/^[a-z][a-z -]*$/i', $name) ){
            throw new \InvalidArgumentException;
        }
        
        $this->name = $name;
        return $this;
    }


}
