<?php
require_once "models/helper.php";
$link = db_connect();

if (isset($_GET['opros'])) {
    //var_dump($_REQUEST);
    $result_total = getResult($link);
    include "views/opros.php";
    exit();
} else include "views/index_v.php";

if (isset($_GET['submit'])) {
    if (isset($_GET['age']) && !empty($_GET['age'])) {
        echo $result = $_GET['age'];
        if (add($link, $result)) {
            header("Location:index.php?opros");
            exit();
        } else echo "<h2>Результат не добавлен, попробуйте позже!</h2>";
    } else echo "<h2>Вы не указали Ваш возраст!</h2>";
}

