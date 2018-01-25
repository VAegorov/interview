<?php
require_once "models/helper.php";
$link = db_connect();

if (isset($_GET['submit'])) {
    if (isset($_GET['age']) && !empty($_GET['age'])) {
        $result = $_GET['age'];
        if (add($link, $result)) {
            echo "Ok";//переходим на страницу результата
            var_dump(getResult($link));
        } else echo "<h2>Результат не добавлен, попробуйте позже!</h2>";
    } else echo "<h2>Вы не указали Ваш возраст!</h2>";
}

include "views/index_v.php";