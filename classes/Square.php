<?php

/**
 * Class Square
 */
class Square extends SimpleShape implements ShapeStrategy
{
    function createShape()
    {
        return "Square " . $this->size;
    }
}

