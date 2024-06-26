<?php

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
    } elseif($c === 'exit') {
        echo "Goodbye.";
        break;
    } else {
        echo "INVALID COMMAND";
    }
}
