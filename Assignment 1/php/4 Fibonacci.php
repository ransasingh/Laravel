<?php
$terms = 10; // Number of terms to be printed
$b= 0;
$c = 1;

echo "Fibonacci Series: ";
echo "<br>";

echo $b. ", " . $c;

for ($i = 3; $i <= $terms; $i++) {
    $nextTerm = $b+ $c;
    echo ", " . $nextTerm;

    $b= $c;
    $c = $nextTerm;
}
?>
