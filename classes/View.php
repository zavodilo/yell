<?php

/**
 * Класс представления, отвечает за вывод информации на экран
 * Class View
 */
class View {

    public static function render($image) {
        // PNG изображение
        header('Content-type: image/png');
        imagepng($image);
    }
}

