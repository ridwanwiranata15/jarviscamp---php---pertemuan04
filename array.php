<?php 
    $fruit = [1,2,3,4];
    $fruit[0] = "Hijau";
    $fruit[2] = "Hijau";
    print_r($fruit);

    echo "<br>";
    echo count($fruit);
    echo "<br>";
    echo array_push($fruit, "mangga", "apel", );
    echo "<br>";
    print_r($fruit);
    echo "<br>";
    echo var_dump(in_array("Hijau", $fruit));
    echo "<br>";
    $las = array_pop($fruit);
    print_r($las);
    unset($fruit);
    $fruit = [1,2,3,4];
    echo $_SERVER['']
    ?>