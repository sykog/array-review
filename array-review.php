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
            $cupcakes = array("grasshopper" => "The Grasshopper", "maple" => "Whiskey Maple Bacon",
                    "carrot" => "Carrot Walnut", "caramel" => "Salted Caramel Cupcake",
                    "velvet" => "Red Velvet", "lemon" => "Lemon Drop", "tiramisu" => "Tiramisu");

            printArray($animals);
            $animals = addElement($animals, "goat");
            $animals = addElement($animals, "Boa");
            printCheckbox($cupcakes, "flavors[]");

            // print each element in the array
            function printArray($arr) {
                sort($arr); // alphabetical order
                foreach ($arr as $element) {
                    echo "$element ";
                }
                echo "<br>";
            }

            // add element to array if not already present
            function addElement($arr, $element) {
                echo "adding $element...<br>";
                if (!in_array(strtolower($element), $arr)) {
                    array_push($arr, $element);
                }
                printArray($arr);
                return ($arr); // return array to save it
            }

            // print each array element as a checkbox
            function printCheckbox($arr , $name) {
                foreach($arr as $key => $value) {
                    echo "<input type='checkbox' name='$name' value='$key'> $value<br>";
                }
            }
        ?>
    </body>
</html>