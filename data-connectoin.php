<?php
/**
 * Created by PhpStorm.
 * User: laptop
 * Date: 05/04/2017
 * Time: 13:44
 */

$pdo = new PDO('mysql:dbname=woodlands;host=127.0.0.1', 'student', 'student', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

/*
$results = $pdo->query('SELECT * FROM students');

foreach($results as $key)
{
    echo  $key['firstName'] . ' ' . $key['middleNames'] . ' ' . $key['lastName'] . '<br/>';
}
*/