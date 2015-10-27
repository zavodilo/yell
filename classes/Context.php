<?php

class Context
{
    private $shapeStrategy;

    function __construct(ShapeStrategy $strategy)
    {
        $this->shapeStrategy = $strategy;
    }

    function execute()
    {
        return $this->shapeStrategy->createShape() ;
    }
}

