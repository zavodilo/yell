<?php

/**
 * Class Circle
 */
class Circle extends SimpleShape implements ShapeStrategy
{
    function createShape()
    {
        return "Circle " . $this->size;
        /*
        // PNG изображение
        header('Content-type: image/png');

        // 100x100
        $im = imagecreatetruecolor(100, 100);

        // Определяем красный цвет
        $red = imagecolorallocate($im, 0xCC, 0x00, 0x00);

        // Определяем белый цвет
        $white = imagecolorallocate($im, 0xFF, 0xFF, 0xFF);

        // Делаем фон белым (по-умолчанию черный)
        imagefill($im, 1, 1, $white);

        // Рисуем круг красного цвета
        imageellipse($im, 75, 50, 80, 80, $red);

        // Выводим изображение
        imagepng($im);
        */
    }
}

