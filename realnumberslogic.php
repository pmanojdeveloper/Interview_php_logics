<?php

// below is realnumbers but decimal format

for ($i = 0; $i <= 500; $i += 0.1) {
echo number_format($i, 2) . "<br>";
}

// below is the realnumbers

for ($i = 0; $i <= 500; $i++) {
echo $i . "<br>";
}
?>