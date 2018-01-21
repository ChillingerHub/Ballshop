<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 20.01.2018
 * Time: 11:28
 */

require_once "vendor/autoload.php";

use stefan\{
    ball, ball\fussball, ball\basketball, ball\golfball, ball\BallListing
};

$ball_1_1 = new fussball("Stevens", 20, "Leder");
$ball_1_2 = new fussball("Marksch", 20.3, "Plastik");

$ball_2_1 = new basketball("Wilshon", 31.5, "Leder");
$ball_2_2 = new basketball("Wilshon", 33.5, "Plastik");

$ball_3_1 = new golfball("Klips", 4, "Plastik");
$ball_3_2 = new golfball("Knaber", 3.5, "Plastik");



$ballarray = array(
    $ball_1_1,
    $ball_1_2,
    $ball_2_1,
    $ball_2_2,
    $ball_3_1,
    $ball_3_2
);

$list = new BallListing($ballarray);
$list->list();

/*
echo $ball;
echo $list->listHtml();
echo $list->listJson();
echo $list->list();
*/
