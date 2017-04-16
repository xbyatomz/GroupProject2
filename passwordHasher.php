<?php
/**
 * Created by PhpStorm.
 * User: laptop
 * Date: 05/04/2017
 * Time: 14:31
 */

/*
 *  Use this file to hash passwords in the database
 */
require_once 'compiler.php';

$password = 'password123';
$hashed = password_hash($password, PASSWORD_DEFAULT);

$stmt = $pdo->prepare('UPDATE students 
                                SET password = :id
                                WHERE lastName = "Insert_LastName_Here" ');
$criteria = [
    'id' => $hashed
];

$stmt->execute($criteria);