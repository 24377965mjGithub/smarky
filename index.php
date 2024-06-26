<?php

use App\Smark\Smark;
require './smark/autoload.php';

$users = Smark::select($conn, "SELECT * FROM users");

Smark::render('home', ['users' => $users]);

// ------- WORK ON FILE UPLOADS