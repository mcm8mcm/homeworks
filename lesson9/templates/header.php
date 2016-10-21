<?php

global $pageTitle;

?>
<!DOCTYPE html>
<html>
<head>
    <base href="http://localhost:8080/lesson9/index.php">
    <meta charset="utf-8">
    <title><?=isset($pageTitle) ? $pageTitle : '';?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="common/mcm.css">
    <?php if(isset($style)) echo $style;?>
    <?php if(isset($script)) echo $script;?>
</head>
<body>
    <?php include "menu.php"; ?>
<div class="container">