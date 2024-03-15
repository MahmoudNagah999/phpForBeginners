<?php

require "helper.php";
require "DataBase.php";
require "router.php";

$config = require "config.php";
$db = new DataBase($config['database']);
