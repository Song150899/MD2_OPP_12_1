<?php
include_once "application.php";
echo "Total objects count: ". Application::$count ."<br/>";
$app1 = new Application('App One');
echo "total objects count: ". Application::$count."<br/>";