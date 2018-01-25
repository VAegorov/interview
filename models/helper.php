<?php

//соединение с базой данных
function db_connect()
{
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'test';
    $link = mysqli_connect($host, $user, $password, $db_name);
    mysqli_set_charset($link, "UTF8") or die(mysqli_error($link));
    return $link;
}

function add($link, int $one)
{
    $query = "INSERT INTO interview SET result=$one";
    $result = mysqli_query($link, $query);
    if (mysqli_affected_rows($link) == 1) {
        return true;
    } else {
        return false;
    }
}

function getResult($link)
{
    $result_total = [];
    $query = "SELECT COUNT(id) AS count FROM interview";
    $result = mysqli_query($link, $query);
    $result_total['count'] = mysqli_fetch_assoc($result)['count'];

    $query = "SELECT COUNT(id) AS count FROM interview WHERE result=20";
    $result = mysqli_query($link, $query);
    $result_total['age_20'] = mysqli_fetch_assoc($result)['count'];

    $query = "SELECT COUNT(id) AS count FROM interview WHERE result=2030";
    $result = mysqli_query($link, $query);
    $result_total['age_2030'] = mysqli_fetch_assoc($result)['count'];

    $query = "SELECT COUNT(id) AS count FROM interview WHERE result=30";
    $result = mysqli_query($link, $query);
    $result_total['age_30'] = mysqli_fetch_assoc($result)['count'];
    return $result_total;
}