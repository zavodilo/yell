<?php

/**
 * Class Square
 */
class SimpleShape
{
    public $size;
    public $color;

    function __construct(array $params)
    {
        //устанавливаем сво-ва фигуры
        $this->size = $params['size'];
        $this->color = $params['color'];
    }
}

