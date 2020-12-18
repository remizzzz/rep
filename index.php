<?php

require_once 'core/EquationInterface.php';
require_once 'core/LogAbstract.php';
require_once 'core/LogInterface.php';
require_once 'Remizov/LinearEquation.php';
require_once 'Remizov/QuadraticEquation.php';
require_once 'Remizov/MyLog.php';

use Remizov\QuadraticEquation;
use Remizov\MyLog as ml;

ini_set("display_errors", 1);
error_reporting(-1);

$eq = new QuadraticEquation();
$solutions = $eq->solve(4, -4, 0);


ml::log("123");
ml::log("13");
ml::log("23");
ml::write();
?> 