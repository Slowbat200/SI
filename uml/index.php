<?php
/**
 * třída player
 */
class player{
    /** 
     * proměnná speed, která je protected
     */
    protected $speed; 
    
    /**
     * veřejná funkce hp, vrací float
     */
    public function hp(){
        return $float;
    }
    /**
     * veřejná funkce stregth, vrací int
     */
    public function strength(){
        return $int;
    }
    
    /**
     * veřejná abstraktní funkce player, nic nevrací
     */
    public Abstract function player(){
        return $void;
    }
};

/** 
 * třída bot dědící z třídy player
 */
class bot extends player{

    /**
     * soukromá proměnná strength
     */
    private $strength;
    /**
     * veřejná funkce hp, vrací float
     */
    public function hp(){
        return $float;
    }
    
    /**
     * veřejná funkce defence, vrací float
     */
    public function defence(){
        return $float;
    }
    
    /**
     * veřejná funkce setPos s datovým typem float, nic nevrací
     */
    public function setPos(){
        $setPos = $float;
        return $void;
    }
    /**
     * veřejná funkce getPos, nic nevrací
     */
    public function getPos(){
        return $void;
        };
    };
?>