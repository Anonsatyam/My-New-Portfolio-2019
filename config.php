<?php
$db_user = 'root';
$db_pass = "";
$db_name = "my_portfolio";
$db = new PDO('mysql:host=localhost; dbname=my_portfolio; charset=utf8mb4', 'root', $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
