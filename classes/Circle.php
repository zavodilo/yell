<?php

/**
 * Класс Круг
 * Class Circle
 */
class Circle extends SimpleShape implements ShapeStrategy
{
    /**
     * Добавляем картинку на фон
     * @param $image - картинка фона
     * @return mixed - возвращаем новую картинку фона
     */
    public function createShape($image)
    {
        //Определяем цвет
        $color = imagecolorallocate($image, $this->red, $this->green, $this->blue);
        //Рисуем круг
        imageellipse($image, $this->size, $this->size, $this->size, $this->size, $color);
        return $image;
    }
}

