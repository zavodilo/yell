<?php

/**
 * Контекст паттерна Стратегия
 * Class Context
 */
class Context
{
    //конкретный тип реализации ShapeStrategy
    private $shapeStrategy;

    /**
     * @param ShapeStrategy $strategy - объект Фигуры, тип ShapeStrategy
     */
    function __construct(ShapeStrategy $strategy)
    {
        //устанавливаем тип ShapeStrategy
        $this->shapeStrategy = $strategy;
    }

    /**
     * Получем данные из объекта Фигуры и возвращаем их для передачи в представление
     * @param $image - заготовка изображения
     * @return mixed Возвращаем данные из объекта Фигуры
     */
    function createShape($image)
    {
        return $this->shapeStrategy->createShape($image) ;
    }
}

