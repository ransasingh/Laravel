<?php
function isArmstrong($number)
{
    $sum = 0;
    $temp = $number;

    while ($temp > 0) {
        $digit = $temp % 10;
        $sum += pow($digit, 3);
        $temp = (int)($temp / 10);
    }

    if ($number == $sum) {
        return true;
    } else {
        return false;
    }
}

$number = 371;

if (isArmstrong($number)) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}

echo "<br><br>";

echo "Output Format:<br>";
echo "5 9<br>";

for ($i = 2; $i <= 4; $i++) {
    $first = $i + 3;
    $second = $i + 7;
    echo $first . $second . "<br>";
}
?>
