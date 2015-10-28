<?php

/**
 * Класс Квадрат
 * Class Square
 */
class Square extends SimpleShape implements ShapeStrategy
{
    public function createShape()
    {
        return "Square " . $this->size;
    }
}

