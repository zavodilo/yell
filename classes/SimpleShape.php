<?php

/**
 * Общий класс для всех Фигур
 * Class Square
 */
class SimpleShape
{
    /**
     * Размер Фигуры
     * @var
     */
    public $size;

    /**
     * Цвет Фигуры
     * @var
     */
    public $color;

    /**
     * Получает массив параметров фигуры
     * @param array $params - массив параметров фигуры
     */
    function __construct(array $params)
    {
        //устанавливаем св-ва фигуры
        //размер
        $this->size = (int)$params['size'];
        //цвет
        $this->color = $params['color'];
    }
}

