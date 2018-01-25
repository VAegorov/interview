<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Interview</title>
</head>
<body>
    <h1>Опрос</h1>
    <h2>Укажите Ваш возраст</h2>
    <div>
        <form method="GET" action="index.php">
            <p><input type="radio" name="age" value="20">до 20 лет</p>
            <p><input type="radio" name="age" value="2030">от 20 до 30 лет</p>
            <p><input type="radio" name="age" value="30">более 30 лет</p>
            <p><input type="submit" name="submit" value="Ответить"></p>
        </form>
    </div>
    <h3>После ответа узнаете результаты опроса</h3>
</body>
</html>