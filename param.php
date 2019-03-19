<?php

require 'db_connect_inc.php';

define('BDD_HOST', DB_HOST);
define('BDD_USER', DB_USER);
define('BDD_PWD', DB_PASSWORD);
define('BDD_NAME', DB_NAME);
define('BDD_DSN', 'mysql:host=' . BDD_HOST . ';dbname=' . BDD_NAME);
