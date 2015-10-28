<?php

/**
 * Класс Квадрат
 * Class Square
 */
class Square extends SimpleShape implements ShapeStrategy
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
        //Рисуем квадрат
        imagerectangle($image, $this->size, $this->size, $this->size + 20, $this->size + 20, $color);
        return $image;
    }
}

