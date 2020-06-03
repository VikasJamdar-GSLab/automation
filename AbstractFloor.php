<?php

abstract class Floor
{
    private $totalArea;
    private $cleanedArea;
    public function __construct(int $totalArea)
    {
        $this->totalArea = $totalArea;
        $this->cleanedArea = 0;
    }

    // using magic methods __get and __set to get and set properties

    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }
    
    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    
        return $this;
    }
}