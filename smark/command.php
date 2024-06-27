<?php

use App\Smark\Smark;

echo "SMARK";

while (true) {
    echo "\n";
    echo "Run: ";
    $command = fgets(STDIN);
    $c = trim($command);
    if ($c === '--help') {
        echo "\n";
        echo "make:view - Make a PHP file with a view blade template. \n";
        echo "make:process - Make a PHP file for backend processes. \n";
        echo "db:migrate - Migrate the database table. \n";
        echo "\n";
    } elseif($c === 'make:view') {
        echo "View Name: ";
        $command = fgets(STDIN);
        $c = trim($command);
        // File name and content
        $phpFileName = $c.'.php';
        $bladeFileName = $c.'.blade.php';

        if (!file_exists($c.'.php')) {
            shell_exec("echo php > $phpFileName");
            shell_exec("echo blade > views/$bladeFileName");

            $phpContents = file_get_contents('./smark/_templates/template.php');
            $changedTemplateName = str_replace('template', $c, $phpContents);
            file_put_contents("./$c.php", $changedTemplateName);
            $bladeContents = file_get_contents('./smark/_templates/template.blade.php');
            file_put_contents("./views/$c.blade.php", $bladeContents);

            echo "View Created Successfully!";
        } else {
            echo "View Already Exists.";
        }
    } elseif($c === 'make:process') {
        echo "Process Name: ";
        $command = fgets(STDIN);
        $c = trim($command);
        // File name and content
        $phpFileName = '_'.$c.'.php';

        if (!file_exists($c.'.php')) {
            shell_exec("echo php > $phpFileName");

            $phpContents = file_get_contents('./smark/_templates/template_process.php');
            file_put_contents("./_$c.php", $phpContents);

            echo "Process Created Successfully!";
        } else {
            echo "Process Already Exists.";
        }
    } elseif($c === 'db:migrate') {// Database configuration

        require './smark/Smark.php';

        $env = Smark::jsonRead('./env.json');

        $dbHost = $env['DB_HOST'];
        $dbUsername = $env['DB_USERNAME'];
        $dbPassword = $env['DB_PASSWORD'];
        $dbName = $env['DB_NAME'];
        $sqlFilePath = 'database/database.sql';

        // Command to import SQL file
        $importTablesCommand = "mysql -h $dbHost -u $dbUsername -p$dbPassword $dbName < $sqlFilePath";

        // Execute the command
        $importDB = shell_exec($importTablesCommand);

        // Check if the command was executed successfully
        // if ($importDB) {
        //     echo "Database imported successfully.";
        // } else {
        //     echo "An error occurred while importing the database.";
        //     echo "<pre>$importDB</pre>";
        // }

        exit;
    } elseif($c === 'exit') {
        echo "Goodbye.";
        break;
    }else {
        echo "INVALID COMMAND";
    }
}
