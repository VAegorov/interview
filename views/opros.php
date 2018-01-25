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
    <p><a href="index.php">На главную</a></p>
    <h1>Результаты опроса</h1>
    <h3>Всего проголосовало: <?=$result_total['count']; ?></h3>
    <h3>До 20 лет: <?=$result_total['age_20'] . ', ' , number_format($result_total['age_20']*100/$result_total['count'], 1) . '% опрошенных.'; ?></h3>
    <h3>От 20 до 30 лет: <?=$result_total['age_2030'] . ', ' , number_format($result_total['age_2030']*100/$result_total['count'], 1) . '% опрошенных.'; ?></h3>
    <h3>После 30 лет: <?=$result_total['age_30'] . ', ' , number_format($result_total['age_30']*100/$result_total['count'], 1) . '% опрошенных.'; ?></h3>

    <div class="bar-main-container emerald">
        <div class="txt"> Возраст до 20 лет</div>
        <div class="wrap">
            <div class="bar-percentage"><?=number_format($result_total['age_20']*100/$result_total['count']); ?>%</div>
            <div class="bar-container">
                <div class="bar" style="width: <?=number_format($result_total['age_20']*100/$result_total['count']); ?>%"></div>
            </div>
        </div>
    </div>
    <div class="bar-main-container yellow">
        <div class="txt"> Возраст от 20 до 30 лет</div>
        <div class="wrap">
            <div class="bar-percentage"><?=number_format($result_total['age_2030']*100/$result_total['count']); ?>%</div>
            <div class="bar-container">
                <div class="bar" style="width: <?=number_format($result_total['age_2030']*100/$result_total['count']); ?>%"></div>
            </div>
        </div>
    </div>
    <div class="bar-main-container red">
        <div class="txt"> Возраст свыше 30 лет</div>
        <div class="wrap">
            <div class="bar-percentage"><?=number_format($result_total['age_30']*100/$result_total['count']); ?>%</div>
            <div class="bar-container">
                <div class="bar" style="width: <?=number_format($result_total['age_30']*100/$result_total['count']); ?>%"></div>
            </div>
        </div>
    </div>




</body>
</html>