<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Container
 *
 * @author Administrateur
 */
class ServiceManager {
    //put your code here
    protected $_name;
    protected static $_services = array();
    protected static $_instances = array();

    public function getService($serviceName){
        if($this->hasService($serviceName)){
            if (!static::$_instances[$serviceName]) {
                $serviceDefinition = static::$_services[$serviceName];

                $serviceClass = $serviceDefinition['class'];
                static::$_instances[$serviceName] = new $serviceClass;
            }
            return static::$_instances[$serviceName];
        }   
    }
    
    public function addService($serviceName, array $serviceDefinition){
        if(!$this->hasService($serviceName)){
            self::$_services[$serviceName] = $serviceDefinition;
        }   
    }
    
    public function hasService($serviceName){
        return isset(static::$_services[$serviceName]);
    } 
}
