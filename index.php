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

$ball = new golfball("Wilshon", 3, "Weed");

echo $ball;

$ballArray = [$ball];

$list = new BallListing($ballArray);

echo $list->listHtml();
echo $list->listJson();
echo $list->list();