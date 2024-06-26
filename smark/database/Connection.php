<?php

use App\Smark\Smark;

require './smark/Smark.php';

$env = Smark::jsonRead('./env.json');
$conn = Smark::dbConnect($env['DB_HOST'], $env['DB_USERNAME'], $env['DB_PASSWORD'], $env['DB_NAME']);
