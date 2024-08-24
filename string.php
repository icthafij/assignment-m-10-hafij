<?php

$strings = ["Hello", "World", "PHP", "Programming"];


function countVowels($string) {
    
    $string = strtolower($string);
    
    preg_match_all('/[aeiou]/', $string, $matches);
    
    return count($matches[0]);
}


foreach ($strings as $string) {
    
    $vowelCount = countVowels($string);
    
    $reversedString = strrev($string);
    
    echo "Original String: $string,\n";
    echo "Vowel Count: $vowelCount,\n";
    echo "Reversed String: $reversedString";
    echo "<br>";
}



