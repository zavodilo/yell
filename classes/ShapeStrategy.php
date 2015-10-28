<?php

/**
 * Шаблон Strategy
 * Interface ShapeStrategy
 */
interface ShapeStrategy
{
    /**
     * Метод, определяющий способ вызова алгоритма
     * @return mixed
     */
    public function createShape();
}

