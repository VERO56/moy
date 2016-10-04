<?php
/**
 * Created by PhpStorm.
 * User: lejeune
 * Date: 03/10/16
 * Time: 16:25
 */
$students = array(
    'Emmanuel' => 42,
    'Thierry' => 51,
    'pascal' => 45,
    'Eric' => 48,
    'Nicolas' => 19);
$moyenne= array_sum($students) /5;
foreach ($students as $key => $value)
{
    echo 'Prénoms : '.$key.' '.'Age : '.$value.'<br />';

}
echo 'Moyenne : '.$moyenne.'<br/>';
