<?php

    echo "Datatypes in php.";

    // 1.String
    // 2.Float
    // 3.Boolean
    // 4.Object
    // 5.Integer
    // 6.Array
    // 7.Null

    $name = "Ali Hassan"; // string combination of characters
    $number = 10000;  // integer value
    // we can overwrite the variable value
    $number = 5342.2; // this is the floating value


    // Boolean eaither can be false or true
    $iskya = false;
    $isyes = true;

    echo $iskya;
    echo $isyes;

    // so if i want to know the type and the value of the varaiable i can use the var_dump function

    echo var_dump($iskya);
    echo "<br>";
    echo var_dump($isyes);

    // making an array to store many values

    $bros = array("Noman",1);
    echo "<br>";
    echo var_dump($bros);
    echo "<br>";
    echo $bros[0];
    echo "<br>";
    echo $bros[1];
    echo "<br>";
    // echo $bros[4]; --> error
    // if you access the index which is not present then it will throw the error as the size of the array is 2

    // NULL means nothing reseting the varaible

    $use_of_null = NULL;
    echo $use_of_null;
?>