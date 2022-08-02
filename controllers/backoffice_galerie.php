<?php

$query = $_POST;
$noms = $_POST['nom'].'s';

require_once "../models/db_login.php";
require_once "../models/".$query['nom'].".php";
require_once "../views/backoffice/galerie.php";