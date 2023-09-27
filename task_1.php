<?php
function removeEvenNumbers($numbers) {
    $result = [];

    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $result[] = $number;
        }
    }

    print_r($result);
}
$numbers = range(1, 10);
removeEvenNumbers($numbers);
?>
