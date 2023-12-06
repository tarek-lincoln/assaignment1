<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Hello! This is Assaignment1</title>
</head>
<body>
    <?php
    
    // Greetings start
        echo "<h1> Hello! co-learner's this is assaignment1. </h1>";
    // Greetings end

    // string type variable
        $name = "Tarek Lincoln";

    // integer type variable

        $age = 32;

    // float type varible

        $amount = 33333333.23232;

    // boolean type variable. Note: true = 1 and false = 0

        $i_am_a_dishonest_man = true;
        $i_am_a_honest_man = false;

    // output with concatenation

        echo "My name is $name </br>" . "My age is $age </br>" . "My salary is $amount </br>" . "I am a dishonest man $i_am_a_dishonest_man </br>" . "I am a honest man $i_am_a_honest_man </br>";

    /* basic operation with addition */

    $product_name = "Potato";
    $quantity = 100;
    $new_stock = 120;
    $total_stock = $quantity + $new_stock;

    echo $product_name . " total stock is " . $total_stock . "Kgs";

    ?>
</body>
</html>