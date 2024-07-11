<!-- To print first 500 prime numbers  -->

<?php
function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i * $i <= $num; $i++) {
        if ($num % $i === 0) {
            return false;
        }
    }
    return true;
}

for ($i = 2; $i <= 500; $i++) {
    if (isPrime($i)) {
        echo $i . " ";
    }
}
?>