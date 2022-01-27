<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php_hw_3_Maruzhenko</title>
</head>
<body>

<?php
// ---------------------------------------------- Task 16
function task16($str = ''){
    echo '<strong>Задание 16.</strong><br />';
    $str .= ' ';
    $arr = [];
    $string = '';
    for($i = 0; $i < mb_strlen($str); $i++){
        $let = mb_substr($str, $i, 1);
        if( ($let !== ' ') && ($let !== ',') && ($let !== '.') && ($let !== '?') && ($let !== '!') ){
            $string .= $let;
        }else{
            if($string !== '') {
                array_push($arr, $string);
            }
            $string = '';
        }
    }
    $max = mb_strlen($arr[0]);
    foreach ($arr as $word){
        $wordLen = mb_strlen($word);
        if($wordLen > $max) $max = $wordLen;
    }
    echo 'Максимальная длинна слова: '. $max . ' симв.<br>';
    echo '<br>';
    echo 'Слова длинной ' . $max . ' симв.:<br><br>';
    foreach ($arr as $word){
        $wordLen = mb_strlen($word);
        if($wordLen === $max) echo $word . '<br>';
    }
    return $max;
}
task16('Скажи-ка, дядя, ведь не даром Москва, спаленная пожаром, Французу отдана? Ведь были ж схватки боевые, Да, говорят, еще какие! Недаром помнит вся Россия Про день Бородина!');
echo '<hr />';

// ---------------------------------------------- Task 17
function task17($num = '1'){
    echo '<strong>Задание 17.</strong><br />';
    $counter = 0;
    $totalCounter = 0;
    for($i = 1; $i <= 100; $i++){
        $str = (string) $i;
        for ($y = 0; $y < mb_strlen($str); $y++){
            if(mb_substr($str, $y, 1) === $num){
                $counter++;
            }
        }
        $totalCounter += $counter;
        $counter = 0;
    }
    return 'В числах от 1 до 100, количество символов "' . $num . '" = <strong>' . $totalCounter . '</strong>.';
}
echo task17("1");
echo '<hr />';

// ---------------------------------------------- Task 18
function task18($str = '', $n = 0){
    echo '<strong>Задание 18.</strong><br />';
    $string = '';
    $count = 0;
    if( ($str != '') && ($n > 0) ){
        for ($i = 0; $i < mb_strlen($str); $i++){
            $let = mb_substr($str, $i, 1);
            $count++;
            if($count === $n + 1){
                if($let === ' ') {
                    $let = '<br>';
                }else{
                    $let = '<br>' . $let;
                }
                $count = 0;
            }
            $string .= $let;
        }
    }
    return $string;
}
echo task18("Скажи-ка, дядя, ведь не даром Москва, спаленная пожаром, Французу отдана? Ведь были ж схватки боевые, Да, говорят, еще какие! Недаром помнит вся Россия Про день Бородина!", 15);

?>
</body>
</html>