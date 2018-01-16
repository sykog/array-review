<?php
    /*
     * Antonio Suarez
     * 1/16/18
     * http://asuarez.greenriverdev.com/328/PHPReview/array-review/array-review.php
     */
    // error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>php Review Assignment</title>
    </head>
    <body>
        <?php
            $animals = array('panda', 'alpaca', 'boa');

            printArray($animals);

            function printArray($animals) {
                foreach ($animals as $animal) {
                    echo "$animal ";
                }
            }
        ?>
    </body>
</html>