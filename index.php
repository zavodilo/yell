<?php
/*
 * Тестовая строка
 * Пример:
 * http://localhost/?shapes=%5B%7B%22type%22%3A%22circle%22%2C%22params%22%3A%7B%22size%22%3A%2215%22%2C%22red%22%3A%22200%22%2C%22green%22%3A%2220%22%2C%22blue%22%3A%22100%22%7D%7D%2C%7B%22type%22%3A%22square%22%2C%22params%22%3A%7B%22size%22%3A%2230%22%2C%22red%22%3A%22230%22%2C%22green%22%3A%2220%22%2C%22blue%22%3A%22100%22%7D%7D%2C%7B%22type%22%3A%22circle%22%2C%22params%22%3A%7B%22size%22%3A%2220%22%2C%22red%22%3A%22100%22%2C%22green%22%3A%2220%22%2C%22blue%22%3A%22100%22%7D%7D%5D
 */
/* Раскомментировать, чтоб узнать строку, которая преобразована для вставки в http://localhost/?shapes= */
/*
$shapes = [
    ['type' => 'circle', 'params' => ['size' => '15', 'red' => '200', 'green' => '20', 'blue' => '100']],
    ['type' => 'square', 'params' => ['size' => '30', 'red' => '230', 'green' => '20', 'blue' => '100']],
    ['type' => 'circle', 'params' => ['size' => '20', 'red' => '100', 'green' => '20', 'blue' => '100']]
];
echo (urlencode(json_encode($shapes))); exit;
*/

/**
 * Магическая функция загрузки вызываемых классов
 * @param $class_name - загружаемый класс
 */
function __autoload($className) {
    include './classes/' . $className . '.php';
}

//Проверяем, что установлен параметр shapes
if (isset($_REQUEST['shapes'])) {
    //создаем класс обработчик запроса от пользователя
    new MainController($_REQUEST['shapes']);
} else {
    //кидаем ошибку
    throw new Exception('Отсутсвуют данные в $_REQUEST["shapes"]', 400);
}

?>

