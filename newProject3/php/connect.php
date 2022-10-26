<?php


$connect = mysqli_connect('localhost', 'root', '', 'test task2');

if (!$connect) {
    echo 'Error connect to database!';
}
