<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'models/model.php';
require 'libs/View.php';
require 'libs/Database.php';
require 'libs/Session.php';
require 'config/paths.php';
require 'config/database.php';
$app = new Bootstrap();