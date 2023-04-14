<?php
date_default_timezone_set("Asia/Ashgabat");
$hourNow = date("H");
if ($hourNow < 5) {
    echo "Ertiriňiz haýyrly bolsun!";
} else if ($hourNow > 12) {
    echo "Günüňiz haýyrly bolsun!";
} else if ($hourNow > 18) {
    echo "Agşamyňyz haýyrly bolsun!";
} else if ($hourNow > 23) {
    echo "Gijäňiz rahat bolsun!";
} 
?>