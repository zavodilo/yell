<?php

/**
 * Основной класс-контроллер приложения
 * Class MainController
 */
class MainController {


    /**
     * Получаем массив-данных из строки, иначе кидаем ошибку
     * @param $shapesString
     * @throws Exception - Не удалось извлечь массив из json-строки
     */
    function __construct($shapesString) {
            //декодируем строку закодированую urlencode() и получаем из нее json, который декодируем в массив
            $decode = json_decode(urldecode($shapesString));
            //Проверяем, что получили массив
            if (is_array($decode)) {
                //обрабатываем полученный массив
                $this->actionShapes($decode);
            } else {
                //кидаем ошибку
                throw new Exception('Не удалось извлечь массив из json-строки в $_REQUEST["shapes"]', 400);
            }
    }

    /**
     * Обрабатываем запрос пользователя
     * @param array $shapes - массив данных от пользователя
     * @throws Exception - Не задано обно из св-в type или params
     */
    function actionShapes(array $shapes) {
        $toView = array(); //данные передаваемые в представление

        // Создаем заготовку изображения размером 200х200
        $image = imagecreatetruecolor(200, 200);

        //В цикле обходим массив объектов
        foreach($shapes as $shape) {
            //проеряем, что у полученных объектов установлены св-ва type и params, иначе кидаем ошибку
            if(isset($shape->type) && isset($shape->params) && $shape->type && $shape->params) {
                //Инициализируем переменную Фигуры
                $shapeObject = null;
                //В соответствии с полученными данными типа фигуры, создаем объект Фигуры
                switch ($shape->type) {
                    //круг
                    case "circle":
                        $shapeObject = new Circle((array)$shape->params);
                        break;
                    //квадрат
                    case "square":
                        $shapeObject = new Square((array)$shape->params);
                        break;
                }
                //проверяем, что объект фигуры создан (конечно, можно проверить на сооветствие классу)
                if($shapeObject) {
                    //Создаем контекст паттерна Стратегия
                    $context = new Context($shapeObject); //применяем паттерн стратегия
                    //Вызываем обработчик паттерна Стратегия
                    $toView = $context->createShape($image);
                }
            } else {
                //бросаем ошибку
                throw new Exception('Неверный формат ' . $shape, 400);
            }
        }

        //Выводим на экран данные из фигур
        View::render($toView);
    }
}

