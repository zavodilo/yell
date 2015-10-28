<?php

/**
 * Класс Круг
 * Class Circle
 */
class Circle extends SimpleShape implements ShapeStrategy
{

    public function createShape()
    {
        return "Circle " . $this->size;

    }
}

