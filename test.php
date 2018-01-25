<?php
/*echo 'test';
$im = imageCreate(500, 100);//create img
$color = imageColorAllocate($im, 27, 49, 243);//create color
$pr = imageFilledRectangle($im, 10, 10, 20, 90, $color);
//imagecolortransparent($im, $color);
header("Content-type:image/jpg");
imageJpeg($im, '', 100);*/

// Создание изображения 100*30
$im = imagecreate(100, 30);

// Белый фон, синий текст
$bg = imagecolorallocate($im, 255, 255, 255);
$textcolor = imagecolorallocate($im, 0, 0, 255);

// Надпись в левом верхнем углу
imagestring($im, 5, 0, 0, 'Hello world!', $textcolor);

// Вывод изображения
header('Content-type: image/png');

imagepng($im);
imagedestroy($im);
//-------------------------------------------------------------------------
// Включаем и инициализируем класс  class
include 'Poll.php';
$poll = new Poll;
?>
<?php
//Получаем данные результатов опроса
$pollResult = $poll->getResult($_GET['pollID']);
?>
<h3><?php echo $pollResult['poll']; ?></h3>
<p><b>Total Votes:</b> <?php echo $pollResult['total_votes']; ?></p>
<?php
if(!empty($pollResult['options'])){ $i=0;
    //Массив цветов столбцов для каждого варианта ответа
    $barColorArr = array('azure','emerald','violet','yellow','red');
    //Общие параметры столбцов для вариантов ответа
    foreach($pollResult['options'] as $opt=>$vote){
        //Вычисляем процентное соотношение для каждого варианта ответа
        $votePercent = round(($vote/$pollResult['total_votes'])*100);
        $votePercent = !empty($votePercent)?$votePercent.'%':'0%';
        //Определяем цвет столбца
        if(!array_key_exists($i, $barColorArr)){
            $i=0;
        }
        $barColor = $barColorArr[$i];
        ?>
        <div class="bar-main-container <?php echo $barColor; ?>">
            <div class="txt"><?php echo $opt; ?></div>
            <div class="wrap">
                <div class="bar-percentage"><?php echo $votePercent; ?></div>
                <div class="bar-container">
                    <div class="bar" style="width: <?php echo $votePercent; ?>;"></div>
                </div>
            </div>
        </div>
        <?php $i++; } } ?>
<a href="index.php">Back To Poll</a>