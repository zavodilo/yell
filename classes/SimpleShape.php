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
     * Цвет Фигуры для красного
     * @var
     */
    public $red;

    /**
     * Цвет Фигуры для синего
     * @var
     */
    public $blue;

    /**
     * Цвет Фигуры для зеленого
     * @var
     */
    public $green;

    /**
     * Получает массив параметров фигуры
     * @param array $params - массив параметров фигуры
     */
    function __construct(array $params)
    {
        //устанавливаем св-ва фигуры
        //размер
        $this->setParam('size', $params);
        //$this->size = (int)$params['size'];
        //цвет
        //$this->color = $params['color'];
        $this->setParam('red', $params);
        $this->setParam('blue', $params);
        $this->setParam('green', $params);

        //создал просто чтоб тестовые данные не перегенерировать
        if($this->size < 10) {
            $this->size = 10 * $this->size;
        }
    }

    protected function setParam($param, $params)
    {
        if(isset($params[$param])) {
            $this->$param = (int)$params[$param];
        } else {
            throw new Exception('Не задан ' . $param, 400);
        }
    }
}

