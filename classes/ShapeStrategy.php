<?php

/**
 * Шаблон Strategy
 * Interface ShapeStrategy
 */
interface ShapeStrategy
{
    /**
     * Метод, определяющий способ вызова алгоритма
     * @param $image - заготовка изображения
     * @return mixed
     */
    public function createShape($image);
}

