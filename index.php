<?php
/*
 * Тестовая строка
 * Пример: http://localhost/?shapes=%5B%7B%22type%22%3A%22circle%22%2C%22params%22%3A%7B%22size%22%3A%221%22%2C%22color%22%3A%22FFFFFF%22%7D%7D%2C%7B%22type%22%3A%22square%22%2C%22params%22%3A%7B%22size%22%3A%221%22%2C%22color%22%3A%22FFFFFF%22%7D%7D%2C%7B%22type%22%3A%22circle%22%2C%22params%22%3A%7B%22size%22%3A%222%22%2C%22color%22%3A%22000000%22%7D%7D%5D
 */
/*
$shapes = [
    ['type' => 'circle', 'params' => ['size' => '1', 'color' => 'FFFFFF']],
    ['type' => 'square', 'params' => ['size' => '1', 'color' => 'FFFFFF']],
    ['type' => 'circle', 'params' => ['size' => '2', 'color' => '000000']]
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

