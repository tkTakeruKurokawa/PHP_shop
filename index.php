<?php
require 'common.php';
$pdo = connect();
$st = $pdo->query("SELECT * FROM goods");
$goods = $st->fetchAll();
require 'index_form.php';
