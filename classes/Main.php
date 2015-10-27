<?php

/**
 * Основной класс приложения
 * Class Main
 */
class Main {

    function __construct(array $shapes) {
        $arrayToView = array(); //массив данных передаваемых в представление
        //var_dump($shapes);
        foreach($shapes as $shape) {
            //var_dump($shape->type, $shape->params);
            if(isset($shape->type) && isset($shape->params)) {
                $shapeObject = null;
                switch ($shape->type) {
                    case "circle":
                        $shapeObject = new Circle((array)$shape->params);
                        break;
                    case "square":
                        $shapeObject = new Square((array)$shape->params);
                        break;
                }

                if($shapeObject) {
                    $context = new Context($shapeObject); //применяем паттерн стратегия
                    $arrayToView[] = $context->execute();
                }
            } else {
                throw new Exception('Неверный формат ' . $shape, 400);
            }
        }
        //Выводим на экран данные из фигур
        View::render($arrayToView);
    }
}

