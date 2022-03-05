<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<body>

<?php

session_start();

require 'Flash.php';

$flash = new Flash("danger");



$flash->setMessage("danger", "Страница не загрузилась");

$flash->setCssClass("danger", "alert alert-danger");
$flash->setCssClass("danger", "text-dark");

$flash->addMessage("danger", ". Попробуйте позже");

var_dump($flash->exists("danger"));
$flash->displayMessage("danger");
$flash->destroyMessage("danger");
var_dump($flash->exists("danger"));

$flash->displayMessage("danger");




/*
$flash->setMessage("success", "Страница загрузилась");

$flash->setCssClass("success", "alert alert-success");
$flash->setCssClass("success", "text-dark");

$flash->addMessage("success", ". Попробуйте позже");
$flash->displayMessage("success");

*/
?>
</body>
</html>

