<?php
require('./template/header.php');
require('./template/menu.php');
require('./bd/bd.php');
require 'helpers.php';
require './clases/primero.php';
if (empty($_GET['url']))
    $_GET['url']='home';

controller($_GET['url']);

require('./template/footer.php');
?>