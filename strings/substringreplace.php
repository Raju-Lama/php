<?php
    $word = "Kathmandu";
    $newcity = substr_replace($word, "patan", 8, 5);
    // This replaces "Kath" with "patan" in the string "Kathmandu"
    echo $newcity;
?>