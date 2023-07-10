<?php
//Declare a Multi Dimensioned array of floats called balances having Three rows and five columns.
$balances = array(
    array(12.50, 11.30, 13.50, 10.80, 11.20),
    array(9.60, 8.50, 11.10, 7.50, 5.50),
    array(13.50, 11.40, 16.20, 11.10, 15.60)
);

echo "multidimensional array row[2] index and column[3] index value is:";
    print_r($balances[2][3]);
    echo "<br>";
    echo "multidimensional array row[0] index and column[0] index value is:";
    print_r($balances[0][0]);
    echo "<br>";



?>
